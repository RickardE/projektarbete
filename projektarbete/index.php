<?php
session_start();
ob_start();

   if(isset($_SESSION['login_user'])){
      header("location:/projektarbete/home");
   }

?>


<?php include_once 'data/dbconnect.php'; ?>
<?php include("header.php"); ?>

<div id="start">

<div id="index">

<section class="login">
<?php include_once("login/index.php");?>
</section>

<section class="signup">

<?php include_once("register/index.php");?>

</section>

</div>

<div class="clear"></div>
</div>



<?php include("footer.php"); ?>