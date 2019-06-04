<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	
  <div style="height: 400px;
 		width: 300px;
 		margin-left:450px;
 		

	">
		<img src="images/2.png" style="
			padding-left: 50px;
			margin-top: 100px;
			width: 230px;
			height: 100px;
		">
		<form method="POST" action="vhod2.php">
		<input  class="form-control" type="text" placeholder="email..." name="email"><br>
		<input  class="form-control" placeholder="Password..." name="psw" type="password"><br>

	
		<button  name="button" class="btn btn-primary " style="
		margin-left: 130px;
		">
			Sig in 
		</button>
		 <?php 	
				echo $_GET['error'];
  		?>
	</form>

<p style="text-align: center;"> 
		Еще нет аккаунта?  <a href="registration.php" style="color: cyan;">Зарегистрируйтесь</a>
</p>

	</div>
</body>
</html>