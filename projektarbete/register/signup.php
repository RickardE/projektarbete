<?php
ob_start(); 
session_start();
?>


<?php include_once("../data/dbconnect.php");?>

<?php

if(isset($_POST['btn-signup']))
{
	
	if ($_POST['firstname'] == "" || $_POST['lastname'] == "" || $_POST['city'] == "" || $_POST['age'] == "" || $_POST['email'] == "" || $_POST['password'] == "") {
	
		 $_SESSION['message_signup'] = 'Du måste fylla i alla fält.';
      	 header("location: /projektarbete");
		
	} 
	else {	
	$fname = $db->real_escape_string(trim($_POST['firstname']));
	$lname = $db->real_escape_string(trim($_POST['lastname']));
	$city = $db->real_escape_string(trim($_POST['city']));
	$age = $db->real_escape_string(trim($_POST['age']));
	$email = $db->real_escape_string(trim($_POST['email']));
	$pass = $db->real_escape_string(trim($_POST['password']));
	$new_pass = md5($pass);
	
	$check_email = $db->query("SELECT email FROM users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if($count==0){
		
		$query = "INSERT INTO users(firstname,lastname,city,age,email,password) VALUES('$fname','$lname','$city','$age','$email','$new_pass')";
		
		if($db->query($query))
		{		$_SESSION['message_signup'] = 'Tack för att du blev medlem! Vänligen logga in.';
		header("location: /projektarbete");
		}
		else
		{
			$_SESSION['message_signup'] = 'Error';
			header("location: /projektarbete");
		}
	}
	else{
		
		
		$_SESSION['message_signup'] = 'E-postadressen används redan'; 
		header("location: /projektarbete");
	}
	
	$db->close();
	
	}
}
?>
