<?php
ob_start();
session_start();

?>

<?php include("../data/dbconnect.php");?>


<?php include("../data/session.php");?>


<?php include("../header.php");?>


<?php
$sql = "SELECT * FROM users JOIN tables ON users.id=tables.user_id";
$result = $db->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	
    	
    	?>
<div class="container">

<?php echo $row['name'];?>
Publicerad av: <?php echo $row['firstname'];?>

</div>


<?php

    }
    
    
}

$db->close();


?>

<?php include("../footer.php");?>