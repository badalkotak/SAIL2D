<?php
include("../../Resources/dbcon.php");
error_reporting(0);

$domain=$_REQUEST['did'];
if($domain==0)
echo "<option value='0'>First Select a Domain</option>";
else
echo "<option value='0'>Select a Program</option>";
$getProg=mysqli_query($con,"SELECT * FROM Programs WHERE DomainId='$domain'");
while($getRow=mysqli_fetch_array($getProg))
{
	$program=$getRow['ProgramName'];
	$programId=$getRow['ProgramId'];
	echo "<option value='$programId'>$program</option>";
}
?>
