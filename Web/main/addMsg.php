<?php
include("../Resources/dbcon.php");
//error_reporting(0);

$msg=$_REQUEST['msg'];
$msg=urldecode($msg);
$type=$_REQUEST['type'];
$post=$_REQUEST['posted'];
$review=$_REQUEST['review'];
$id=$_REQUEST['id'];

session_start();
$user=$_SESSION['uname'];
$getName=mysqli_query($con,"SELECT UserFirstName, UserLastName,UserId FROM UserDetails WHERE UserEmail='$user'");
while($row=mysqli_fetch_array($getName))
{
	$name=$row['UserFirstName']." ".$row['UserLastName'];
	$userId=$row['UserId'];
}

if($type==1)
{
echo $query='INSERT INTO Chat_TPS_'.$id.'_'.$post.'_'.$review.'(`Message`,`User`) VALUES ("'.$msg.'","'.$userId.'")';
$insert=mysqli_query($con,$query);
}

else if($type==2)
{
echo $query='INSERT INTO Chat_PI_'.$id.'_'.$post.'_'.$review.'(`Message`,`User`) VALUES ("'.$msg.'","'.$userId.'")';
$insert=mysqli_query($con,$query);
}
?>