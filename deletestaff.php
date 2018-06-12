<?php

include 'dbconfig.php';
$id = $_GET['id'];

$sql = "DELETE FROM staff WHERE email='$id'";

if (mysqli_query($conn, $sql)) {
header("Location: staff.php");
} else {
	echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>