<?php
include("../Resources/dbcon.php");
error_reporting(0);

$cid=$_REQUEST['cid'];
$t=$_REQUEST['name'];

$t=urldecode($t);
$t=trim($t);

if($t!="")
{
if($insert=mysqli_query($con,"INSERT INTO `Topics`(`CourseId`, `TopicName`) VALUES ('$cid','$t')"))
echo "1";
else
echo "0";
}
?>
