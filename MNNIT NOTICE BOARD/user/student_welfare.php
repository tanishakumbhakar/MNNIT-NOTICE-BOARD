<br/><br/><br/><h2>Student Welfare Notifications</h2>


		<?php
		extract($_POST);
include('../connection.php');
$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."'");
 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

if($row['admin']=='STUDENT WELFARE'){
echo"<div class='container row bg-success'>";
	
	
	echo"<div class='col-sm-1'><h5 style='color:black;text-align:left;font-weight:bold'>S.No".$i."</h5></div>";
	echo"<div class='col-sm-9'></div>";
	echo"<span style='text-align:right ;font-weight:bold' class='col-sm-2'>Date".$row['Date']."</span>";
	
	echo "<h4 style='color:blue;text-align:center;font-weight:bold'>NOTICE</h4>";
	echo "<h5 style='color:green;text-align:left;font-weight:bold'>".$row['subject'];
	echo "<h5 style='color:red;text-align:left;font-weight:bold'>".$row['admin'];
	echo "<h5 style='text-align:center'>".$row['Description']."</h5>";

	
echo"</div><br/><br/>";


$i++;}
}
		?>