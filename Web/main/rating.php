<?php
//$userId=15;
include("../Resources/dbcon.php");
//error_reporting(0);

//Finding R

//R-TPS
$dkmin=0;
$dkmax=2;
$R=0;
$T=0;
$total=0;
$activity=0;
$getN=mysqli_query($con,"SELECT * FROM TPS WHERE User='$userId'");
while($rowN=mysqli_fetch_array($getN))
{
	$activity++;
	$i=0;
	$T=0;
	$TPSId=$rowN['TPSId'];
	$getM=mysqli_query($con,"SELECT * FROM TPSScores WHERE TPSId='$TPSId' AND UserId='$userId'");
	while($rowM=mysqli_fetch_array($getM))
	{
		$total++;
		//$i++;
		
		for($i=1;$i<=6;$i++)
		{
			$dk=$rowM['Score'.$i];
			$R1=($dk-$dkmin)/($dkmax-$dkmin);
			$T=$T+$R1;
		}
	}
	$R1=$T/6;
	$R=$R+$R1;
}

$getN2=mysqli_query($con,"SELECT * FROM PI WHERE User='$userId'");
while($rowN2=mysqli_fetch_array($getN2))
{
	$activity++;
	//$i=0;
	$T=0;
	$PIId=$rowN2['PIId'];
	$getM2=mysqli_query($con,"SELECT * FROM PIScores WHERE PIId='$PIId' AND UserId='$userId'");
	while($rowM2=mysqli_fetch_array($getM2))
	{
		$total++;
		//$i++;
		
		for($i=1;$i<=2;$i++)
		{
			$dk2=$rowM2['Score'.$i];
			$R2=($dk2-$dkmin)/($dkmax-$dkmin);
			$T=$T+$R2;
		}
	}
	$R2=$T/2;
	$R=$R+$R2;
}

//Find S
//S1
$S1=0;
$S1=$activity-($R/$total);

$emin=0;
$emax=2;
$csmin=0;
$csmax=2;

$ECS=0;

$getECS=mysqli_query($con,"SELECT * FROM E_CS WHERE UserId='$userId'");
while($ecs=mysqli_fetch_array($getECS))
{
	$e=$ecs['E'];
	$cs=$ecs['CS'];
	$ECS=$ECS+((($e-$emin)/($emax-$emin))+(($cs-$csmin)/($csmax-$csmin)));
}

$S2=$ECS/(2*$total);

$S=$S1+$S2;
echo $S;

if($S==0)
{
	$star=0;
}
else if($S<0.50)
{
	$star=1;
}
else if($S>=0.50 && $S<0.90)
{
	$star=2;
}
else if($S>=0.90 && $S<1.35)
{
	$star=3;
}
else if($S>=1.35 && $S<1.75)
{
	$star=4;
}
else if($S>=1.75)
{
	$star=5;
}

$update=mysqli_query($con,"UPDATE `UserDetails` SET `UserRating`='$star' WHERE `UserId`='$userId'");


?>