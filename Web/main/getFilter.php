<?php
include("../Resources/dbcon.php");
echo '<div class="col-md-6">';
  									echo "Domains:";
  									$i=0;
$getDomain=mysqli_query($con,"SELECT * FROM Domains");
  									while($DomainRow=mysqli_fetch_array($getDomain))
  									{
  										$domain=$DomainRow['DomainName'];
  										$DomainId=$DomainRow['DomainId'];
  										echo '<div class="checkbox">';
  										echo "<label><input type=checkbox value='$DomainId' name='D$i' id='$i'>$domain</label>";
  										echo "</div>";
  										$i++;
  									}
									
									for($j=0;$j<=$i;$j++)
  									{

  										echo "<script>";

  										echo '$("#'.$j.'").click(function(){';
  										echo 'var url="updateCheckbox.php?";';
  										echo 'var domainFilter="filter_domain.php?";';
  										$k=0;
  										$getDomain=mysqli_query($con,"SELECT * FROM Domains");
  										while($DomainRow=mysqli_fetch_array($getDomain))
  										{

  											$domain=$DomainRow['DomainName'];
  											$DomainId=$DomainRow['DomainId'];

  											echo 'if($("#'.$k.'").is(":checked")){';
  											echo 'domainFilter=domainFilter+"D'.$k.'='.$DomainId.'&";';
  											echo 'url=url+"D'.$k.'='.$DomainId.'&";}';
  											$k++;
  										}
  										echo 'url=url+"e=0";$("#prog").load(url);';
  										echo 'var act=$("#type").val();';
  										echo 'domainFilter=domainFilter+"type="+act;';
  										echo '$("#txtHint").load(domainFilter);';
  										echo '});';
  										echo "</script>";


  									}
									echo "</div>";
									
									echo '<div class="col-md-6" id="prog">';
									echo "Programs:";
  									$getProgram=mysqli_query($con,"SELECT * FROM Programs");
  									$id=0;
  									while($ProgRow=mysqli_fetch_array($getProgram))
  									{
  										$program=$ProgRow['ProgramName'];
  										$ProgramId=$ProgRow['ProgramId'];
  										echo '<div class="checkbox">';
  										echo "<label><input type=checkbox value='$ProgramId' name='C$id' id='C$id'>$program</label>";
  										echo "</div>";
  										$id++;
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
  											echo 'courseFilter=courseFilter+"C'.$k.'='.$CourseId.'&";';
  											$k++;
  										}
  										echo 'var act=$("#type").val();';
  										echo 'courseFilter=courseFilter+"type="+act;';
  										echo '$("#txtHint").load(courseFilter);';
  										echo '})';
  										echo "</script>";


  									}
									
																		echo "</div>";


									
									
?>

