<?php include 'co.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="" method="POST">
			<div>
					<label>Name</label><br>
					<input type="text" name="sname" >
				</div>
				<div>
					<label>City</label><br>
					<input type="text" name="city" >
				</div>
				<div>
					<label>Email</label><br>
					<input type="text" name="email" >
				</div>
				<div>
					<label>Password</label><br>
					<input type="password" name="password" >
				</div>
				<div>
					<label>Phone Number</label><br>
					<input type="number" name="phone" >
				</div>
				<div class="form_action--button">
					<input type="submit" value="Submit" name="submit">
					<a href="view.php"><input type="button" name ="View" value="View"></a>
				</div>
		</form>
	</div>

	<?php

		if(isset($_POST['submit']))
		{
			$sname = $_POST['sname'];
			$city = $_POST['city'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$phone = $_POST['phone'];

			$query = "INSERT into stud_tbl(sname,city,email,password,phone) VALUES 
				('$sname','$city','$email','$password','$phone')";
				$data = mysqli_query($conn,$query);
		}
	?>
</body>
</html>