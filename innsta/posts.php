<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php 	
$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
$result2 = mysqli_query($connect,"SELECT * FROM innsta WHERE id = '".$_GET['id']."'");
$res2 = $result2->fetch_assoc();


	 ?>
<h2><?php echo $res2['nusu']; ?></h2>


	 <form action="insert2.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="post_text" placeholder="your...minds">
		<?php echo '<input type="hidden" name = "users_id" value="' . $res2['id'] . '">';?>
 		<input type="file" name="img">
 		<button>
 			добавить
 		</button>

 	</form>
 	<?php
 $connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
$result = mysqli_query($connect, "SELECT * FROM innsta INNER JOIN posts ON innsta.id = posts.users_id ORDER BY innsta.id DESC");
for($i = 0; $i<$result->num_rows; $i++){
$res = $result->fetch_assoc();

 ?> 

 <div class="col-5 mx-auto">
 	<h2><?php echo $res['nusu'];?></h2>
  <img src="<?php  echo $res['img']?>" class="w-100" alt="">
  <p><?php echo $res['post_text'] ?></p>

 </div>
 
<?php 
}
  ?>
</body>
</html>