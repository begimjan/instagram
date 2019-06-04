<?php 
	$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
$insert = mysqli_query($connect,"INSERT INTO innsta (nusu,psw,email) VALUES ('" . $_POST['nusu'] . "','" . $_POST['psw'] . "','" . $_POST['email'] . "')");
  header('Location: http://begimjan/innsta/index.php');
 ?>
