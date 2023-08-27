<?php
require("function/conn.php");
require('fetcher/awards.php');
$connect=new Connection();
$fetcher=new DataFetcherAwards($connect);

$data=$fetcher->getAllAwardsData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php include("../bootstrap.php");
		include('fontawsome.php')
	?>
</head>
<body>
	
	<?php include('conf.php')?>
	<h3><a href="add/awards.php">Add Data</a></h3>
	<table class="table">
	<thead>
	<tr>
		<th scope="col">id</th>
		<th scope="col">Text</th>
		<th scope="col">Update</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<?php foreach ($data as $row) {?>
		<th scope="row"><?=$row['id']?></th>
		<td><?=$row['text']?></td>
		<td><a href="#"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
		<?php } ?>
		
	</tr>
	<tr>

	</tr>
	</tbody>
	</table>


</body>
</html>