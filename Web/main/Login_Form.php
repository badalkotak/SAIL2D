<?php
include("../Resources/dbcon.php");
//error_reporting(0);
session_start();
$username=$_REQUEST["usr"];
$password=$_REQUEST["pwd"];
$pass="";

$result=mysqli_query($con,"SELECT UserPassword FROM UserDetails WHERE UserEmail='$username'");
while($row=mysqli_fetch_array($result))
{
	$pass=$row['UserPassword'];
}

if($username!="" && $pass!="")
{
	if($pass==$password)
	{
		$_SESSION['uname']=$username;
		header("Location: UserDashboard.php");
	}
	else
	{
		echo "<script>alert('Invalid Username/Password!');window.location.href='index.php'</script>";
	}
}

?>
