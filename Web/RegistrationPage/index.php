<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#city" ).autocomplete({
      source: 'AutoComplete/City.php'
    });
  });
  </script>

<script>
  $(function() {
    $( "#affiliation" ).autocomplete({
      source: 'AutoComplete/Affiliation.php'
    });
  });
  </script>

  <script>
  $(function() {
    $( "#state" ).autocomplete({
      source: 'AutoComplete/State.php'
    });
  });
  </script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="../Resources/AdminLTE/bootstrap/css/bootstrap.min.css">
<style type="text/css">
      body { background: #edf0f5 ; }
      .tb5 {
	border:2px solid #456879;
	border-radius:10px;
	height: 25px;
	width: 230px;
}
.ta5 {
	border:2px solid #456879;
	border-radius:10px;
	height: 200px;
	width: 330px;
}

.col-center-block {
    float: none;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.color_white
{
	color:#ffffff;
}
.page-header { background-color: #f58634; margin-left: 0px; margin-right: 0px; };

    </style>
<title>Sign Up</title>
</head>
<body>
<div class="page-header">
<center><br><h2 class="color_white">SAIL2D</h2>
<br>
</center>
</div>
<div class=container>
  
  <div class="col-md-6 col-sm-6 col-xs-10 col-center-block">
    
  <div class="panel panel-default">
  <div class="panel-heading"><center><strong>Register</strong></center></div>
  <div class="panel-body">
	
      <form action=registration.php role="form" method="post" id="RegForm">
<div class="form-group">
  <label for="Name">Firstname:</label>
  <input type="text" class="form-control" id="FName" name="FName">
  <div id="FName_err"></div>
</div>

<div class="form-group">
  <label for="Name">Middlename:</label>
  <input type="text" class="form-control" id="MName" name="MName">
  <div id="MName_err"></div>
</div>

<div class="form-group">
  <label for="Name">Lastname:</label>
  <input type="text" class="form-control" id="LName" name="LName">
  <div id="LName_err"></div>
</div>

<div class="form-group">
  <label for="gender">Gender</label>
  <select id="gender" name="gender" class="form-control">
      <option value="0">Select Gender</option>
      <option value="1">Male</option>
      <option value="2">Female</option>
  </select>
  <div id="gender_err"></div>
</div>

<div class="form-group">
  <label for="email">Email ID:</label>
  <input type="text" class="form-control" id="email" name="email">
  <div id="email_err"></div>
</div>

<div class="form-group">
  <label for="passwd1">Password:</label>
  <input type="password" class="form-control" id="passwd1" name="passwd1">
  <div id="passwd1_err"></div>
</div>

<div class="form-group">
  <label for="passwd2">Re-Enter Password:</label>
  <input type="password" class="form-control" id="passwd2" name="passwd2">
  <div id="passwd2_err"></div>
</div>

<div class="form-group">
  <label for="affiliation">Affiliation:</label>
  <select id="affiliation" name="affiliation" class="form-control">
  <option value="0">Select your Institute</option>
<?php
include("../Resources/dbcon.php");
$get=mysqli_query($con,"SELECT * FROM Affiliations");
while($row=mysqli_fetch_array($get))
{
	$id=$row['AffiliationId'];
	$name=$row['AffiliationName'];
	echo "<option value=".$id.">$name</option>";
}
?>
</select>
  <div id="affiliation_err"></div>
</div>

<div class="form-group">
  <label for="city">City:</label>
  <input type="text" class="form-control" id="city" name="city">
  <div id="city_err"></div>
</div>

<div class="form-group">
  <label for="state">State:</label>
  <input type="text" class="form-control" id="state" name="state">
  <div id="state_err"></div>
</div>

<div class="form-group">
  <label for="TeachingExp">Teaching Experience:</label>
   <select class="form-control" id="TeachingExp" name="TeachingExp">
	<option value="0">Select Teaching Experience</option>
	<option value="1">Less then 1 Year</option>
	<option value="2">1-3 Years</option>
	<option value="3">4-6 Years</option>
	<option value="4">7-10 Years</option>
	<option value="5">More than 10 Years</option>
   </select>
  <div id="te_err"></div>
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


        <center><button type="submit" class="btn btn-success">Register!</button>
      </form><br><br>
      <strong><a href="../">Login</a></strong></center>
  
</div>
</div>
</div>
</div>
<center>
</div>
</center>
<script src="../Resources/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script>
$("#domain").change(function(){
$("#program").load("AutoComplete/getProg.php?did="+$("#domain").val());
})
</script>

<script>
$("#program").change(function(){
reload_course();
})

function reload_course(){
$("#course").load("AutoComplete/getCourse.php?pid="+$("#program").val());
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
var url="addCourse.php?name="+c+"&pid="+p;
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
$("#topic").load("AutoComplete/getTopic.php?cid="+$("#course").val());
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
var url="addTopic.php?name="+c+"&cid="+p;
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
if($("#FName").val()=="")
{
flag++;
$("#FName_err").css("color","red");
$("#FName_err").text("Please Enter your Firstname");
}
else
{
$("#FName_err").text("");
}


if($("#MName").val()=="")
{
flag++;
$("#MName_err").css("color","red");
$("#MName_err").text("Please Enter your Middlename");
}
else
{
$("#MName_err").text("");
}


if($("#LName").val()=="")
{
flag++;
$("#LName_err").css("color","red");
$("#LName_err").text("Please Enter your Lastname");
}
else
{
$("#LName_err").text("");
}


if($("#email").val()=="")
{
flag++;
$("#email_err").css("color","red");
$("#email_err").text("Please Enter your Email Id");
}
else
{
$("#email_err").text("");
}


if($("#passwd1").val()=="")
{
flag++;
$("#passwd1_err").css("color","red");
$("#passwd1_err").text("Please Enter a New Password");
}
else
{
$("#passwd1_err").text("");
}


if($("#passwd2").val()=="")
{
flag++;
$("#passwd2_err").css("color","red");
$("#passwd2_err").text("Please Re-Enter the Password");
}
else
{
$("#passwd2_err").text("");
}


if($("#affiliation").val()==0)
{
flag++;
$("#affiliation_err").css("color","red");
$("#affiliation_err").text("Please Select the Name of your Institute");
}
else
{
$("#affiliation_err").text("");
}


if($("#city").val()=="")
{
flag++;
$("#city_err").css("color","red");
$("#city_err").text("Please Select your City");
}
else
{
$("#city_err").text("");
}


if($("#state").val()=="")
{
flag++;
$("#state_err").css("color","red");
$("#state_err").text("Please Select your State");
}
else
{
$("#state_err").text("");
}

var p1=$("#passwd1").val();
var p2=$("#passwd2").val();
if(p1!=p2)
{
flag++;
$("#passwd2_err").css("color","red");
$("#passwd2_err").text("Your Passwords don't match");
}
else
{
$("#passwd2_err").text("");
}

if($("#TeachingExp").val()==0)
{
flag++;
$("#te_err").css("color","red");
$("#te_err").text("Please Select your Teaching Experience");
}
else
{
$("#te_err").text("");
}

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

if($("#gender").val()==0)
{
  flag++;
  $("#gender_err").css("color","red");
  $("#gender_err").text("Please select your Gender");
}
else
{
  $("#gender_err").text(""); 
}

if(flag!=0)
return false;
else
return true;
})

</script>


</body>
</html>

