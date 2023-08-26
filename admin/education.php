<?php
require("function/conn.php");
require('fetcher/education.php');
$connect=new Connection();
$fetcher=new DataFetcherEdu($connect);

$data=$fetcher->getAllEducationData();
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
	<h3><a href="add/education.php">Add Data</a></h3>
	<table class="table">
	<thead>
	<tr>
		<th scope="col">id</th>
		<th scope="col">Head</th>
		<th scope="col">Date</th>
		<th scope="col">Name</th>
		<th scope="col">Text</th>
		<th scope="col">Update</th>
	</tr>
	</thead>
	<tbody>
	<?php  foreach ($data as $row) {?>
		<tr>
			<th scope="row"><?=$row['id']?></th>
			<td><?=$row['head']?></td>
			<td><?=$row['date']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['text']?></td>
			<td><a href="#"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
		</tr>
	<?php } ?>
	<tr>

	</tr>
	</tbody>
	</table>


</body>
</html>