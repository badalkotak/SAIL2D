<?php
include("../Resources/dbcon.php");
error_reporting(0);

$get=mysqli_query($con,"SELECT * FROM Affiliations");
while($row=mysqli_fetch_array($get))
{
	$id=$row['AffiliationId'];
	$name=$row['AffiliationName'];
	echo "<option id='$id'>$name</option>";
}
?>
