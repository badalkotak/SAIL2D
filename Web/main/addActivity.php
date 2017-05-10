<?php
include("../Resources/dbcon.php");
//error_reporting(0);

$t_dur=$_REQUEST['dur'];
$t_dur=trim($t_dur);

$t_question=$_REQUEST['question'];
$t_question=trim($t_question);

$t_answer=$_REQUEST['answer'];
$t_answer=trim($t_answer);

$p_dur=$_REQUEST['p_dur'];
$p_dur=trim($p_dur);

$p_question=$_REQUEST['p_question'];
$p_question=trim($p_question);

$p_answer=$_REQUEST['p_answer'];
$p_answer=trim($p_answer);

$s_dur=$_REQUEST['s_dur'];
$s_dur=trim($s_dur);

$s_question=$_REQUEST['s_question'];
$s_question=trim($s_question);

$s_answer=$_REQUEST['s_answer'];
$s_answer=trim($s_answer);

$topicId=$_REQUEST['tps'];
$userId=$_REQUEST['user'];

if($insert=mysqli_query($con,"INSERT INTO `TPS`(`TopicId`, `ThinkQuestion`, `ThinkOutput`, `PairQuestion`, `PairOutput`, `ShareQuestion`, `ShareOutput`,`ThinkDuration`, `PairDuration`, `ShareDuration`, `User`) VALUES ('$topicId','$t_question','$t_answer','$p_question','$p_answer','$s_question','$s_answer','$t_dur','$p_dur','$s_dur','$userId')"))
{
	echo "<script>alert('Activity Added Successfully');window.location.href='createActivity.php'</script>";
}

else
{
	echo "<script>alert('Something went wrong! Contact the Managment for help!');window.location.href='createActivity.php'</script>";
}
?>