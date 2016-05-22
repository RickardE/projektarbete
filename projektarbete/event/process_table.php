<?php
ob_start(); 
session_start();
?>





<?php include("../data/dbconnect.php");?>


	  <?php
$sql = "SELECT id FROM users";
$result = $db->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	
    	
    	?>


<?php

if(isset($_POST['submit'])) {



$name = $_POST["name"];
$start_date = $_POST["start_date"];
$end_date = $_POST["end_date"];
$location = $_POST["location"];
$seats = $_POST["seats"];





if ($name == "" || $start_date == "" || $end_date == "" || $location == "" || $seats == "")  {
$_SESSION['message'] = "Du måste fylla i alla fält.";
header("location: add_table.php"); 
}
else {
	
$query = "INSERT INTO tables (name, start_date, end_date, location, NrOfSeats, user_id)
VALUES ('$name', '$start_date', '$end_date', '$location', '$seats', '".$row['id']."')";

if($db->query($query)) {

$_SESSION['message'] = 'Din bjudning är nu skapad.';
header("location: add_table.php");
    
} else {
$_SESSION['message'] = 'OOPS! Något gick visst fel.';
header("location: add_table.php");
}

	
}


}


?>

<?php

    }
}

$db->close();

?>




	