<?php

session_start();
ob_start();

?>




<?php include("../data/session.php");?>


<?php include("../header.php");?>


<div class="container">


<form action="addtable.php" method="post" id="add-table">


<input type="text" placeholder="Namn" name="name" class="input" />

<input type="text" placeholder="Ange datum och tid" name="start_date" class="input" />

<input type="text" placeholder="Ange sluttid och slutdatum" name="end_date" class="input" />

<input type="text" placeholder="Ange plats" name="location" class="input" />

<input type="text" placeholder="Antal gäster" name="seats" class="input" />

<input type="submit" name="submit" />


	<?php           
if (isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
        
?>


</form>





</div>



<?php include("../footer.php");?>

