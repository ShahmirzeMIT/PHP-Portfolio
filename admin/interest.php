<?php
require("function/conn.php");
require('fetcher/interest.php');
$connect=new Connection();
$fetcher=new DataFetcherInterest($connect);

$data=$fetcher->getAllInterestData();
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
	<h3><a href="add/interest.php">Add Data</a></h3>
	<table class="table">
	<thead>
	<tr>
		<th scope="col">id</th>
		<th scope="col">FirstText</th>
		<th scope="col">SeconText</th>
		<th scope="col">Update</th>
	</tr>
	</thead>
	<tbody>
	
		<?php foreach ($data as $row) { ?>
		<tr>
		  	<th scope="row"><?=$row['id']?></th>
		  	<td><?=$row['firstText']?></td>
		  	<td><?=$row['secondText']?></td>
		  	<td><a href="update/interest.php?id=<?=$row['id']?>"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
		</tr>
		<?php } ?>
		
	
	<tr>

	</tr>
	</tbody>
	</table>


</body>
</html>