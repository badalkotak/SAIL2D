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
    <title>Create Activity</title>
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
                    error_reporting(0);

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
		<div class="table-responsive">        
          <table class="table">
            <thead>
              <tr>
                <th>Sr No.</th>
				<th>Posted By</th>
                <th>Reviewer</th>
                <th>Domain</th>
                <th>Program</th>
                <th>Course</th>
                <th>Topic</th>
				<th>View</th>
               
              </tr>
            </thead>
            <tbody>
        <?php
		$i=0;
			echo "<label>TPS: (Posted by You)</label>";
			$result=mysqli_query($con,"SELECT * FROM TPSDisagrement WHERE PostedBy='$userId'");
			while($row=mysqli_fetch_array($result))
			{
				$i++;
				$ScoreId=$row['ScoreId'];
				$PostedBy=$row['PostedBy'];
				$getId=mysqli_query($con,"SELECT * FROM TPSScores WHERE ScoreId='$ScoreId'");
				while($row=mysqli_fetch_array($getId))
				{
					$ReviewerId=$row['ReviewerId'];
                $TPSId=$row['TPSId'];
                $getName=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$ReviewerId'");
                while($row=mysqli_fetch_array($getName))
                {
                  $name=$row['UserFirstName']." ".$row['UserLastName'];
                }
				
				$getUserName=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$PostedBy'");
                while($row=mysqli_fetch_array($getUserName))
                {
                  $User_name=$row['UserFirstName']." ".$row['UserLastName'];
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
				}
				 echo "<td>$i</td>";
				 echo "<td>$User_name</td>";
                echo "<td>$name</td>";
                echo "<td>$Domain</td>";
                echo "<td>$Program</td>";
                echo "<td>$Course</td>";
                echo "<td>$Topic</td>";
				 echo "<td><a href=disagreementResolver.php?id=$ScoreId&type=1>View</a>";
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
				<th>Posted By</th>
                <th>Reviewer</th>
                <th>Domain</th>
                <th>Program</th>
                <th>Course</th>
                <th>Topic</th>
				 <th>View</th>
               
              </tr>
            </thead>
            <tbody>
			
			<?php
			$i=0;
			echo "<label>TPS: (Reviewed by You)</label>";
			$result=mysqli_query($con,"SELECT * FROM TPSDisagrement WHERE ReviewedBy='$userId'");
			while($row=mysqli_fetch_array($result))
			{
				$i++;
				$ScoreId=$row['ScoreId'];
				$PostedBy=$row['PostedBy'];
				$getId=mysqli_query($con,"SELECT * FROM TPSScores WHERE ScoreId='$ScoreId'");
				while($row=mysqli_fetch_array($getId))
				{
					$ReviewerId=$row['ReviewerId'];
                $TPSId=$row['TPSId'];
                $getName=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$ReviewerId'");
                while($row=mysqli_fetch_array($getName))
                {
                  $name=$row['UserFirstName']." ".$row['UserLastName'];
                }
				
				$getUserName=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$PostedBy'");
                while($row=mysqli_fetch_array($getUserName))
                {
                  $User_name=$row['UserFirstName']." ".$row['UserLastName'];
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
				}
				 echo "<td>$i</td>";
				 echo "<td>$User_name</td>";
                echo "<td>$name</td>";
                echo "<td>$Domain</td>";
                echo "<td>$Program</td>";
                echo "<td>$Course</td>";
                echo "<td>$Topic</td>";
				echo "<td><a href=disagreementResolver.php?id=$ScoreId&type=1>View</a>";
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
				<th>Posted By</th>
                <th>Reviewer</th>
                <th>Domain</th>
                <th>Program</th>
                <th>Course</th>
                <th>Topic</th>
				<th>View</th>
               
              </tr>
            </thead>
            <tbody>
        <?php
		$i=0;
			echo "<label>PI: (Posted by You)</label>";
			$result1=mysqli_query($con,"SELECT * FROM PIDisagrement WHERE PostedBy='$userId'");
			while($row1=mysqli_fetch_array($result1))
			{
				$i++;
				$ScoreId1=$row1['ScoreId'];
				$PostedBy1=$row1['PostedBy'];
				$getId1=mysqli_query($con,"SELECT * FROM PIScores WHERE ScoreId='$ScoreId1'");
				while($row1=mysqli_fetch_array($getId1))
				{
					$ReviewerId1=$row1['ReviewerId'];
                $PIId1=$row1['PIId'];
                $getName=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$ReviewerId1'");
                while($row1=mysqli_fetch_array($getName))
                {
                  $name1=$row1['UserFirstName']." ".$row1['UserLastName'];
                }
				
				$getUserName1=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$PostedBy1'");
                while($row1=mysqli_fetch_array($getUserName1))
                {
                  $User_name=$row1['UserFirstName']." ".$row1['UserLastName'];
                }

                $getDetails1=mysqli_query($con,"SELECT * FROM PI WHERE PIId='$PIId1'");
                while($get1=mysqli_fetch_array($getDetails1))
                {
                  $TopicId1=$get1['TopicId'];
                  $getTopic1=mysqli_query($con,"SELECT * FROM Topics WHERE TopicId='$TopicId1'");
                  while($get1=mysqli_fetch_array($getTopic1))
                  {
                    $Topic1=$get1['TopicName'];
                    $CourseId1=$get1['CourseId'];
                  }
                  $getCourse1=mysqli_query($con,"SELECT * FROM Courses WHERE CourseId='$CourseId1'");
                  while($get1=mysqli_fetch_array($getCourse1))
                  {
                    $Course1=$get1['CourseName'];
                    $ProgramId1=$get1['ProgramId'];
                    $getProgram1=mysqli_query($con,"SELECT * FROM Programs WHERE ProgramId='$ProgramId1'");
                    while($get1=mysqli_fetch_array($getProgram1))
                    {
                      $Program1=$get1['ProgramName'];
                      $DomainId1=$get1['DomainId'];
                      $getDomain1=mysqli_query($con,"SELECT * FROM Domains WHERE DomainId='$DomainId1'");
                      while($get1=mysqli_fetch_array($getDomain1))
                      {
                        $Domain1=$get1['DomainName'];
                      }
                    }
                  }
					
				}
				}
				 echo "<td>$i</td>";
				 echo "<td>$User_name</td>";
                echo "<td>$name1</td>";
                echo "<td>$Domain1</td>";
                echo "<td>$Program1</td>";
                echo "<td>$Course1</td>";
                echo "<td>$Topic1</td>";
				echo "<td><a href=disagreementResolver.php?id=$ScoreId1&type=2>View</a>";
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
				<th>Posted By</th>
                <th>Reviewer</th>
                <th>Domain</th>
                <th>Program</th>
                <th>Course</th>
                <th>Topic</th>
				<th>View</th>
               
              </tr>
            </thead>
            <tbody>
			
			<?php
			$i=0;
			echo "<label>PI: (Reviewed by You)</label>";
			$result2=mysqli_query($con,"SELECT * FROM PIDisagrement WHERE ReviewedBy='$userId'");
			while($row2=mysqli_fetch_array($result2))
			{
				$i++;
				$ScoreId2=$row2['ScoreId'];
				$PostedBy2=$row2['PostedBy'];
				$getId2=mysqli_query($con,"SELECT * FROM PIScores WHERE ScoreId='$ScoreId2'");
				while($row=mysqli_fetch_array($getId2))
				{
					$ReviewerId2=$row['ReviewerId'];
                $PIId2=$row['PIId'];
                $getName2=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$ReviewerId2'");
                while($row2=mysqli_fetch_array($getName2))
                {
                  $name2=$row2['UserFirstName']." ".$row2['UserLastName'];
                }
				
				$getUserName2=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserId='$PostedBy2'");
                while($row2=mysqli_fetch_array($getUserName2))
                {
                  $User_name2=$row2['UserFirstName']." ".$row2['UserLastName'];
                }

                $getDetails2=mysqli_query($con,"SELECT * FROM PI WHERE PIId='$PIId2'");
                while($get2=mysqli_fetch_array($getDetails2))
                {
                  $TopicId2=$get2['TopicId'];
                  $getTopic=mysqli_query($con,"SELECT * FROM Topics WHERE TopicId='$TopicId2'");
                  while($get=mysqli_fetch_array($getTopic))
                  {
                    $Topic2=$get['TopicName'];
                    $CourseId2=$get['CourseId'];
                  }
                  $getCourse2=mysqli_query($con,"SELECT * FROM Courses WHERE CourseId='$CourseId2'");
                  while($get2=mysqli_fetch_array($getCourse2))
                  {
                    $Course2=$get2['CourseName'];
                    $ProgramId2=$get2['ProgramId'];
                    $getProgram2=mysqli_query($con,"SELECT * FROM Programs WHERE ProgramId='$ProgramId2'");
                    while($get2=mysqli_fetch_array($getProgram2))
                    {
                      $Program2=$get2['ProgramName'];
                      $DomainId2=$get2['DomainId'];
                      $getDomain2=mysqli_query($con,"SELECT * FROM Domains WHERE DomainId='$DomainId2'");
                      while($get2=mysqli_fetch_array($getDomain2))
                      {
                        $Domain2=$get2['DomainName'];
                      }
                    }
                  }
					
				}
				}
				 echo "<td>$i</td>";
				 echo "<td>$User_name2</td>";
                echo "<td>$name2</td>";
                echo "<td>$Domain2</td>";
                echo "<td>$Program2</td>";
                echo "<td>$Course2</td>";
                echo "<td>$Topic2</td>";
				echo "<td><a href=disagreementResolver.php?id=$ScoreId2&type=2>View</a>";
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
