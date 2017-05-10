<?php
include("../../Resources/dbcon.php");
error_reporting(0);

$program=$_REQUEST['pid'];
if($program==0)
echo "<option value='0'>First Select a Program</option>";
else
echo "<option value='0'>Select a Course</option>";
$getProg=mysqli_query($con,"SELECT * FROM Courses WHERE ProgramId='$program'");
while($getRow=mysqli_fetch_array($getProg))
{
	$course=$getRow['CourseName'];
	$CourseId=$getRow['CourseId'];
	echo "<option value='$CourseId'>$course</option>";
}
echo "<option value='-1'>Others</option>";
?>
