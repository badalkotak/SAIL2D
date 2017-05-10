<?php
include("../Resources/dbcon.php");
error_reporting(0);

$c=mysqli_query($con,"SELECT COUNT(DomainId) FROM Domains");
while($row1=mysqli_fetch_array($c))
{
	$count=$row1['COUNT(DomainId)'];
}

echo "Programs:";
for($i=0;$i<$count;$i++)
{
	$d="D".$i;
	$domainId=$_REQUEST[$d];
	if($domainId!="")
	{
		$id=0;
		$result=mysqli_query($con,"SELECT * FROM Programs WHERE DomainId='$domainId'");
		while($row=mysqli_fetch_array($result))
		{
			$program=$row['ProgramName'];
			$programId=$row['ProgramId'];

			echo '<div class="checkbox">';
			echo "<label><input type=checkbox value='$programId' id='C$id' name='C$id'>$program</label>";
			echo "</div>";
			$id++;
		}

		
	}
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
		//echo 'courseFilter=courseFilter+"C'.$k.'='.$CourseId.'&";';
		echo 'courseFilter=courseFilter+"C'.$k.'="+$("#C'.$k.'").val()+"&";';
		$k++;
	}
	echo 'var act=$("#type").val();';
	echo 'courseFilter=courseFilter+"type="+act;';
	echo '$("#txtHint").load(courseFilter);';
	echo '})';
	echo "</script>";


}
?>