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
<title>Create First Activity</title>
</head>
<body>

<?
$UserId=$_REQUEST['user'];
?>
<div class="page-header">
<center><br><h2 class="color_white">Add your First Activity (Anyone TPS or PI)</h2>
<br>
<a href="../Resources/files/Rubric_PI_TPS.pdf" target="_a"><button class="btn btn-info">Rubrics for TPS & PI</button></a>
<a href="../Resources/files/TPS_PI_EG.pdf" target="_a"> <button class="btn btn-info"><span>Examples of TPS & PI</span></button></a>
</center>
</div>
<div class=container>
  
  <div class="col-md-6 col-sm-6 col-xs-10 col-center-block">
    
  <div class="panel panel-default">
  <div class="panel-heading"><center><strong><?php
  include("../Resources/dbcon.php");
  error_reporting(0);

  $topicId=$_REQUEST['topic'];
  $getTopic=mysqli_query($con,"SELECT TopicName FROM Topics WHERE TopicId='$topicId'");
  while($trow=mysqli_fetch_array($getTopic))
  {
    $topic=$trow['TopicName'];
  }

  echo "Think-Pair-Share Activity<br>Topic: $topic</strong></center></div>";
  ?>

  <?
  echo "<form action='addActivity.php?user=$UserId' method=post id='RegForm'>";
  ?>
  <div class="panel-body">
  <h4><b>Phase: Think Phase</b></h4>
  <div class="form-group">
  <label for="Name">Duration: (In Mins)</label>
  <input type="text" class="form-control" id="dur" name="dur">
  <div id="dur_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Guiding Question:</label>
  <input type="text" class="form-control" id="question" name="question">
  <div id="quest_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Desired Output of the Phase:</label>
  <input type="text" class="form-control" id="answer" name="answer">
  <div id="ans_err"></div>
</div>

  <h4><b>Phase: Pair Phase</b></h4>
  <div class="form-group">
  <label for="Name">Duration: (In Mins)</label>
  <input type="text" class="form-control" id="p_dur" name="p_dur">
  <div id="p_dur_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Guiding Question:</label>
  <input type="text" class="form-control" id="p_question" name="p_question">
  <div id="p_quest_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Desired Output of the Phase:</label>
  <input type="text" class="form-control" id="p_answer" name="p_answer">
  <div id="p_ans_err"></div>
</div>

  <h4><b>Phase: Share Phase</b></h4>
  <div class="form-group">
  <label for="Name">Duration: (In Mins)</label>
  <input type="text" class="form-control" id="s_dur" name="s_dur">
  <div id="s_dur_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Guiding Question:</label>
  <input type="text" class="form-control" id="s_question" name="s_question">
  <div id="s_quest_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Desired Output of the Phase:</label>
  <input type="text" class="form-control" id="s_answer" name="s_answer">
  <div id="s_ans_err"></div>
</div>
<center><button type="submit" name="tps" class="btn btn-success" <? echo "value='$topicId'"?>>Done!</button>
</center>

</form>
  </div>
  </div>
  </div>

   <div class="col-md-6 col-sm-6 col-xs-10 col-center-block">
    
  <div class="panel panel-default">
  <div class="panel-heading"><center><strong>PI Activity</strong></center></div>
  <div class="panel-body">
	
  <?
  echo "<form action=addPIActivity.php?user=$UserId method=post id=RegFormPI>";
  ?>
  <div class="panel-body">
  <div class="form-group">
  <label for="Name">Concept Being Addressed:</label>
  <input type="text" class="form-control" id="concept" name="concept">
  <div id="concept_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Concept Test Question:</label>
  <input type="text" class="form-control" id="pi_question" name="pi_question">
  <div id="pi_quest_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Correct Answer:</label>
  <input type="text" class="form-control" id="pi_answer" name="pi_answer">
  <div id="pi_ans_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Plausible Distractors</label>
  <input type="text" class="form-control" id="pd" name="pd">
  <div id="pd_err"></div>
</div>

<center><button type="submit" name="pi" class="btn btn-success" <? echo "value='$topicId'"?>>Done!</button>
</center>
</div>
</form>
</div>
</div>
</div>

</div>
<center>
</div>
</center>
<script src="../Resources/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script>
 $(document).ready(function () {
  //called when key is pressed in textbox
  $("#dur").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#dur_err").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});

 $(document).ready(function () {
  //called when key is pressed in textbox
  $("#p_dur").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#p_dur_err").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});

 $(document).ready(function () {
  //called when key is pressed in textbox
  $("#s_dur").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#s_dur_err").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});

</script>



<script>
$("#RegForm").submit(function(){

var flag=0;
if($("#dur").val().trim()=="")
{
flag++;
$("#dur_err").css("color","red");
$("#dur_err").text("Please Enter The Duration!");
}
else
{
$("#dur_err").text("");
}


if($("#question").val().trim()=="")
{
flag++;
$("#quest_err").css("color","red");
$("#quest_err").text("Please Enter The Question!");
}
else
{
$("#quest_err").text("");
}


if($("#answer").val().trim()=="")
{
flag++;
$("#ans_err").css("color","red");
$("#ans_err").text("Please Enter The Answer!");
}
else
{
$("#ans_err").text("");
}

if($("#p_dur").val().trim()=="")
{
flag++;
$("#p_dur_err").css("color","red");
$("#p_dur_err").text("Please Enter The Duration!");
}
else
{
$("#p_dur_err").text("");
}


if($("#p_question").val().trim()=="")
{
flag++;
$("#p_quest_err").css("color","red");
$("#p_quest_err").text("Please Enter The Question!");
}
else
{
$("#p_quest_err").text("");
}


if($("#p_answer").val().trim()=="")
{
flag++;
$("#p_ans_err").css("color","red");
$("#p_ans_err").text("Please Enter The Answer!");
}
else
{
$("#p_ans_err").text("");
}

if($("#s_dur").val().trim()=="")
{
flag++;
$("#s_dur_err").css("color","red");
$("#s_dur_err").text("Please Enter The Duration!");
}
else
{
$("#s_dur_err").text("");
}


if($("#s_question").val().trim()=="")
{
flag++;
$("#s_quest_err").css("color","red");
$("#s_quest_err").text("Please Enter The Question!");
}
else
{
$("#s_quest_err").text("");
}


if($("#s_answer").val().trim()=="")
{
flag++;
$("#s_ans_err").css("color","red");
$("#s_ans_err").text("Please Enter The Answer!");
}
else
{
$("#s_ans_err").text("");
}

if(flag!=0)
return false;
else
return true;
})

</script>

<script>
$("#RegFormPI").submit(function(){

var flag=0;
if($("#concept").val().trim()=="")
{
flag++;
$("#concept_err").css("color","red");
$("#concept_err").text("Please Enter The Concept Being Addressed!");
}
else
{
$("#concept_err").text("");
}


if($("#pi_question").val().trim()=="")
{
flag++;
$("#pi_quest_err").css("color","red");
$("#pi_quest_err").text("Please Enter The Question!");
}
else
{
$("#pi_quest_err").text("");
}


if($("#pi_answer").val().trim()=="")
{
flag++;
$("#pi_ans_err").css("color","red");
$("#pi_ans_err").text("Please Enter The Answer!");
}
else
{
$("#pi_ans_err").text("");
}

if($("#pd").val().trim()=="")
{
flag++;
$("#pd_err").css("color","red");
$("#pd_err").text("Please Enter The Duration!");
}
else
{
$("#pd_err").text("");
}

if(flag!=0)
return false;
else
return true;
})

</script>


</body>
</html>

