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
    	<title>View Activities</title>
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

  								$getName=mysqli_query($con,"SELECT UserFirstName, UserLastName FROM UserDetails WHERE UserEmail='$user'");
  								while($row=mysqli_fetch_array($getName))
  								{
  									$name=$row['UserFirstName']." ".$row['UserLastName'];
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
  					View Activities:
  				</h1>
  			</section>
  			<!-- Main content -->
  			<section class="content">
  				<div class="row">
  					<div class="col-lg-4 col-xs-12">
  						<label for="activity">Select Activity Type:</label>
  						<div class="form-group">
  							<select class="form-control" name="type" id="type" onchange="showDomains(this.value)">
  								<option value="0">Select type of Activity</option>
  								<option value="1">TPS</option>
  								<option value="2">PI</option>
  							</select>
  						</div>

  					</div>
  					<div class="col-md-6 col-xs-6">
  						<label>Add filter</label>
  						<div class="box box-default collapsed-box box-solid">
  							<div class="box-header with-border">
  								<h3 class="box-title">Filters</h3>
  								<div class="box-tools pull-right">
  									<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
  								</div><!-- /.box-tools -->
  							</div><!-- /.box-header -->
  							<div class="box-body">
  								<div class="row" id="filter">
  									<?php
  									include("../Resources/dbcon.php");
                        //error_reporting(0);
  									echo '<div class="col-md-6">';
  									echo "Domains:";
  									$i=0;
  									$getDomain=mysqli_query($con,"SELECT * FROM Domains");
  									while($DomainRow=mysqli_fetch_array($getDomain))
  									{
  										$domain=$DomainRow['DomainName'];
  										$DomainId=$DomainRow['DomainId'];
  										echo '<div class="checkbox">';
  										echo "<label><input type=checkbox value='$DomainId' name='D$i' id='$i'>$domain</label>";
  										echo "</div>";
  										$i++;
  									}

  									for($j=0;$j<=$i;$j++)
  									{

  										echo "<script>";

  										echo '$("#'.$j.'").click(function(){';
  										echo 'var url="updateCheckbox.php?";';
  										echo 'var domainFilter="filter_domain.php?";';
  										$k=0;
  										$getDomain=mysqli_query($con,"SELECT * FROM Domains");
  										while($DomainRow=mysqli_fetch_array($getDomain))
  										{

  											$domain=$DomainRow['DomainName'];
  											$DomainId=$DomainRow['DomainId'];

  											echo 'if($("#'.$k.'").is(":checked")){';
  											echo 'domainFilter=domainFilter+"D'.$k.'='.$DomainId.'&";';
  											echo 'url=url+"D'.$k.'='.$DomainId.'&";}';
  											$k++;
  										}
  										echo 'url=url+"e=0";$("#prog").load(url);';
  										echo 'var act=$("#type").val();';
  										echo 'domainFilter=domainFilter+"type="+act;';
  										echo '$("#txtHint").load(domainFilter);';
  										echo '});';
  										echo "</script>";


  									}

  									echo "</div>";

  									echo '<div class="col-md-6" id="prog">';
  									echo "Programs:";
  									$getProgram=mysqli_query($con,"SELECT * FROM Programs");
  									$id=0;
  									while($ProgRow=mysqli_fetch_array($getProgram))
  									{
  										$program=$ProgRow['ProgramName'];
  										$ProgramId=$ProgRow['ProgramId'];
  										echo '<div class="checkbox">';
  										echo "<label><input type=checkbox value='$ProgramId' name='C$id' id='C$id'>$program</label>";
  										echo "</div>";
  										$id++;
  									}

  									for($l=0;$l<=$id;$l++)
  									{

  										echo "<script>";

  										echo '$("#C'.$l.'").click(function(){';
  										echo 'var courseFilter="filter_course.php?";';
  										$k=0;
  										$getCourse=mysqli_query($con,"SELECT * FROM Programs");
  										while($CourseRow=mysqli_fetch_array($getCourse))
  										{

  											$CourseId=$CourseRow['ProgramId'];

  											echo 'if($("#C'.$k.'").is(":checked"))';
  											echo 'courseFilter=courseFilter+"C'.$k.'='.$CourseId.'&";';
  											$k++;
  										}
  										echo 'var act=$("#type").val();';
  										echo 'courseFilter=courseFilter+"type="+act;';
  										echo '$("#txtHint").load(courseFilter);';
  										echo '})';
  										echo "</script>";


  									}


  									echo "</div>";
  									?>

                    

  								</div><!-- /.box-body -->
								<center><button type="submit" class="btn btn-success" id="reset">RESET</button>
  							</div>
  						</div><!-- /.box -->
  					</div>
  				</div>

  				<!-- <div class="col-lg-12 col-xs-12"> -->

  					<div id="txtHint"></div>
<!--   				</div><br><br><br> -->
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

  		<script>
  			function showDomains(str) {
  				var xhttp;    
  				if (str == "") {
  					document.getElementById("txtHint").innerHTML = "Select type of Activity..";
  					return;
  				}
  				xhttp = new XMLHttpRequest();
  				xhttp.onreadystatechange = function() {
  					if (xhttp.readyState == 4 && xhttp.status == 200) {
  						document.getElementById("txtHint").innerHTML = xhttp.responseText;
  					}
  				}


  				xhttp.open("GET", "activity_view.php?type="+str, true);
  				xhttp.send();
  			}
  		</script>

  		<script>
  			$("#type").change(function(){
				$("#filter").load("getFilter.php");
  				<?php
  				$c=mysqli_query($con,"SELECT COUNT(DomainId) FROM Domains");
  				while($row1=mysqli_fetch_array($c))
  				{
  					$count=$row1['COUNT(DomainId)'];
  				}

  				for($i=0;$i<$count;$i++)
  				{
  					echo '$("#'.$i.'").attr("checked",false);';
  				}


          $c=mysqli_query($con,"SELECT COUNT(ProgramId) FROM Programs");
          while($row1=mysqli_fetch_array($c))
          {
            $count=$row1['COUNT(ProgramId)'];
          }

          for($i=0;$i<$count;$i++)
          {
            echo '$("#C'.$i.'").attr("checked",false);';
          }

  				?>
  			})
  		</script>

      <script>
        $("#reset").click(function(){
          $("#txtHint").load("activity_view.php?type="+$("#type").val());
		  $("#filter").load("getFilter.php");
		  
          <?php
          $c=mysqli_query($con,"SELECT COUNT(DomainId) FROM Domains");
          while($row1=mysqli_fetch_array($c))
          {
            $count=$row1['COUNT(DomainId)'];
          }

          for($i=0;$i<$count;$i++)
          {
            echo '$("#'.$i.'").attr("checked",false);';
          }


          $c=mysqli_query($con,"SELECT COUNT(ProgramId) FROM Programs");
          while($row1=mysqli_fetch_array($c))
          {
            $count=$row1['COUNT(ProgramId)'];
          }

          for($i=0;$i<$count;$i++)
          {
            echo '$("#C'.$i.'").attr("checked",false);';
          }

          ?>
        })
      </script>
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
