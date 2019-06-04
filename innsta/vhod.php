
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	<?php 
$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
$insert = mysqli_query($connect,"INSERT INTO innsta (email,psw) VALUES ('". $_POST['email'] ."','". $_POST['psw'] ."')");
 ?>

</body>
</html>