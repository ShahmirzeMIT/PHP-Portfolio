<?php

require('../function.php');
$select=new Select();
$name=new Name();
$ad="";
$number=0;
if(isset($_SESSION['id'])){
	$user=$select->selectUser($_SESSION['id']);
	$ad=$name->name($_SESSION['id']);
	$number=1;
}
else{
	header('Location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php include("../bootstrap.php")?>
</head>
<body>
	
	<?php include('conf.php')?>
 	<h2 class="text-center ">Salam <?=$ad?></h2>

</body>
</html>