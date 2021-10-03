<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<style type="text/css">
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
		<form method="post" action="save">
			<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Tên</label>
				<input type="text" class="form-control" id="formGroupExampleInput" name="name">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Điện Thoại1</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" name="phone1">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Điện thoại 2</label>
				<input type="text" class="form-control" id="formGroupExampleInput" name="phone2">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Email</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" name="email">
			</div>

			<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">facebook</label>
				<input type="text" class="form-control" id="formGroupExampleInput" name="fb">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">công ty</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" name="company">
			</div>
			<button class="btn btn-primary btn-lg">Thêm mới</button>
		</form>

	</div>
</body>

</html>
