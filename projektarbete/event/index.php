<?php 
session_start();
ob_start();
?>

<?php include("../data/dbconnect.php");?>

<?php include("../data/session.php");?>

<?php include("../header.php");?>


<div class="container">


<div class="add-event"><a href="add_table.php">Skapa bord</a></div>


    	

    	

<?php
$sql = "SELECT * FROM users JOIN tables ON users.id=tables.user_id";
$result = $db->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	
?>
    	
<div class="container">

<?php echo $row['name'];?>
Publicerad av: <?php echo $row['firstname'];?>
<a href="join_table?table_id=<?php echo $row['table_id'];?>&user_id=<?php echo $active_id;?>">Delta</a>
</div>
<?php 


    }
    
}



$db->close();


?>

<?php

$name = "hej";

$random = rand(10,1000);

$lol = $name + $random;
echo $lol;

?>

</div>






<?php include("../footer.php");?>
