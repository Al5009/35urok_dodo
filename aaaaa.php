<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "35urok");
	$query = mysqli_query($connect, "SELECT * FROM eda WHERE id='{$_GET['id']}'");
	$stroka = $query->fetch_assoc();

	$ins = "INSERT INTO moyaeda (name, text, price, img) VALUES ('{$stroka["name"]}', '{$stroka["text"]}', '{$stroka["price"]}', '{$stroka["img"]}')";
	mysqli_query($connect, $ins);
	header('Location: index.php');
 ?>