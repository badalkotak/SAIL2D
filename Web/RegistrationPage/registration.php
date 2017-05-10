<?php
include("../Resources/dbcon.php");
//error_reporting(0);

$fname=$_REQUEST['FName'];
$fname=trim($fname);

$lname=$_REQUEST['LName'];
$lname=trim($lname);

$mname=$_REQUEST['MName'];
$mname=trim($mname);

$email=$_REQUEST['email'];
$email=trim($email);

$passwd=$_REQUEST['passwd1'];
$passwd=trim($passwd);

$affiliation=$_REQUEST['affiliation'];

$city=$_REQUEST['city'];
$getCityId=mysqli_query($con,"SELECT city_id FROM Cities WHERE city_name='$city'");
while($cityRow=mysqli_fetch_array($getCityId))
{
	$city=$cityRow['city_id'];
}

$TeachingExp=$_REQUEST['TeachingExp'];

$domain=$_REQUEST['domain'];

$program=$_REQUEST['program'];

$course=$_REQUEST['course'];

$topic=$_REQUEST['topic'];

$gender=$_REQUEST['gender'];

if($insert=mysqli_query($con,"INSERT INTO `UserDetails`( `UserFirstName`, `UserLastName`, `UserMiddleName`, `UserEmail`, `UserPassword`, `Gender`, `AffiliationID`, `CityAndState`, `TeachingExperience`) VALUES ('$fname','$lname','$mname','$email','$passwd','$gender','$affiliation','$city','$TeachingExp')"))
{
	$getId=mysqli_query($con,"SELECT UserId FROM UserDetails WHERE UserEmail='$email'");
	while($row=mysqli_fetch_array($getId))
	{
		$id=$row['UserId'];
	}
	if($insert_userTopic=mysqli_query($con,"INSERT INTO `UserDomains`( `UserId`, `TopicId`, `CourseId`, `ProgramId`, `DomainId`) VALUES ('$id','$topic','$course','$program','$domain')"))
	echo "<script>alert('Please add your first Activity to access the Portal!');window.location.href='activity.php?topic=$topic&user=$id'</script>";
	else
		echo mysqli_error($con);
}

else
{
	echo "Nahi hua".mysqli_error($con);
}


?>
