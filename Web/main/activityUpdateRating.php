<?php
include("../Resources/dbcon.php");
//error_reporting(0);

echo $id=$_REQUEST['id'];
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

	$getUserId=mysqli_query($con,"SELECT * FROM TPSScores WHERE ScoreId='$id'");
	while($tpsrow=mysqli_fetch_array($getUserId))
	{
		$UserId=$tpsrow['UserId'];
		$post=$UserId;
		$review=$tpsrow['ReviewerId'];
	}

	$result=mysqli_query($con,"SELECT COUNT(ScoreId) FROM `UpdatedTPSScores` WHERE `UserId`='$UserId' AND `ReviewerId`='$ReviewerId' AND `TPSId`='$id'");
	while($row=mysqli_fetch_array($result))
	{
		echo 'c='.$c=$row['COUNT(ScoreId)'];
	}

	if($c==0)
	{
		
	if($insert=mysqli_query($con,"INSERT INTO `UpdatedTPSScores`(`UserId`, `ReviewerId`, `TPSId`, `Score1`, `Score2`, `Score3`, `Score4`, `Score5`, `Score6`, `TotalScore`, `Reason1`, `Reason2`, `Reason3`, `Reason4`, `Reason5`, `Reason6`) VALUES ('$UserId','$ReviewerId','$id','$q1','$q2','$q3','$q4','$q5','$q6','$total','$r1','$r2','$r3','$r4','$r5','$r6')"))
	{
		$msg="<b><a href=UpdatedScore.php?id=$id&type=1>I have Updated the Activity Scores please have a look !</a></b>";
		$query='INSERT INTO Chat_TPS_'.$id.'_'.$post.'_'.$review.'(`Message`,`User`) VALUES ("'.$msg.'","'.$review.'")';
		$insert_msg=mysqli_query($con,$query);
		echo "<script>alert('Thanks for Rating the Activity!');window.location.href='DR_TPS.php?id=$id';</script>";
	}
	else
	{
		echo "<script>alert('Error in rating activity, please try again later!');window.location.href='DR_TPS.php?id=$id';</script>";
		//echo mysqli_error($con);
	}
	}

	else
	{

		$query="INSERT INTO `UpdatedTPSScores`(`UserId`, `ReviewerId`, `TPSId`, `Score1`, `Score2`, `Score3`, `Score4`, `Score5`, `Score6`, `TotalScore`, `Reason1`, `Reason2`, `Reason3`, `Reason4`, `Reason5`, `Reason6`) VALUES ('$UserId','$ReviewerId','$id','$q1','$q2','$q3','$q4','$q5','$q6','$total','$r1','$r2','$r3','$r4','$r5','$r6')";
		$delete=mysqli_query($con,"DELETE FROM UpdatedTPSScores WHERE UserId='$UserId' && ReviewerId='$ReviewerId' && TPSId='$id'");
		if($insert=mysqli_query($con,$query))
	{
		$msg="<b><a href=UpdatedScore.php?id=$id&type=1>I have Updated the Activity Scores please have a look !</a></b>";
		$query='INSERT INTO Chat_TPS_'.$id.'_'.$post.'_'.$review.'(`Message`,`User`) VALUES ("'.$msg.'","'.$review.'")';
		$insert_msg=mysqli_query($con,$query);
		echo "<script>alert('Thanks for Rating the Activity!');window.location.href='disagreementResolver.php?id=$id&type=1';</script>";
	}

	else
	{
		echo "<script>alert('Error in rating activity, please try again later!');window.location.href='DR_TPS.php?id=$id';</script>";
		//echo mysqli_error($con);
	}
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
	
	$getId=mysqli_query($con,"SELECT * FROM PIScores WHERE ScoreId='$id'");
	while($get=mysqli_fetch_array($getId))
	{
		$UserId=$get['UserId'];
		$post=$UserId;
		$review=$get['ReviewerId'];
	}

	$getUserId=mysqli_query($con,"SELECT User FROM PI WHERE PIId='$id'");
	while($pirow=mysqli_fetch_array($getUserId))
	{
		$UserId=$pirow['User'];
	}

	$result=mysqli_query($con,"SELECT COUNT(ScoreId) FROM UpdatePIScores WHERE UserId='$UserId' && PIId='$id' && ReviewerId='$ReviewerId'");
	while($row=mysqli_fetch_array($result))
	{
		$c=$row['COUNT(ScoreId)'];
	}

	if($c==0)
	{
	if($insert=mysqli_query($con,"INSERT INTO `UpdatePIScores`(`UserId`, `ReviewerId`, `PIId`, `Score1`, `Score2`, `TotalScore`, `Reason1`, `Reason2`) VALUES ('$UserId','$ReviewerId','$id','$q1','$q2','$total','$r1','$r2')"))
	{
		$msg="<b><a href=UpdatedScore.php?id=$id&type=2>I have Updated the Activity Scores please have a look !</a></b>";
		$query='INSERT INTO Chat_PI_'.$id.'_'.$post.'_'.$review.'(`Message`,`User`) VALUES ("'.$msg.'","'.$review.'")';
		$insert_msg=mysqli_query($con,$query);
		echo "<script>alert('Thanks for Rating the Activity!');window.location.href='disagreementResolver.php?id=$id&type=2';</script>";
	}

	else
	{
		echo "<script>alert('Error in rating activity, please try again later 1!');window.location.href='disagreementResolver.php?id=$id&type=2';</script>";
	}
	}
	else
	{
		$delete=mysqli_query($con,"DELETE FROM UpdatePIScores WHERE UserId='$UserId' && ReviewerId='$ReviewerId' && PIId='$id'");
		if($insert=mysqli_query($con,"INSERT INTO `UpdatePIScores`(`UserId`, `ReviewerId`, `PIId`, `Score1`, `Score2`, `TotalScore`, `Reason1`, `Reason2`) VALUES ('$UserId','$ReviewerId','$id','$q1','$q2','$total','$r1','$r2')"))
	{
		$msg="<b><a href=UpdatedScore.php?id=$id&type=2>I have Updated the Activity Scores please have a look !</a></b>";
		$query='INSERT INTO Chat_PI_'.$id.'_'.$post.'_'.$review.'(`Message`,`User`) VALUES ("'.$msg.'","'.$review.'")';
		$insert_msg=mysqli_query($con,$query);
		echo "<script>alert('Thanks for Rating the Activity!');window.location.href='disagreementResolver.php?id=$id&type=2';</script>";
	}

	else
	{
		echo "<script>alert('Error in rating activity, please try again later 2!');window.location.href='disagreementResolver.php?id=$id&type=2';</script>";
	}
	}
}
?>