<?php
if(isset($_POST['login'])){

// CHECK IF FIELDS ARE NOT EMPTY
if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){

// Escape special characters.
$email = mysqli_real_escape_string($connection, htmlspecialchars(trim($_POST['email'])));

$query = mysqli_query($connection, "SELECT * FROM `users` WHERE email = '$email'");

if(mysqli_num_rows($query) > 0){

$row = mysqli_fetch_assoc($query);
$user_db_pass = $row['password'];

	
	// VERIFY PASSWORD
	$check_password = password_verify($_POST['password'], $user_db_pass);
	
	if($check_password === TRUE){
	session_start();
	$query1 = mysqli_query($connection, "SELECT * FROM `users` WHERE email = '$email'");
	$querys1=mysqli_fetch_array($query1);
	$emails=mysqli_fetch_array($email);
	$_SESSION['u_id'] = $querys1['user_id']; 
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
	$error_message = "Incorrect Email Address or Password.";
	}
	
	}
	else{
	
	// IF FIELDS ARE EMPTY
	$error_message = "Please fill in all the required fields.";
	}
	
	}
	?>