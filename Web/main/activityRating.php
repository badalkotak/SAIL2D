<?php
include("../Resources/dbcon.php");
//error_reporting(0);

$id=$_REQUEST['id'];
$type=$_REQUEST['type'];

if($type==1)
{
	$q1=$_REQUEST['q1'];
	$q2=$_REQUEST['q2'];
	$q3=$_REQUEST['q3'];
	$q4=$_REQUEST['q4'];
	$q5=$_REQUEST['q5'];
	$q6=$_REQUEST['q6'];

	$total=$q1+$q2+$q3+$q4+$q5+$q6;

	$r1=$_REQUEST['r1'];
	$r2=$_REQUEST['r2'];
	$r3=$_REQUEST['r3'];
	$r4=$_REQUEST['r4'];
	$r5=$_REQUEST['r5'];
	$r6=$_REQUEST['r6'];

	session_start();
	$user=$_SESSION['uname'];
	$getId=mysqli_query($con,"SELECT UserId FROM UserDetails WHERE UserEmail='$user'");
	while($row=mysqli_fetch_array($getId))
	{
		$ReviewerId=$row['UserId'];
	}

	$getUserId=mysqli_query($con,"SELECT User FROM TPS WHERE TPSId='$id'");
	while($tpsrow=mysqli_fetch_array($getUserId))
	{
		$UserId=$tpsrow['User'];
	}

	$result=mysqli_query($con,"SELECT COUNT(ScoreId) FROM TPSScores WHERE UserId='$UserId' && TPSID='$id' && ReviewerId='ReviewerId'");
	while($row=mysqli_fetch_array($result))
	{
		$c=$row['COUNT(ScoreId)'];
	}

	if($c==0)
	{
	if($insert=mysqli_query($con,"INSERT INTO `TPSScores`(`UserId`, `ReviewerId`, `TPSId`, `Score1`, `Score2`, `Score3`, `Score4`, `Score5`, `Score6`, `TotalScore`, `Reason1`, `Reason2`, `Reason3`, `Reason4`, `Reason5`, `Reason6`) VALUES ('$UserId','$ReviewerId','$id','$q1','$q2','$q3','$q4','$q5','$q6','$total','$r1','$r2','$r3','$r4','$r5','$r6')"))
	{
		echo "<script>alert('Thanks for Rating the Activity!');window.location.href='viewActivity.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in rating activity, please try again later!');window.location.href='viewActivity.php';</script>";
	}
	}

	else
	{
		echo "<script>alert('You have already rated that activity!');window.location.href='viewActivity.php';</script>";
	}
}

else if($type==2)
{
	$q1=$_REQUEST['q1'];
	$q2=$_REQUEST['q2'];

	$total=$q1+$q2;

	$r1=$_REQUEST['r1'];
	$r2=$_REQUEST['r2'];

	session_start();
	$user=$_SESSION['uname'];
	$getId=mysqli_query($con,"SELECT UserId FROM UserDetails WHERE UserEmail='$user'");
	while($row=mysqli_fetch_array($getId))
	{
		$ReviewerId=$row['UserId'];
	}

	$getUserId=mysqli_query($con,"SELECT User FROM PI WHERE PIId='$id'");
	while($pirow=mysqli_fetch_array($getUserId))
	{
		$UserId=$pirow['User'];
	}

	$result=mysqli_query($con,"SELECT COUNT(ScoreId) FROM PIScores WHERE UserId='$UserId' && PIId='$id' && ReviewerId='ReviewerId'");
	while($row=mysqli_fetch_array($result))
	{
		$c=$row['COUNT(ScoreId)'];
	}

	if($c==0)
	{
	if($insert=mysqli_query($con,"INSERT INTO `PIScores`(`UserId`, `ReviewerId`, `PIId`, `Score1`, `Score2`, `TotalScore`, `Reason1`, `Reason2`) VALUES ('$UserId','$ReviewerId','$id','$q1','$q2','$total','$r1','$r2')"))
	{
		echo "<script>alert('Thanks for Rating the Activity!');window.location.href='viewActivity.php';</script>";
	}

	else
	{
		echo "<script>alert('Error in rating activity, please try again later!');window.location.href='viewActivity.php';</script>";
	}
	}
	else
	{
		echo "<script>alert('You have already rated that activity!');window.location.href='viewActivity.php';</script>";
	}
}
?>