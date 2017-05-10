<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
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
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<title>SAIL2D LOGIN</title>
</head>
<body>
<div class="page-header">
<center><br><h2 class="color_white">SAIL2D<br></h2>
<br>
</center>
</div>
<div class=container>
  
  <div class="col-md-4 col-sm-6 col-xs-10 col-center-block">
    
  <div class="panel panel-default">
  <div class="panel-heading"><center><strong>User Login</strong></center></div>
  <div class="panel-body">
	
      <form action=Login_Form.php role="form" method="post" id="login">
        <div class="form-group">
  <label for="usr">Username:</label>
  <input type="text" class="form-control" id="usr" name="usr">
  <div id="username_err"></div>
</div>
<div class="form-group">
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd" name="pwd">
  <div id="password_err"></div>
</div>
        <button type="submit" class="btn btn-success">Sign In</button>
      </form><br><br>
      <div id="common_err"></div>
  		
</div>
</div>
</div>
</div>
<center>
</div>
</center>

<script>

$("#login").submit(function(){
	var u=$("#usr").val();
	var p=$("#pwd").val();
	var flag=0;

	if(u=="")
	{
		flag++;
		$("#username_err").css("color","red");
		$("#username_err").text("Enter your Username");
	}
	else
	{
		$("#username_err").text("");
	}

	if(p=="")
	{
		flag++;
		$("#password_err").css("color","red");
		$("#password_err").text("Enter your Password");
	}
	else
	{
		$("#password_err").text("");
	}

	if(flag!=0)
	{
		return false;
	}

	else
	{
		return true;
	}
})
</script>

<script src="../Resources/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
