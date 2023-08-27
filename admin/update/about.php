<?php
require("../function/conn.php");
require("../updateFetcher/about.php");
require('../showUpdate/about.php');


$connect=new Connection();
$update= new Update($connect);
$show=new showUpdate($connect);
$id=$_GET['id'];

if(isset($_POST['submit'])){

$name=$_POST['name'];
$street=$_POST['street'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$text=$_POST['text'];

$updaeRes=$update->updateAbout($id,$name,$street,$phone,$email,$text);
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
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" value="<?=$row['name']?>" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Street</label>
            <input type="text" name="street" value="<?=$row['street']?>" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="text" name="phone" value="<?=$row['phone']?>" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" name="email" value="<?=$row['email']?>" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Text</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"><?=$row['text']?></textarea>
        </div>
        <div class="mb-3 text-center">
            <button type="submit" name="submit" class="btn btn-primary">Button</button>
            <button class="btn btn-danger"><a href="../about.php" class="text-white text-decoration-none">Go Previous</a></button>
        </div>
    <?php } ?>
    </form>
	<!-- <h3 style="color:red;text-align:center"><?=$text?></h3> -->

	</form>
</div>
</body>
</html>