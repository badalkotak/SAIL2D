
<?php

  include("../Resources/dbcon.php");
  error_reporting(0);

  $topicId=$_REQUEST['topic'];
  $getTopic=mysqli_query($con,"SELECT TopicName FROM Topics WHERE TopicId='$topicId'");
  while($trow=mysqli_fetch_array($getTopic))
  {
    $topic=$trow['TopicName'];
  }
  session_start();
  $userId=$_REQUEST['user'];
  ?>

    
  <div class="panel panel-default">
  <div class="panel-heading"><center><strong>PI Activity<br>Topic: <?echo $topic?></strong></center></div>
  <div class="panel-body">
	
  <?echo "<form action='addPIActivity.php?user=$userId' method=post id=RegFormPI>";?>
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