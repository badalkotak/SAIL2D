<?php
include("../Resources/dbcon.php");
//error_reporting(0);

$userId=$_REQUEST['user'];
$concept=$_REQUEST['concept'];
$pi_question=$_REQUEST['pi_question'];
$pi_answer=$_REQUEST['pi_answer'];
$pd=$_REQUEST['pd'];
$topicId=$_REQUEST['pi'];

if($insert=mysqli_query($con,"INSERT INTO `PI`(`TopicId`, `PIConcept`, `PIQuestion`, `PIAnswer`, `PIPlausibleDistractors`, `User`) VALUES ('$topicId','$concept','$pi_question','$pi_answer','$pd','$userId')"))
{
	echo "<script>alert('Activity Added Successfully!');window.location.href='../main/'</script>";
}
else
{
	echo "<script>alert('Problem in adding Activity!');window.location.href='activity.php'</script>";
}
?>