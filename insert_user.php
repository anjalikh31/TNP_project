<?php
if(isset($_POST['email']))
{
require 'connection.php';
// CHECK IF FIELDS ARE NOT EMPTY
if(!empty($_POST['enum'])&& !empty($_POST['password'])  && !empty(trim($_POST['email']))){
    
// Escape special characters.


$email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
$enum =$_POST['enum'];

//IF EMAIL IS VALID
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  

// CHECK IF EMAIL IS ALREADY REGISTERED
$check_email = mysqli_query($conn, "SELECT `email` FROM `users` WHERE email = '$email'");
$check_enum = mysqli_query($conn, "SELECT `enum` FROM `users` WHERE enum = '$enum'");
if(mysqli_num_rows($check_email) > 0){    
$message = "This Email Address is already registered. Please Try another.";
}
else {if(mysqli_num_rows($check_enum) > 0){    
    $message = "This Enrollment number is already registered. Please Try another.";
    }
else{
// IF EMAIL IS NOT REGISTERED
/* -- 

-- */

$user_hash_password = password_hash($_POST['password'],PASSWORD_DEFAULT);

// INSER USER INTO THE DATABASE
$insert_user = mysqli_query($conn, "INSERT INTO `users` ( email, password,enum) VALUES ( '$email', '$user_hash_password','$enum')");

if($insert_user === TRUE){
$message = "Thanks! You have successfully signed up.";
}
else{
$message = "Oops! something wrong.";
}
}
}}
else{
// IF EMAIL IS INVALID
$message = "Invalid email address";
}
}
else{
// IF FIELDS ARE EMPTY
$message = "Please fill in all the required fields.";
}
echo $message;
}
?>