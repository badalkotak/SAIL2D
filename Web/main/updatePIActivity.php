
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
  
  $getPIId=mysqli_query($con,"SELECT PIId FROM PIScores WHERE ScoreId='$id'");
  while($r=mysqli_fetch_array($getPIId))
  {
	  $PIId=$r['PIId'];
  }
  
  $getData=mysqli_query($con,"SELECT * FROM PI WHERE PIId='$PIId'");
  while($get=mysqli_fetch_array($getData))
  {
	  $pi_concept=$get['PIConcept'];
	  $pi_quest=$get['PIQuestion'];
	  $pi_ans=$get['PIAnswer'];
	  $pi_pd=$get['PIPlausibleDistractors'];
  }
  ?>

    
  <div class="panel panel-default">
  <div class="panel-heading"><center><strong>PI Activity<br>Topic: <?echo $topic?></strong></center></div>
  <div class="panel-body">
	
  <?$ds=$_REQUEST['ds'];
  echo "<form action='updateActPI.php?id=$id&ds=$ds' method=post id=RegFormPI>";?>
  <div class="panel-body">
  <div class="form-group">
  <label for="Name">Concept Being Addressed:</label>
  <input type="text" class="form-control" id="concept" name="concept" value="<?echo $pi_concept?>">
  <div id="concept_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Concept Test Question:</label>
  <input type="text" class="form-control" id="pi_question" name="pi_question" value="<?echo $pi_quest?>">
  <div id="pi_quest_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Correct Answer:</label>
  <input type="text" class="form-control" id="pi_answer" name="pi_answer" value="<?echo $pi_ans?>">
  <div id="pi_ans_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Plausible Distractors</label>
  <input type="text" class="form-control" id="pd" name="pd" value="<?echo $pi_pd?>">
  <div id="pd_err"></div>
</div>

<center><button type="submit" name="pi" class="btn btn-success" <? echo "value='$PIId'"?>>Update!</button>
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