<?php   include 'co.php';
	
 ?>
 <a href="stud.php">home</a>
<table border="1px" cellpadding="10px" cellspacing="0">
	<tr>
		<th>NAME</th>
		<th>CITY</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
		<th>MOBNO</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
		$query = "select * from stud_tbl";
		$da = mysqli_query($conn ,$query);
		$result = mysqli_num_rows($da);
		//echo($result);
		if($result)
		{
			//echo("display");
			while ($row = mysqli_fetch_array($da)) {
				?>
				<tr>
					<td><?php echo $row['sname']; ?></td>
					<td><?php echo $row['city']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['phone'];?></td>
					<td><a href="update.php? sid=<?php echo $row['sid'];?>">edit</a></td>
					<td><a onclick="return confirm('Are you sure ,you want to delete?')"  href="delete_data.php? sid=<?php echo $row['sid'];?>">delete</a></td>
				</tr>

			<?php }
		}
		
		else
		{
			?>

			<tr>
				<td>No Record found</td>
			</tr>
		<?php }
	?>
</table>