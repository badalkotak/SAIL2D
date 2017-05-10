<?php
include("../Resources/dbcon.php");
error_reporting(0);
session_start();
$user=$_SESSION['uname'];
$id=$_REQUEST['id'];
$type=$_REQUEST['type'];


if($user=="")
{
  header('Location: index.php');
}

	$getId=mysqli_query($con,"SELECT * FROM TPSScores WHERE ScoreId='$id'");
	while($row=mysqli_fetch_array($getId))
	{
		$postedby=$row['UserId'];
	  $reviewedby=$row['ReviewerId'];
	}

	$check=mysqli_query($con,"SELECT COUNT(ID) FROM TPSDisagrement WHERE PostedBy='$postedby' && ReviewedBy='$reviewedby' && ScoreId='$id'");
  while($c_row=mysqli_fetch_array($check))
  {
    $c=$c_row['COUNT(ID)'];
  }

  if($c==0)
  {

	if($insert=mysqli_query($con,"INSERT INTO `TPSDisagrement`(`ScoreId`, `PostedBy`, `ReviewedBy`) VALUES ('$id','$postedby','$reviewedby')"))
	{
    
		$query='Create table Chat_TPS_'.$id.'_'.$postedby.'_'.$reviewedby. '( MsgId int AUTO_INCREMENT PRIMARY KEY, Message varchar(1000) not null, MsgTime TIMESTAMP, User int NOT NULL, FOREIGN KEY(User) REFERENCES UserDetails(UserId) )';
		$create=mysqli_query($con,$query);
	}
  else
  {
    echo mysqli_error($con);
  }
  } 

		
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Activity</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../Resources/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Resources/AdminLTE/dist/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../Resources/AdminLTE/dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Resources/AdminLTE/dist/css/AdminLTE.min.css">

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="../Resources/AdminLTE/dist/css/skins/skin-yellow-light.min.css">

        <link rel="stylesheet" href="../Resources/AdminLTE/ionicons.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
-->
<body class="hold-transition skin-yellow-light sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">S2D</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SAIL2D</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="../Resources/AdminLTE/D_Logo/avatar.png" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <?php
                include("../Resources/dbcon.php");
                //error_reporting(0);

                $getName=mysqli_query($con,"SELECT UserFirstName, UserLastName,UserId FROM UserDetails WHERE UserEmail='$user'");
                while($row=mysqli_fetch_array($getName))
                {
                  $name=$row['UserFirstName']." ".$row['UserLastName'];
                  $userId=$row['UserId'];
                  $_SESSION['uid']=$userId;
                }
                ?>
                <span class="hidden-xs"><?echo $name;?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="../Resources/AdminLTE/D_Logo/avatar.png" class="img-circle" alt="User Image">
                  <p>
                    <?echo $name;?>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">

                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../Resources/AdminLTE/D_Logo/avatar.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?echo $name;?></p>
            <!-- Status -->
          </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
          <!-- Optionally, you can add icons to the links -->
          <li><a href="UserDashboard.php"><i class="fa fa-home"></i><span>Home</span></a></li>
          <li><a href="settings.php"><i class="fa fa-gears"></i> <span>Settings</span></a></li>

        </ul><!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>

        </h1>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading" style="height: 80;">
                
                    <span class="glyphicon glyphicon-comment"></span> Chat
                
                    <?
                       if($userId==$postedby)
                        {	
                           echo "<form action='UpdateActivity.php?type=1&id=$id&ds=1' method=post><button class='btn btn-default pull-right'>Update Activity</button></form>";
                        }

                        else
                        {
                            echo "<form action=updateTPSRating.php method=post><button class='btn btn-default pull-right' name=id value=$id>Update Rating</button></form>";
                        }
                    ?>

                    
                    
                   
                </div>
                <div class="panel-body" id="chat">
                    <ul class="chat" style="list-style: none;">

                    <?php

                    $query='SELECT * FROM Chat_'.$postedby.'_'.$reviewedby;
                    $getMsg=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($getMsg))
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

                    	if($User==$postedby)
                    	{
                        echo '<li class="right clearfix">';
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
                        ?>
                        
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="Type your message here..." id="msg">
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="send">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?
if($userId==$reviewedby)
	echo "<form action='agreeReview.php?type=1&id=$id&ds=1' method=post><button class='btn btn-Success'>Agree</button></form>";
?>
</div>



    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>SAIL2D</strong>
  </footer>
  <!-- Control Sidebar -->
  <!-- Tab panes -->
  <!-- REQUIRED JS SCRIPTS -->
  <!-- jQuery 2.1.4 -->
  <script src="../Resources/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../Resources/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../Resources/AdminLTE/dist/js/app.min.js"></script>

  <script>
  update();
  var myVar = setInterval(update, 10000);
  $("#send").click(function(){
    var msg=$("#msg").val();
    var post=<?echo $postedby?>;
    var review=<?echo $reviewedby?>;
	var type=<?echo $type?>;
	var id=<?echo $id?>;
	
    if(msg!="")
    {
      var url="addMsg.php?msg="+msg+"&posted="+post+"&review="+review+"&type="+type+"&id="+id;
      console.log(url);
      $.post(url);
      var msg=$("#msg").val("");
      update();
    }

    var myVar = setInterval(update, 10000);
  });

  function update()
  {
    
    var post=<?echo $postedby?>;
    var review=<?echo $reviewedby?>;
	var type=<?echo $type?>;
	var id=<?echo $id?>;
    var url="updateMsg.php?posted="+post+"&review="+review+"&type="+type+"&id="+id;

    $("#chat").load(url);
  }


  </script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
       </body>
       </html>


