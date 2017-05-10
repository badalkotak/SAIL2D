

    
  <div class="panel panel-default">
  <div class="panel-heading"><center><strong><?php
  include("../Resources/dbcon.php");
  error_reporting(0);
  $UserId=$_REQUEST['user'];
  $topicId=$_REQUEST['topic'];
  $getTopic=mysqli_query($con,"SELECT TopicName FROM Topics WHERE TopicId='$topicId'");
  while($trow=mysqli_fetch_array($getTopic))
  {
    $topic=$trow['TopicName'];
  }

  echo "Think-Pair-Share Activity<br>Topic: $topic</strong></center></div>";
  ?>

  <?
  $ds=$_REQUEST['ds'];
  echo "<form action='updateActTPS.php?id=$id&type=1&ds=$ds' method=post id='RegForm'>";
  $id=$_REQUEST['id'];
  ?>
  
  <?php
  $getTPSId=mysqli_query($con,"SELECT TPSId FROM TPSScores WHERE ScoreId='$id'");
  while($row=mysqli_fetch_array($getTPSId))
  {
	  $TPSId=$row['TPSId'];
  }
  
  $getTPS=mysqli_query($con,"SELECT * FROM TPS WHERE TPSId='$TPSId'");
  while($row=mysqli_fetch_array($getTPS))
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
                  
  }
  ?>
  <div class="panel-body">
  <h4><b>Phase: Think Phase</b></h4>
  <div class="form-group">
  <label for="Name">Duration: (In Mins)</label>
  <input type="text" class="form-control" id="dur" name="dur" value="<?echo $t_dur?>">
  <div id="dur_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Guiding Question:</label>
  <input type="text" class="form-control" id="question" name="question" value="<?echo $t_quest?>">
  <div id="quest_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Desired Output of the Phase:</label>
  <input type="text" class="form-control" id="answer" name="answer" value="<?echo $t_ans?>">
  <div id="ans_err"></div>
</div>


  <h4><b>Phase: Pair Phase</b></h4>
  <div class="form-group">
  <label for="Name">Duration: (In Mins)</label>
  <input type="text" class="form-control" id="p_dur" name="p_dur" value="<?echo $p_dur?>">
  <div id="p_dur_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Guiding Question:</label>
  <input type="text" class="form-control" id="p_question" name="p_question" value="<?echo $p_quest?>">
  <div id="p_quest_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Desired Output of the Phase:</label>
  <input type="text" class="form-control" id="p_answer" name="p_answer" value="<?echo $p_ans?>">
  <div id="p_ans_err"></div>
</div>

  <h4><b>Phase: Share Phase</b></h4>
  <div class="form-group">
  <label for="Name">Duration: (In Mins)</label>
  <input type="text" class="form-control" id="s_dur" name="s_dur" value="<?echo $s_dur?>">
  <div id="s_dur_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Guiding Question:</label>
  <input type="text" class="form-control" id="s_question" name="s_question" value="<?echo $s_quest?>">
  <div id="s_quest_err"></div>
</div>

  <div class="form-group">
  <label for="Name">Desired Output of the Phase:</label>
  <input type="text" class="form-control" id="s_answer" name="s_answer" value="<?echo $s_ans?>">
  <div id="s_ans_err"></div>
</div>
<center><button type="submit" name="tps" class="btn btn-success" <? echo "value='$TPSId'"?>>Update!</button>
</center>

</form>
  </div>
  </div>
  </div>
  
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