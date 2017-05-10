<?php
include("../Resources/dbcon.php");
//error_reporting(0);

$PIId=$_REQUEST['pi'];

$concept=$_REQUEST['concept'];
$pi_question=$_REQUEST['pi_question'];
$pi_answer=$_REQUEST['pi_answer'];
$pd=$_REQUEST['pd'];

$id=$_REQUEST['id'];
$getUserId=mysqli_query($con,"SELECT * FROM PIScores WHERE ScoreId='$id'");
while($u_row=mysqli_fetch_array($getUserId))
{
	$post=$u_row['UserId'];
	$review=$u_row['ReviewerId'];
}
//$ds=0;
$ds=$_REQUEST['ds'];
if($update=mysqli_query($con,"UPDATE `PI` SET `PIConcept`='$concept',`PIQuestion`='$pi_question',`PIAnswer`='$pi_answer',`PIPlausibleDistractors`='$pd' WHERE `PIId`='$PIId'"))
{
	$msg="<b><a href=UpdatedPI.php?id=$id>I have Updated the Activity please have a look !</a></b>";
	$query='INSERT INTO Chat_PI_'.$id.'_'.$post.'_'.$review.'(`Message`,`User`) VALUES ("'.$msg.'","'.$post.'")';
	$insertMsg=mysqli_query($con,$query);
	if($ds==1)
	{
		echo "<script>alert('Activity Updated!');window.location.href='disagreementResolver.php?id=$id&type=2'</script>";
	}
	else if($ds=="")
	{
		echo "<script>alert('Activity Updated!');window.location.href='UpdateActivity.php'</script>";
	}
}
else
{
	echo mysqli_error($con);
}
?>