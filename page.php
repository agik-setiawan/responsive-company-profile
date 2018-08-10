<?php
require_once('setting.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/components-font-awesome/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-dark navbar-light bg-smile">
			<div class="container">
				<a class="navbar-brand" href="">
					<img width="170" class="img-fluid" src="assets/images/logo.png">
				</a>

				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					
				</ul>

				<!-- <ul class="navbar-nav mt-2 mt-lg-0">
					<li class="nav-item active">
						<a href="#" class="nav-link">Menu1</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Menu2</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Menu3</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Menu4</a>
					</li>
				</ul> -->

				<ul class="navbar-nav mt-2 mt-lg-0">
				<a href="#" class="nav-link" id="openMenu">
				<span class="navbar-toggler-icon"></span>
				</a>
				</ul>
			</div>
		</nav>

		<?php include('partials/sidebar.php'); ?>
		<?php include('partials/media-sosial.php'); ?>

<!--Banner Here-->
<?php include('partials/banner-page.php'); ?>

<!--Page Here-->


		<?php include('partials/footer.php'); ?>

		

	</div>

	<script type="text/javascript" src="assets/vendor/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/vendor/vue/dist/vue.min.js"></script>
	<script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>