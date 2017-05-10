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
  <title>View Review</title>
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
      <?
      $type=$_REQUEST['type'];
      $id=$_REQUEST['id'];
      if($type==1)
            {
              ?>
      <label>TPS:</label>
        <div class="table-responsive">        
          <table class="table">
            <thead>
              <tr>
                <th>Sr No.</th>
                <th>Reviewer</th>
                <th>Domain</th>
                <th>Program</th>
                <th>Course</th>
                <th>Topic</th>
               
              </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
            
              $result=mysqli_query($con,"SELECT * FROM TPSScores WHERE ScoreId='$id'");
              while($row=mysqli_fetch_array($result))
              {
                $i++;
                $s1=$row['Score1'];
                $s2=$row['Score2'];
                $s3=$row['Score3'];
                $s4=$row['Score4'];
                $s5=$row['Score5'];
                $s6=$row['Score6'];

                $r1=$row['Reason1'];
                $r2=$row['Reason2'];
                $r3=$row['Reason3'];
                $r4=$row['Reason4'];
                $r5=$row['Reason5'];
                $r6=$row['Reason6'];

                $ReviewerId=$row['ReviewerId'];
                $TPSId=$row['TPSId'];
                $getName=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$ReviewerId'");
                while($row=mysqli_fetch_array($getName))
                {
                  $name=$row['UserFirstName']." ".$row['UserLastName'];
                }

                $getDetails=mysqli_query($con,"SELECT * FROM TPS WHERE TPSId='$TPSId'");
                while($get=mysqli_fetch_array($getDetails))
                {
                  $TopicId=$get['TopicId'];
                  $getTopic=mysqli_query($con,"SELECT * FROM Topics WHERE TopicId='$TopicId'");
                  while($get=mysqli_fetch_array($getTopic))
                  {
                    $Topic=$get['TopicName'];
                    $CourseId=$get['CourseId'];
                  }
                  $getCourse=mysqli_query($con,"SELECT * FROM Courses WHERE CourseId='$CourseId'");
                  while($get=mysqli_fetch_array($getCourse))
                  {
                    $Course=$get['CourseName'];
                    $ProgramId=$get['ProgramId'];
                    $getProgram=mysqli_query($con,"SELECT * FROM Programs WHERE ProgramId='$ProgramId'");
                    while($get=mysqli_fetch_array($getProgram))
                    {
                      $Program=$get['ProgramName'];
                      $DomainId=$get['DomainId'];
                      $getDomain=mysqli_query($con,"SELECT * FROM Domains WHERE DomainId='$DomainId'");
                      while($get=mysqli_fetch_array($getDomain))
                      {
                        $Domain=$get['DomainName'];
                      }
                    }
                  }
                }

                
                echo "<td>$i</td>";
                echo "<td>$name</td>";
                echo "<td>$Domain</td>";
                echo "<td>$Program</td>";
                echo "<td>$Course</td>";
                echo "<td>$Topic</td>";

              }
            ?>
            </tbody>
            </table>
            </div>

            <div class="table-responsive">        
          <table class="table">
            <thead>
              <tr>
                <th>Sr No.</th>
                <th>Criteria</th>
                <th>Rating</th>
                <th>Reason</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $j=1;
                echo "<tr>";
                echo "<td>$j</td>";
                echo "<td>Aptness for Think Phase</td>";
                echo "<td>$s1</td>";
                echo "<td>$r1</td>";
                echo "</tr>";

                $j++;
                echo "<tr>";
                echo "<td>$j</td>";
                echo "<td>Time for Think Phase</td>";
                echo "<td>$s2</td>";
                echo "<td>$r2</td>";
                echo "</tr>";


                $j++;
                echo "<tr>";
                echo "<td>$j</td>";
                echo "<td>Necessity of Pair</td>";
                echo "<td>$s3</td>";
                echo "<td>$r3</td>";
                echo "</tr>";


                $j++;
                echo "<tr>";
                echo "<td>$j</td>";
                echo "<td>Time for Pair Phase</td>";
                echo "<td>$s4</td>";
                echo "<td>$r4</td>";
                echo "</tr>";


                $j++;
                echo "<tr>";
                echo "<td>$j</td>";
                echo "<td>Link between activities</td>";
                echo "<td>$s5</td>";
                echo "<td>$r5</td>";
                echo "</tr>";


                $j++;
                echo "<tr>";
                echo "<td>$j</td>";
                echo "<td>Deliverable in each phase</td>";
                echo "<td>$s6</td>";
                echo "<td>$r6</td>";
                echo "</tr>";



              ?>
            </tbody>
            </table>
            </div>


            



            <?}?>

            <?
            if($type==2)
            {
              ?>
            <label>PI:</label>
        <div class="table-responsive">        
          <table class="table">
            <thead>
              <tr>
                <th>Sr No.</th>
                <th>Reviewer</th>
                <th>Domain</th>
                <th>Program</th>
                <th>Course</th>
                <th>Topic</th>
                
              </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
              $result=mysqli_query($con,"SELECT * FROM PIScores WHERE ScoreId='$id'");
              while($row=mysqli_fetch_array($result))
              {
                $i++;
                 $s1=$row['Score1'];
                $s2=$row['Score2'];

                $r1=$row['Reason1'];
                $r2=$row['Reason2'];
                $ReviewerId=$row['ReviewerId'];
                $PIId=$row['PIId'];
                $getName=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$ReviewerId'");
                while($row=mysqli_fetch_array($getName))
                {
                  $name=$row['UserFirstName']." ".$row['UserLastName'];
                }

                $getDetails=mysqli_query($con,"SELECT * FROM PI WHERE PIId='$PIId'");
                while($get=mysqli_fetch_array($getDetails))
                {
                  $TopicId=$get['TopicId'];
                  $getTopic=mysqli_query($con,"SELECT * FROM Topics WHERE TopicId='$TopicId'");
                  while($get=mysqli_fetch_array($getTopic))
                  {
                    $Topic=$get['TopicName'];
                    $CourseId=$get['CourseId'];
                  }
                  $getCourse=mysqli_query($con,"SELECT * FROM Courses WHERE CourseId='$CourseId'");
                  while($get=mysqli_fetch_array($getCourse))
                  {
                    $Course=$get['CourseName'];
                    $ProgramId=$get['ProgramId'];
                    $getProgram=mysqli_query($con,"SELECT * FROM Programs WHERE ProgramId='$ProgramId'");
                    while($get=mysqli_fetch_array($getProgram))
                    {
                      $Program=$get['ProgramName'];
                      $DomainId=$get['DomainId'];
                      $getDomain=mysqli_query($con,"SELECT * FROM Domains WHERE DomainId='$DomainId'");
                      while($get=mysqli_fetch_array($getDomain))
                      {
                        $Domain=$get['DomainName'];
                      }
                    }
                  }
                }
              
                echo "<td>$i</td>";
                echo "<td>$name</td>";
                echo "<td>$Domain</td>";
                echo "<td>$Program</td>";
                echo "<td>$Course</td>";
                echo "<td>$Topic</td>";
                

              }
            ?>
            </tbody>
            </table>
            </div>

            <div class="table-responsive">        
          <table class="table">
            <thead>
              <tr>
                <th>Sr No.</th>
                <th>Criteria</th>
                <th>Rating</th>
                <th>Reason</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $j=1;
                echo "<tr>";
                echo "<td>$j</td>";
                echo "<td>Stimulate Discussion among students</td>";
                echo "<td>$s1</td>";
                echo "<td>$r1</td>";
                echo "</tr>";

                $j++;
                echo "<tr>";
                echo "<td>$j</td>";
                echo "<td>Have plausibility of choices</td>";
                echo "<td>$s2</td>";
                echo "<td>$r2</td>";
                echo "</tr>";

              ?>
            </tbody>
            </table>
            </div>

            


            <?}?>


            
      

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
