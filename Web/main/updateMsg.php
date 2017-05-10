<?php
include("../Resources/dbcon.php");
error_reporting(0);

$post=$_REQUEST['posted'];
$review=$_REQUEST['review'];
$type=$_REQUEST['type'];
$id=$_REQUEST['id'];

if($type==1)
	$query='SELECT * FROM Chat_TPS_'.$id.'_'.$post.'_'.$review;

else if($type==2)
	$query='SELECT * FROM Chat_PI_'.$id.'_'.$post.'_'.$review;
echo '<ul class="chat" style="list-style: none;">';
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
	$User=$row['User'];
                    	$msg=$row['Message'];
                    	$msgtime=$row['MsgTime'];
                      $msgid=$row['MsgId'];


                    	$getName=mysqli_query($con,"SELECT * FROM UserDetails WHERE UserId='$User'");
                    	while($NameRow=mysqli_fetch_array($getName))
                    	{
                    		$Recpname=$NameRow['UserFirstName'].' '.$NameRow['UserLastName'];
                    	}

                    	if($User==$post)
                    	{

                        echo '<li class="right clearfix" >';
                         echo '<div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="pull-right primary-font">'.$Recpname.'</strong> <small class="pull-left text-muted">
                                        <span class="pull-left glyphicon glyphicon-time"></span>'.$msgtime.'</small>
                                </div><br>
                                <p class="pull-right">
                                    '.$msg.'
                                </p>
                            </div>
                        </li>';
                    	}

                    	else
                    	{
                    		echo '<li class="left clearfix">';
                         echo '<div class="chat-body clearfix">
                                <div class="header">
                                <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>'.$msgtime.'</small>
                                    <strong class="primary-font">'.$Recpname.'</strong> 
                                </div>
                                <p>
                                    '.$msg.'
                                </p>
                            </div>
                        </li>';
                    	}

                    	echo "<hr>";
}

echo '</ul>';
?>