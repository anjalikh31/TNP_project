
<?php
session_start();
$error_message="sucessfully Logged in";
if(isset($_POST['email'])){
    require 'connection.php';
    
// CHECK IF FIELDS ARE NOT EMPTY
if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){

// Escape special characters.
$email = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['email'])));

$pass=$_POST['password'];
$query = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'");

if(mysqli_num_rows($query) > 0){
    
$row = mysqli_fetch_assoc($query);
$user_db_pass = $row['password'];

	
	// VERIFY PASSWORD
<<<<<<< HEAD
=======
	$check_password = password_verify($_POST['password'], $user_db_pass);
	echo $user_db_pass ;
	if($check_password){
>>>>>>> a84558d66ca4ffc3a1b8acd442e66db9bd4e00af
	
	//echo $check_password;
	echo $pass;
	echo $email;
	error_log($_POST['password']);
	error_log($user_db_pass);
	//error_log($check_password);
	echo password_verify( $pass, $user_db_pass);

	if(password_verify( $pass, $user_db_pass))
	{
	$query1 = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'");
	$querys1=mysqli_fetch_array($query1);
	$emails=mysqli_fetch_array($email);
	$_SESSION['u_id'] = $querys1['id']; 
	$_SESSION['u_email'] = $emails; 
	header('Location: index.php');
	exit;
	
	}
	else{
	// INCORRECT PASSWORD
	$error_message = "Incorrect Email Address or Password.";
	
	}
	}
	else{
	// EMAIL NOT REGISTERED
	$error_message = "Incorrect Email Address";
	}
	
	}
	else{
	
	// IF FIELDS ARE EMPTY
	$error_message = "Please fill in all the required fields.";
	}
	
	}
    echo $error_message;
	?>