<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "35urok");
	$query1 = mysqli_query($connect, "DELETE FROM moyaeda WHERE id='" . $_GET["id"] . "'");
	header('Location: index.php');
 ?>