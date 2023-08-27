<?php
require("function/conn.php");
require('fetcher/about.php');
$connect=new Connection();
$fetcher=new DataFetcher($connect);

$data=$fetcher->getAllAboutData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<?php include("../bootstrap.php");
		include('fontawsome.php');
	?>
</head>
<body>
	
	<?php include('conf.php')?>
	<!-- <h3><a href="add/about.php">Just One Time Add Data</a></h3> -->
	<table class="table">
	<thead>
	<tr>
		<th scope="col">id</th>
		<th scope="col">Name</th>
		<th scope="col">Street</th>
		<th scope="col">Phone</th>
		<th scope="col">Email</th>
		<th scope="col">Text</th>
		<th scope="col">Update</th>
	</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $row) {?>
			<tr>
			   <th scope="row">1</th>
			   <td><?=$row['name']?></td>
			   <td><?=$row['street']?> </td>
			   <td><?=$row['phone']?></td>
			   <td><?=$row['email']?></td>
			   <td><?=$row['text']?></td>
			   <td><a href="update/about.php?id=<?=$row['id']?>"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
			</tr>
		<?php }?>
	
	

	</tr>
	</tbody>
	</table>

</body>
</html>