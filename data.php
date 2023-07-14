<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$age = $_POST['age'];
	$department = $_POST['department'];
	$salary = $_POST['salary'];
	$sql = "INSERT INTO employee (name, age, department, salary)
			VALUES ('$name', '$age', '$department', '$salary')";
	if (mysqli_query($conn, $sql)) {
		mysqli_close($conn);
		echo "<script>alert('Data stored successfully!');</script>"; // Show alert message
		echo "<script>window.location.href = 'index.php';</script>"; // Redirect to index main  page
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>
