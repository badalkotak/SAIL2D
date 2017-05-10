<?php
include("../Resources/dbcon.php");
//error_reporting(0);

$rateId=$_REQUEST['rateId'];
$e=$_REQUEST['q1'];
$cs=$_REQUEST['q2'];
$id=$_REQUEST['id'];
if($insert=mysqli_query($con,"INSERT INTO `E_CS`( `UserId`, `E`, `CS`) VALUES ('$rateId','$e','$cs')"))
{
	$delete=mysqli_query($con,"DELETE FROM PendingRating WHERE UserId='$rateId' AND ScoreId='$id'");
	echo "<script>alert('Rating Added Successfully! Thank You!');window.location.href='UserDashboard.php'</script>";
	$userId=$rateId;
	include("rating.php");
}

else
{
	echo mysqli_error($con);
	//echo "<script>alert('Problem in adding rating try again later!');window.location.href='UserDashboard.php'</script>";
}
?>