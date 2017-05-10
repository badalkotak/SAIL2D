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

                    $getName=mysqli_query($con,"SELECT UserFirstName, UserLastName, UserId FROM UserDetails WHERE UserEmail='$user'");
                    while($row=mysqli_fetch_array($getName))
                    {
                      $name=$row['UserFirstName']." ".$row['UserLastName'];
                      $userId=$row['UserId'];
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
            <li><a href="../Resources/files/Rubric_PI_TPS.pdf"><i class="fa fa-file-pdf-o"></i> <span>Rubrics for TPS & PI</span></a></li>
            <li><a href="../Resources/files/TPS_PI_EG.pdf"><i class="fa fa-file-pdf-o"></i> <span>Examples of TPS & PI</span></a></li>
            
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
              </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create a Activity:
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
          <div class="col-lg-6 col-xs-12">
          <form action=activity_form.php?user=<?echo $userId?> role="form" method="post" id="RegForm">
          <label for="activity">Select Activity Type:</label>
          <div class="form-group">
          <select class="form-control" id="type" name="type">
            <option value="0">Select type of Activity</option>
            <option value="1">TPS</option>
            <option value="2">PI</option>
          </select>
          <div id="type_err"></div>
          </div>

          <div class="form-group">
  <label for="domain">Domain:</label>
  <select class="form-control" id="domain" name="domain">
  <option value="0">Select Your Domain</option>
  <?php
    include("../Resources/dbcon.php");
    error_reporting(0);
    $getDomains=mysqli_query($con,"SELECT * FROM Domains");
    while($getRow=mysqli_fetch_array($getDomains))
    {
      $DomainName=$getRow['DomainName'];
      $DomainId=$getRow['DomainId'];
      echo "<option value='$DomainId'>$DomainName</option>";
    }
  ?>
  </select>
  <div id="domain_err"></div>
</div>

<div class="form-group">
  <label for="program">Program:</label>
  <select class="form-control" id="program" name="program">
  <option value="0">First Select a Domain</option>
  </select>
  <div id="program_err"></div>
</div>

<div class="form-group">
  <label for="course">Course:</label>
  <select class="form-control" id="course" name="course">
  <option value="0">First Select a Program</option>
  </select>
  <div id="course_err"></div>
</div>

<div class="input-group" id="course_form">
  <input type="text" class="form-control" id="Extra_course" name="Extra_course" disabled>
  <span class="input-group-btn">
        <button class="btn btn-default" type="button" id="add" disabled>Add</button>
   </span>
</div><br>

<div class="form-group">
  <label for="topic">Topic:</label>
  <select class="form-control" id="topic" name="topic">
  <option value="0">First Select a Course</option>
  </select>
  <div id="topic_err"></div>
</div>

<div class="input-group" id="course_form">
  <input type="text" class="form-control" id="Extra_topic" name="Extra_topic" disabled>
  <span class="input-group-btn">
        <button class="btn btn-default" type="button" id="add_topic" disabled>Add</button>
   </span>
</div><br>


        <center><button type="submit" class="btn btn-success">Next</button>
      </form><br><br>
      
          
          </div>
          </div>

          <div class="col-lg-12 col-xs-12">
          
          <div id="txtHint"></div>
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

<script>
$("#domain").change(function(){
$("#program").load("../RegistrationPage/AutoComplete/getProg.php?did="+$("#domain").val());
})
</script>

<script>
$("#program").change(function(){
reload_course();
})

function reload_course(){
$("#course").load("../RegistrationPage/AutoComplete/getCourse.php?pid="+$("#program").val());
}

$("#course").change(function(){
var c=$("#course").val();
if(c==-1 || c==0){
$("#Extra_course").prop("disabled",false);
$("#add").prop("disabled",false);
}
else{
$("#Extra_course").prop("disabled",true);
$("#add").prop("disabled",true);
}
})

$("#add").click(function(){
var c=$("#Extra_course").val();
c=encodeURIComponent(c);

var p=$("#program").val();
var url="../RegistrationPage/addCourse.php?name="+c+"&pid="+p;
console.log(url);
$.get(url);
reload_course();
$("#Extra_course").val("");
$("#Extra_course").prop("disabled",true);
})
</script>

<script>
$("#course").change(function(){
reload_topic();
})

function reload_topic(){
$("#topic").load("../RegistrationPage/AutoComplete/getTopic.php?cid="+$("#course").val());
}

$("#topic").change(function(){
var c=$("#topic").val();
if(c==-1 || c==0){
$("#Extra_topic").prop("disabled",false);
$("#add_topic").prop("disabled",false);
}
else{
$("#Extra_topic").prop("disabled",true);
$("#add_topic").prop("disabled",true);
}
})

$("#add_topic").click(function(){
var c=$("#Extra_topic").val();
c=encodeURIComponent(c);

var p=$("#course").val();
var url="../RegistrationPage/addTopic.php?name="+c+"&cid="+p;
console.log(url);
$.get(url);
reload_topic();
$("#Extra_topic").val("");
$("#Extra_topic").prop("disabled",true);
})

</script>

<script>
$("#RegForm").submit(function(){

var flag=0;

if($("#domain").val()==0)
{
flag++;
$("#domain_err").css("color","red");
$("#domain_err").text("Please Select your Domain");
}
else
{
$("#domain_err").text("");
}

if($("#program").val()==0)
{
flag++;
$("#program_err").css("color","red");
$("#program_err").text("Please Select your Program");
}
else
{
$("#program_err").text("");
}

if($("#course").val()==0)
{
flag++;
$("#course_err").css("color","red");
$("#course_err").text("Please Select your Course");
}
else
{
$("#course_err").text("");
}

if($("#topic").val()==0)
{
flag++;
$("#topic_err").css("color","red");
$("#topic_err").text("Please Select your Topic");
}
else
{
$("#topic_err").text("");
}

if($("#type").val()==0)
{
flag++;
$("#type_err").css("color","red");
$("#type_err").text("Please Select Activity Type");
}
else
{
$("#type_err").text("");
}

if(flag!=0)
return false;
else
return true;
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
