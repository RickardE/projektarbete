



<html>
<head>
<title>DiningCompete</title>

<link href="/projektarbete/css/style.css" rel="StyleSheet" type="text/css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<meta charset="UTF-8">

</head>

<body>

<div id="wrapper">

  <?php if(isset($_SESSION['login_user'])){
  	
  	
  	?>

<header class="main">
  
	  <?php
$sql = "SELECT * FROM users WHERE email = '$login_session'";
$result = $db->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	
    	
    	?>



<a href="../profile?id=<?php echo $row["id"];?>" class="logged-on" title="Visa din profl"><?php echo $row["firstname"];?> <?php echo $row["lastname"];?></a> 
 
<nav class="user-menu">
<li><a href="/projektarbete">HEM</a></li>
<li><a href="/projektarbete/event">BORD</a></li>
<li><a href="#">NYHETER</a></li>
<li><a href="#">ANVÄNDARE</a></li>
<li><a href="../logout">LOGGA UT</a></li>
</nav> 



</header>

   <?php
   }
}

?>



<?php
  }
  else {
  	
  	
  }


?>


