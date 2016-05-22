<?php	  
session_start();
ob_start();	  
?>
	  
<?php include("../data/session.php");?>
<?php include("../header.php");?>
 
	  
	  
	  <?php
$sql = "SELECT * FROM users WHERE id = '".$_GET['id']."'";
$result = $db->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	
    	
    	?>


<?php include_once("../header.php");?>
   
<div class="container">
   
<p>Förnamn: <?php echo $row["firstname"];?></p>
<p>Efternamn: <?php echo $row["lastname"];?></p>
<p>Ålder: <?php echo $row["age"];?></p>
   
   </div>
   
   
   
   <?php
   }
}
   else {
   	
   	header("location: ../home");
   
   }
   
   ?>
   
   <?php include("../footer.php");?>