<?php
require("../function/conn.php");
require("../updateFetcher/experience.php");
require('../showUpdate/experience.php');


$connect=new Connection();
$update= new Update($connect);
$show=new showUpdate($connect);
$id=$_GET['id'];

if(isset($_POST['submit'])){

$head=$_POST['head'];
$date=$_POST['date'];
$name=$_POST['name'];
$text=$_POST['text'];

$updaeRes=$update->updateAbout($id,$head,$date,$name,$text);
}


 $data=$show->show($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../../css/reg.css">
	<?php include("../../bootstrap.php")?>
</head>
<body>
<div class="wd-50">
	<form action="" method="post">
		<?php foreach ($data as $row) {?>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Head</label>
				<input type="text" name="head" value="<?=$row['head']?>"  class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Date</label>
				<input type="text" name="date" value="<?=$row['date']?>" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Name</label>
				<input type="text" name="name" value="<?=$row['name']?>" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Text</label>
				<textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"><?=$row['text']?></textarea>
			</div>
			<div class="mb-3 text-center">
				<button type="submit" name="submit" class="btn btn-primary">Button</button>
				<button  class="btn btn-danger"><a href="../experience.php" class="text-white text-decoration-none">Go Previous</a></button>
			</div>
		<?php } ?>
	

	</form>
</div>
</body>
</html>