<?php	  
session_start();
ob_start();	  
?>
	  
<?php include("../data/session.php");?>

<?php include("../data/dbconnect.php");?>	  
	  
<?php



$table_id = $_GET['table_id'];
$user_id = $_GET['user_id'];
 

$sql = "INSERT INTO active_tables (table_id,user_id) VALUES ('$table_id','$user_id')";

if($db->query($sql)) {
	
	echo"Success";
}
	else {
		echo"Error";
	}




?>