<?php
   include('../data/session.php');
?>


	  <?php
$sql = "SELECT * FROM users WHERE email = '$login_session'";
$result = $db->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	
    	
    	?>


<?php include_once("../header.php");?>
   
   <div class="container">
   

   
Välkommen <?php echo $row["firstname"]; ?> <?php echo $row["lastname"]; ?>
   Inloggad som: <?php echo $login_session; ?>
   
   
   
   
   
   <?php
   }
}
   else {
   	
   	echo "Error";
   
   }
   
   ?>
      
      <h2><a href = "../logout">Sign Out</a></h2>
      
      
      </div>

<?php include_once("../footer.php");?>