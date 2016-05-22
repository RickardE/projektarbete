<?php	  
session_start();
ob_start();	  
?>
	  
<?php include("../data/session.php");?>
<?php include("../header.php");?>
 
	  
	  






	  <?php
$sql = "SELECT * FROM users JOIN tables ON users.id=tables.user_id WHERE table_id='".$_GET['table_id']."'"; 
$result = $db->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	  												
    	
    	?>
<?php include_once("../header.php");?>
   
<div class="container">
   
<p>Namn: <?php echo $row["name"];?></p>
<p>Plats: <?php echo $row["location"];?></p>
<p>Antal platser: <?php echo $row["NrOfSeats"];?></p>
<p>Start: <?php echo $row["start_date"];?></p>
<p>Slut: <?php echo $row["end_date"];?></p>

   
   </div>
   
   
   
   <?php
   }
}
   else {
   	
   	echo "Empty";
   
   }
   
   ?>
   
   <?php include("../footer.php");?>