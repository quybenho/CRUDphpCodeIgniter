<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

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
		<div id="body">
			<h1>Chi tiết</h1>
			<hr>
			<div class="card-body">
				<?php if ($this->session->flashdata('errors')) { ?>
					<div class="alert alert-danger">
						<?php echo $this->session->flashdata('errors'); ?>
					</div>
				<?php } ?>

				<form action="<?php echo base_url('contact/update/' . $contact_item->id); ?>" method="POST">
					<input type="hidden" name="_method" value="PUT">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" value="<?php echo $contact_item->name; ?>">
					</div>
					<div class="form-group">
						<label for="phone1">phone1</label>
						<input type="text" class="form-control" id="phone1" name="phone1" value="<?php echo $contact_item->phone1; ?>">
					</div>
					<div class="form-group">
						<label for="phone1">phone2</label>
						<input type="text" class="form-control" id="phone2" name="phone2" value="<?php echo $contact_item->phone2; ?>">
					</div>
					<div class="form-group">
						<label for="email">email</label>
						<input type="text" class="form-control" id="email" name="email" value="<?php echo $contact_item->email; ?>">
					</div>
					<div class="form-group">
						<label for="fb">fb</label>
						<input type="text" class="form-control" id="fb" name="fb" value="<?php echo $contact_item->fb; ?>">
					<div class="form-group">
						<label for="company">company</label>
						<input type="text" class="form-control" id="company" name="company" value="<?php echo $contact_item->company; ?>">
					</div>
					<hr>

					<button type="submit" class="btn btn-outline-primary">Cập Nhập</button>
					<a class="btn btn-outline-danger" href="<?php echo base_url('contact/del/' . $contact_item->id) ?>">
					Xóa
				</a>
				<a href="/ows-contact" class="btn btn-outline-danger">Quay Lại</a>
				</form>

			</div>
		</div>
		<hr>
		<p class="footer" style="text-align: right;">Website được thiết kế bởi OWS Việt Nam</p>
	</div>



</body>

</html>
