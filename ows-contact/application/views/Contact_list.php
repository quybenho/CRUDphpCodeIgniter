<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<style type="text/css">
		table,
		th,
		td {
			border: 1px solid #868585;
		}

		table {
			border-collapse: collapse;
		}

		table tr:nth-child(odd) {
			background-color: #eee;
		}

		table tr:nth-child(even) {
			background-color: white;
		}

		table tr:nth-child(1) {
			background-color: skyblue;
		}

		.container {
			display: grid;
			margin-top: 30px;
			padding: 2em;
			border: 1px solid black;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Danh bạ</h1>
		<hr>
		<div id="body">
			<table class="table table-striped">
				<tr>
					<th>#</th>
					<th>Tên</th>
					<th>Số điện thoại</th>
					<th></th>
				</tr>
				<?php foreach ($contacts as $idx => $item) : ?>
					<tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>">
						<td class="center"><?= $idx + 1 ?></td>
						<td><?= $item->name ?></td>
						<td><?= $item->phone1 ?></td>
						<td class="center"><a href="contact/edit/<?= $item->id ?>">Chi tiết</a></td>
					</tr>
				<?php endforeach; ?>
			</table>
			<a href="contact/add" class="btn btn-primary btn-lg">Thêm Mới</a>


		</div>
		<hr>
		<p class="footer" style="text-align: right;">Website được thiết kế bởi OWS Việt Nam</p>

	</div>

</body>

</html>
