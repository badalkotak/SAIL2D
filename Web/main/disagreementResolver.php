<?php
$id=$_REQUEST['id'];
$type=$_REQUEST['type'];

if($type==1)
{
  header('Location: DR_TPS.php?id='.$id.'&type='.$type);
}

else if($type==2)
{
  header('Location: DR_PI.php?id='.$id.'&type='.$type);
}
?>