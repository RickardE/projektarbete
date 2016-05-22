<?php
ob_start(); 
session_start();
?>

<?php include_once("../data/dbconnect.php"); ?>

<?php



if(isset($_POST['btn-login'])) {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = md5(mysqli_real_escape_string($db,$_POST['password'])); 
      
      $sql = "SELECT id FROM users WHERE email='$email' AND password='$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      

      if($count == 1) {
      	
     $_SESSION['login_user'] = $email;
   
     header("location: ../home");
     exit;
     
     



      }else {
  			 $_SESSION['message_login'] = 'Fel lösenord eller e-postadress.';
      	   	 header("location: /projektarbete"); 
   
         
      }
   }
?>