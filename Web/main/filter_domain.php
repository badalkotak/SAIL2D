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

				$s=1;
if($type=="1")//TPS
{

	$c=mysqli_query($con,"SELECT COUNT(DomainId) FROM Domains");
	while($row1=mysqli_fetch_array($c))
	{
		$count=$row1['COUNT(DomainId)'];
	}


	for($i=0;$i<$count;$i++)
	{
		$d="D".$i;
		$DomainId=$_REQUEST[$d];
		//$DomainId=2;
		if($DomainId!="")
		{

			$getDomain=mysqli_query($con,"SELECT * FROM Domains WHERE DomainId='$DomainId'");
			while($DomainRow=mysqli_fetch_array($getDomain))
			{
				$domain=$DomainRow['DomainName'];
			}

			$getProgram=mysqli_query($con,"SELECT * FROM Programs WHERE DomainId='$DomainId'");
			while($ProgRow=mysqli_fetch_array($getProgram))
			{
				$program=$ProgRow['ProgramName'];
				$ProgramId=$ProgRow['ProgramId'];

				$getCourse=mysqli_query($con,"SELECT * FROM Courses WHERE ProgramId='$ProgramId'");
				while($CourseRow=mysqli_fetch_array($getCourse))
				{
					$course=$CourseRow['CourseName'];
					$CourseId=$CourseRow['CourseId'];

					$getTopic=mysqli_query($con,"SELECT * FROM Topics WHERE CourseId='$CourseId'");
					while($TopicRow=mysqli_fetch_array($getTopic))
					{
						$topic=$TopicRow['TopicName'];
						$TopicId=$TopicRow['TopicId'];

						$result=mysqli_query($con,"SELECT * FROM TPS WHERE TopicId='$TopicId'");
						while($row=mysqli_fetch_array($result))
						{
							echo "<tr>";
							$userId=$row['User'];
							$TPSId=$row['TPSId'];
							$ActivityRating=$row['ActivityRating'];

							$getUser=mysqli_query($con,"SELECT UserFirstName, UserLastName, UserRating FROM UserDetails WHERE UserId='$userId'");
							while($UserRow=mysqli_fetch_array($getUser))
							{
								$user=$UserRow['UserFirstName']." ".$UserRow['UserLastName'];
								$userRating=$UserRow['UserRating'];
							}

							echo "<td>$s</td>";
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
							echo "<td><center><form action=detailedActivity.php?id=$TPSId&type=1 method=post><button type=submit class='btn btn-success' >View</button></form></td>";
							echo "</tr>";
							$s++;
						}
					}
				}

			}
		}
	}
}






else if($type==2)
{
	/*$result=mysqli_query($con,"SELECT * FROM PI");
	while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		$topicId=$row['TopicId'];
		$userId=$row['User'];

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
		echo "</tr>";
		$i++;
	}
}*/

$c=mysqli_query($con,"SELECT COUNT(DomainId) FROM Domains");
while($row1=mysqli_fetch_array($c))
{
	$count=$row1['COUNT(DomainId)'];
}


for($i=0;$i<$count;$i++)
{
	$d="D".$i;
	$DomainId=$_REQUEST[$d];
		//$DomainId=2;
	if($DomainId!="")
	{

		$getDomain=mysqli_query($con,"SELECT * FROM Domains WHERE DomainId='$DomainId'");
		while($DomainRow=mysqli_fetch_array($getDomain))
		{
			$domain=$DomainRow['DomainName'];
		}

		$getProgram=mysqli_query($con,"SELECT * FROM Programs WHERE DomainId='$DomainId'");
		while($ProgRow=mysqli_fetch_array($getProgram))
		{
			$program=$ProgRow['ProgramName'];
			$ProgramId=$ProgRow['ProgramId'];

			$getCourse=mysqli_query($con,"SELECT * FROM Courses WHERE ProgramId='$ProgramId'");
			while($CourseRow=mysqli_fetch_array($getCourse))
			{
				$course=$CourseRow['CourseName'];
				$CourseId=$CourseRow['CourseId'];

				$getTopic=mysqli_query($con,"SELECT * FROM Topics WHERE CourseId='$CourseId'");
				while($TopicRow=mysqli_fetch_array($getTopic))
				{
					$topic=$TopicRow['TopicName'];
					$TopicId=$TopicRow['TopicId'];

					$result=mysqli_query($con,"SELECT * FROM PI WHERE TopicId='$TopicId'");
					while($row=mysqli_fetch_array($result))
					{
						echo "<tr>";
						$userId=$row['User'];
						$PIId=$row['PIId'];
						$ActivityRating=$row['ActivityRating'];

						$getUser=mysqli_query($con,"SELECT UserFirstName, UserLastName, UserRating FROM UserDetails WHERE UserId='$userId'");
						while($UserRow=mysqli_fetch_array($getUser))
						{
							$user=$UserRow['UserFirstName']." ".$UserRow['UserLastName'];
							$userRating=$UserRow['UserRating'];
						}

						echo "<td>$s</td>";
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
						if($ActivityRating=="")
							{
								$ActivityRating="--";
							}
						echo "<td>$ActivityRating</td>";
						echo "<td><center><form action=detailedActivity.php?id=$PIId&type=2 method=post><button type=submit class='btn btn-success' >View</button></form></td>";
						echo "</tr>";
						echo "</tr>";
						$s++;
					}
				}
			}

		}
	}
}
}



?>

</tbody>
</table>
</div>

<?}?>
