<?php
include("../Resources/dbcon.php");
//error_reporting(0);

$TPSId=$_REQUEST['tps'];

$t_dur=$_REQUEST['dur'];
$t_dur=trim($t_dur);

$t_quest=$_REQUEST['question'];
$t_quest=trim($t_quest);

$t_ans=$_REQUEST['answer'];
$t_ans=trim($t_ans);

$p_dur=$_REQUEST['p_dur'];
$p_dur=trim($p_dur);

$p_quest=$_REQUEST['p_question'];
$p_quest=trim($p_quest);

$p_ans=$_REQUEST['p_answer'];
$p_ans=trim($p_ans);

$s_dur=$_REQUEST['s_dur'];
$s_dur=trim($s_dur);

$s_quest=$_REQUEST['s_question'];
$s_quest=trim($s_quest);

$s_ans=$_REQUEST['s_answer'];
$s_ans=trim($s_ans);

$id=$_REQUEST['id'];
$getUserId=mysqli_query($con,"SELECT * FROM TPSScores WHERE ScoreId='$id'");
while($u_row=mysqli_fetch_array($getUserId))
{
	$post=$u_row['UserId'];
	$review=$u_row['ReviewerId'];
}
//$ds=0;
$ds=$_REQUEST['ds'];
if($update=mysqli_query($con,"UPDATE `TPS` SET `ThinkQuestion`='$t_quest',`ThinkOutput`='$t_ans',`PairQuestion`='$p_quest',`PairOutput`='$p_ans',`ShareQuestion`='$s_quest',`ShareOutput`='$s_ans',`ThinkDuration`='$t_dur',`PairDuration`='$p_dur',`ShareDuration`='$s_dur' WHERE `TPSId`='$TPSId'"))
{
	$msg="<b><a href=UpdatedTPS.php?id=$id>I have Updated the Activity please have a look !</a></b>";
	$query='INSERT INTO Chat_TPS_'.$id.'_'.$post.'_'.$review.'(`Message`,`User`) VALUES ("'.$msg.'","'.$post.'")';
	$insertMsg=mysqli_query($con,$query);
	if($ds==1)
	{
		echo "<script>alert('Activity Updated!');window.location.href='disagreementResolver.php?id=$id&type=1'</script>";
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