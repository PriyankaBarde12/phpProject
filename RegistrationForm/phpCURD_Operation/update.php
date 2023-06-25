<?php include 'co.php';
	$id = $_GET['sid'];
	//echo($id);
	$select = "SELECT * from stud_tbl where sid='$id'";
	$data =mysqli_query($conn,$select);
	$row= mysqli_fetch_array($data);
?>

	<div>
		<form action="" method="POST">
			<div>
					<label>Name</label><br>
					<input type="text" name="sname" value="<?php echo $row['sname']; ?>" >
				</div>
				<div>
					<label>City</label><br>
					<input type="text" name="city" value="<?php echo$row['city'] ?> " >
				</div>
				<div>
					<label>Email</label><br>
					<input type="text" name="email" value="<?php echo $row['email'] ?>" >
				</div>
				<div>
					<label>Password</label><br>
					<input type="password" name="password" value="<?php echo $row['password'] ?>">
				</div>
				<div>
					<label>Phone Number</label><br>
					<input type="number" name="phone" value="<?php echo $row['phone'] ?>" >
				</div>
				<div class="form_action--button">
				
					<input type="submit" name="update_btn" value="Update">
					<button><a href="view.php">Back</a></button>
				</div>
		</form>
	</div>

	<?php

		if(isset($_POST['update_btn']))
		{
			$sname = $_POST['sname'];
			$city = $_POST['city'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$phone = $_POST['phone'];

		 	$update_query = "UPDATE stud_tbl SET sname= '$sname', city='$city',email='$email', password='$password',phone='$phone' WHERE sid='$id'";
				$data = mysqli_query($conn,$update_query);
				if ($data) {
					?>
					<script type="text/javascript">
						alert("Data update successfully");
						window.open('http://localhost/RegistrationForm/phpCURD_Operation/view.php','_self');
					</script>
				
				<?php }else
				{
					?>
					<script type="text/javascript">
						alert("please try again");
					</script>
			<?php	}
		}
	?>