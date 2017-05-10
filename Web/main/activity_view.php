<?php
$type=$_REQUEST['type'];
if($type!=0)
{
?>
<div class="table-responsive">        
<table class="table">
<thead>
<tr>
<th>Sr No.</th>
<th>Domain</th>
<th>Program</th>
<th>Course</th>
<th>Topic</th>
<th>User</th>
<th>User Rating</th>
<th>Activity Rating</th>
<th>View</th>
</tr>
</thead>
<tbody>

<?php
include("../Resources/dbcon.php");
error_reporting(0);

$i=1;
if($type=="1")//TPS
{
	$result=mysqli_query($con,"SELECT * FROM TPS");
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		$topicId=$row['TopicId'];
		$TPSId=$row['TPSId'];
		$userId=$row['User'];
		$ActivityRating=$row['ActivityRating'];

		$getTopic=mysqli_query($con,"SELECT * FROM Topics WHERE TopicId='$topicId'");
		while($TopicRow=mysqli_fetch_array($getTopic))
		{
			$topic=$TopicRow['TopicName'];
			$CourseId=$TopicRow['CourseId'];
		}

		$getCourse=mysqli_query($con,"SELECT * FROM Courses WHERE CourseId='$CourseId'");
		while($CourseRow=mysqli_fetch_array($getCourse))
		{
			$course=$CourseRow['CourseName'];
			$ProgramId=$CourseRow['ProgramId'];
		}

		$getProgram=mysqli_query($con,"SELECT * FROM Programs WHERE ProgramId='$ProgramId'");
		while($ProgRow=mysqli_fetch_array($getProgram))
		{
			$program=$ProgRow['ProgramName'];
			$DomainId=$ProgRow['DomainId'];
		}

		$getDomain=mysqli_query($con,"SELECT * FROM Domains WHERE DomainId='$DomainId'");
		while($DomainRow=mysqli_fetch_array($getDomain))
		{
			$domain=$DomainRow['DomainName'];
		}

		$getUser=mysqli_query($con,"SELECT UserFirstName, UserLastName, UserRating FROM UserDetails WHERE UserId='$userId'");
		while($UserRow=mysqli_fetch_array($getUser))
		{
			$user=$UserRow['UserFirstName']." ".$UserRow['UserLastName'];
			$userRating=$UserRow['UserRating'];
		}

		echo "<td>$i</td>";
		echo "<td>$domain</td>";
		echo "<td>$program</td>";
		echo "<td>$course</td>";
		echo "<td>$topic</td>";
		echo "<td>$user</td>";
		if($userRating=="")
		{
			$userRating="--";
		}
		echo "<td>$userRating</td>";
		if($ActivityRating=="")
		{
			$ActivityRating="--";
		}
		echo "<td>$ActivityRating</td>";
		echo "<td> <center><form action='detailedActivity.php?id=$TPSId&type=1' method=post><button type=submit class='btn btn-success'>View</button></form></td>";
		echo "</tr>";
		$i++;
	}
}

else if($type==2)
{
	$result=mysqli_query($con,"SELECT * FROM PI");
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		$topicId=$row['TopicId'];
		$userId=$row['User'];
		$ActivityRating=$row['ActivityRating'];
		$PIId=$row['PIId'];

		$getTopic=mysqli_query($con,"SELECT * FROM Topics WHERE TopicId='$topicId'");
		while($TopicRow=mysqli_fetch_array($getTopic))
		{
			$topic=$TopicRow['TopicName'];
			$CourseId=$TopicRow['CourseId'];
		}

		$getCourse=mysqli_query($con,"SELECT * FROM Courses WHERE CourseId='$CourseId'");
		while($CourseRow=mysqli_fetch_array($getCourse))
		{
			$course=$CourseRow['CourseName'];
			$ProgramId=$CourseRow['ProgramId'];
		}

		$getProgram=mysqli_query($con,"SELECT * FROM Programs WHERE ProgramId='$ProgramId'");
		while($ProgRow=mysqli_fetch_array($getProgram))
		{
			$program=$ProgRow['ProgramName'];
			$DomainId=$ProgRow['DomainId'];
		}

		$getDomain=mysqli_query($con,"SELECT * FROM Domains WHERE DomainId='$DomainId'");
		while($DomainRow=mysqli_fetch_array($getDomain))
		{
			$domain=$DomainRow['DomainName'];
		}

		$getUser=mysqli_query($con,"SELECT UserFirstName, UserLastName, UserRating FROM UserDetails WHERE UserId='$userId'");
		while($UserRow=mysqli_fetch_array($getUser))
		{
			$user=$UserRow['UserFirstName']." ".$UserRow['UserLastName'];
			$userRating=$UserRow['UserRating'];
		}

		echo "<td>$i</td>";
		echo "<td>$domain</td>";
		echo "<td>$program</td>";
		echo "<td>$course</td>";
		echo "<td>$topic</td>";
		echo "<td>$user</td>";
		if($userRating=="")
		{
			$userRating="--";
		}
		echo "<td>$userRating</td>";
		if($ActivityRating=="")
		{
			$ActivityRating="--";
		}
		echo "<td>$ActivityRating</td>";
		echo "<td><center><form action=detailedActivity.php?id=$PIId&type=2 method=post><button type=submit class='btn btn-success' >View</button></form></td>";
		echo "</tr>";
		$i++;
	}
}


?>

</tbody>
</table>
</div>

<?
}?>
