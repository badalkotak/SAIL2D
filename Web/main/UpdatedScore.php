<?php
$id=$_REQUEST['id'];
$type=$_REQUEST['type'];

if($type==1)
{
	include("updateTPS.php");
}

else
{
	include("updatePI.php");
}
?>