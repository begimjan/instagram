<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div style="display: flex;">
		
		<img src="images/1.PNG" style="
			padding-left: 100px;
			margin-top: 100px;
			width: 500px;
			height: 500px;
		">
	<div style="height: 600px;
 		width: 400px;
 		margin-left:200px;
 		margin-top:50px;
 		

	">
	<img src="images/2.png" style="
			padding-left: 50px;
			margin-top: 100px;
			width: 230px;
			height: 100px;
		">
		<form method="POST" action="regis.php">
		<input  class="form-control" type="text" placeholder="email..." name="email"><br>
		<input  class="form-control" type="text" placeholder="name..." name="nusu"><br>
		<input  class="form-control" placeholder="Password..." name="psw" type="Password"><br>

	
		<button  name="button" class="btn btn-primary " style="
		margin-left: 130px;
		">
		Registration
		</button>
		 
	</form>

<p style="text-align: center;"> 
		Уже есть аккаунт?  <a href="index.php" style="color: cyan;">Вход</a>
</p>

	</div>
	</div>
		
</body>
</html>