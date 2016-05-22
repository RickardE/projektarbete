<?php


   ob_start(); 
   session_start();
   include('dbconnect.php');
   

   

   
   $user_check = $_SESSION['login_user'];

   
   
   
   $ses_sql = mysqli_query($db,"SELECT * FROM users WHERE email = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
    $active_id = $row['id'];
   
   
   
 
   
   if(!isset($_SESSION['login_user'])){
      header("location:/projektarbete/index.php");
   }

?>