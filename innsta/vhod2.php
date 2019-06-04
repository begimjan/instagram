<?php 
$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
$result = mysqli_query($connect,"SELECT * FROM innsta WHERE email = '".$_POST['email'] ."' AND psw = '".$_POST['psw']."'");
$res = $result->fetch_assoc();

if($result->num_rows==0){
		header("Location: http://begimjan/innsta/index.php?error=Нету такого пользователя ");
	}
	else{
	header("Location: http://begimjan/innsta/posts.php?id=".$res['id']);
	}
 ?>


 