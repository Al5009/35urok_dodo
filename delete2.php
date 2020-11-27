<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "35urok");
	$query = mysqli_query($connect, "SELECT * FROM moyaeda");
		$query1 = mysqli_query($connect, "DELETE FROM moyaeda");
	
	header('Location: index.php');
 ?>