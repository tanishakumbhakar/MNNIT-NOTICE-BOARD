<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<br/><br/><h2 style='color:red'>No Notices found !!!</h2>";
}
else
{
?>
<br/><br/>
<h2 style="color:#00FFCC">All Notices</h2>
<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=add_notice" style="font-size:2vw;">Add New notice</a></th></h1>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>User</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td><font color='white'>".$row['subject']."</font></td>";
echo "<td><font color='white'>".$row['Description']."</font></td>";
echo "<td><font color='white'>".$row['user']."</font></td>";
echo "<td><font color='white'>".$row['Date']."</font></td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:lime'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>