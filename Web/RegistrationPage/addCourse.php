<?php
include("../Resources/dbcon.php");
error_reporting(0);

$pid=$_REQUEST['pid'];
$c=$_REQUEST['name'];

$c=urldecode($c);
$c=trim($c);

if($c!="")
{
if($insert=mysqli_query($con,"INSERT INTO `Courses`(`CourseName`, `ProgramId`) VALUES ('$c','$pid')"))
echo "1";
else
echo "0";
}
?>
