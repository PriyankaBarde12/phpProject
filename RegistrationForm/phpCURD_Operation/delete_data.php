<?php include 'co.php';
	$id = $_GET['sid'];
	$query = "DELETE FROM stud_tbl WHERE sid='$id'";
	$del = mysqli_query($conn,$query);

	if ($del) {
					?>
					<script type="text/javascript">
						alert("Data deleted successfully");
						window.open('http://localhost/RegistrationForm/phpCURD_Operation/view.php','_self');
					</script>
				
				<?php }else
				{
				?>
					<script type="text/javascript">
						alert("please try again");
					</script>

			<?php	}
		

?>