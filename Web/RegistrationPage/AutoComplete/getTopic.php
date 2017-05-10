<?php
include("../../Resources/dbcon.php");
error_reporting(0);

$course=$_REQUEST['cid'];
if($course==0)
echo "<option value='0'>First Select a Course</option>";
else
echo "<option value='0'>Select a Topic</option>";
$getProg=mysqli_query($con,"SELECT * FROM Topics WHERE CourseId='$course'");
while($getRow=mysqli_fetch_array($getProg))
{
	$topic=$getRow['TopicName'];
	$topicId=$getRow['TopicId'];
	echo "<option value='$topicId'>$topic</option>";
}
echo "<option value='-1'>Others</option>";
?>
