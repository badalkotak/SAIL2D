<?php
session_start();
$user=$_SESSION['uname'];
if($user=="")
{
  header('Location: index.php');
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
        <div class="table-responsive">        
          <table class="table  table-striped">
            <thead>
              <tr>
                <th>Sr No.</th>
                <th>Title</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>

              <?php
              //$type=$_REQUEST['type'];
              $id=$_REQUEST['id'];

              
                $i=0;
				
				$getId=mysqli_query($con,"SELECT TPSId FROM TPSScores WHERE ScoreId='$id'");
				while($get=mysqli_fetch_array($getId))
				{
					$TPSId=$get['TPSId'];
				}
                $result=mysqli_query($con,"SELECT * FROM TPS WHERE TPSId='$TPSId'");
                while($row=mysqli_fetch_array($result))
                {
                  $t_dur=$row['ThinkDuration'];
                  $p_dur=$row['PairDuration'];
                  $s_dur=$row['ShareDuration'];
                  $t_quest=$row['ThinkQuestion'];
                  $p_quest=$row['PairQuestion'];
                  $s_quest=$row['ShareQuestion'];
                  $t_ans=$row['ThinkOutput'];
                  $p_ans=$row['PairOutput'];                      
                  $s_ans=$row['ShareOutput'];
                  $i++;
                  echo "<tr class=success><td></td><td><strong>Think Phase</strong></td><td></td></tr>";
                  echo "<tr class=success>";
                  echo "<td>$i</td>";
                  echo "<td>Think Phase Duration</td>";
                  echo "<td>$t_dur</td></tr>";
                  echo "<tr class=success>";$i++;

                  echo "<td>$i</td>";
                  echo "<td>Think Phase Question</td>";
                  echo "<td>$t_quest</td></tr>";

                  echo "<tr class=success>";$i++;

                  echo "<td>$i</td>";
                  echo "<td>Think Phase Answer</td>";
                  echo "<td>$t_ans</td>";

                  echo "</tr>";$i++;

                  echo "<tr class=warning><td></td><td><strong>Pair Phase</strong></td><td></td></tr>";

                  $i=1;

                  echo "<tr class=warning><td>$i</td>";
                  echo "<td>Pair Phase Duration</td>";
                  echo "<td>$p_dur</td>";

                  echo "<tr class=warning>";$i++;

                  echo "<td>$i</td>";
                  echo "<td>Pair Phase Question</td>";
                  echo "<td>$p_quest</td>";

                  echo "<tr class=warning>";$i++;

                  echo "<td>$i</td>";
                  echo "<td>Pair Phase Answer</td>";
                  echo "<td>$p_ans</td>";

                  echo "</tr>";$i++;
                  echo "<tr class=info><td></td><td><strong>Share Phase</strong></td><td></td></tr>";
                  $i=1;

                  echo "<tr class=info><td>$i</td>";
                  echo "<td>Share Phase Duration</td>";
                  echo "<td>$s_dur</td>";

                  echo "<tr class=info>";$i++;

                  echo "<td>$i</td>";
                  echo "<td>Share Phase Question</td>";
                  echo "<td>$s_quest</td>";

                  echo "<tr class=info>";$i++;

                  echo "<td>$i</td>";
                  echo "<td>Share Phase Answer</td>";
                  echo "<td>$s_ans</td>";

                  echo "</tr>";
                  echo "<tr><td></td><td></td><td></td></tr>";

                }
              ?>
            </tbody>
          </table>
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

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
       </body>
       </html>
