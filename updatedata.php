<?php
include("database.php");
if (isset($_POST['update'])) {


	$r = "SELECT * FROM citzen WHERE id =" . $_GET['id'];
	$dx = mysqli_query($conn, $r);
	if (!$dx) {
		echo "Failed";
	}
	if ($d = mysqli_fetch_array($dx)) {
?>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $d['id']; ?>" placeholder="Enter the id" />
			<br />
			<input type="text" name="fname" value="<?php echo $d['fname']; ?>" placeholder="Enter the fname" />
			<br />
			<input type="number" name="pwd" value="<?php echo $d['pwd']; ?>" value placeholder="Enter lname" />
			<br />
			<input type="submit" name="update" value="Update" />
			<input type="submit" name="retrieve" value="Retrieve" />
		</form>

<?php
		if (isset($_POST['update'])) {
			$fname = $_POST['firstname'];
			$lname = $_POST['lastname'];
			echo $w = "UPDATE researcher SET fame='$fname', lname='$lname'
			 WHERE id=" . $_POST['id'];

			$r = mysqli_query($conn, $w);
			if (!$r) {
				echo "error ";
			} else {
				echo "Updated successfully";
			}
		}
	}
}
?>