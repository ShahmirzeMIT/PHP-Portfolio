<?php
require('function.php');
$login=new Login();
$text="";

if(isset($_POST['submit'])){
	$result=$login->login($_POST['username'],$_POST['email'],$_POST['password']);
	if($result==1){
		$_SESSION['id']=$login->userId();
		header('Location: admin/home.php');
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/reg.css">
	<?php include("bootstrap.php")?>
	
</head>
<body>
	<div class="wd-50">
		<form action="" method="post">
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">UserName</label>
				<input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Sako">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Email address</label>
				<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
			<div class="mb-3">
				<label for="inputPassword5" class="form-label">Password</label>
				<input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
			</div>
			<div class="mb-3 text-center">
				<button type="submit" name="submit" class="btn btn-primary">Primary</button>
				<button  class="btn btn-danger"><a href="index.php" class="text-white text-decoration-none">Go Previous</a></button>
			</div>
			<h3 style="color:red;text-align:center"><?=$text?></h3>
		</form>
	</div>
	
</body>
</html>