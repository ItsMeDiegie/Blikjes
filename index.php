<?php require_once('connect.php') ?>
<?php require_once('controllers/main.php') ?>

<?php $products = getPublishedproducts(); ?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

	<title>Shop</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<h4 class="text-white mt-1" href="#">Demo Webshop</h4>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
			aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">

			</ul>
			<?php if (isset($_SESSION['user']['username'])) { ?>
			<div class="logged_in_info">
				<span class="text-white mr-3">Welcome <?php echo $_SESSION['user']['username'] ?></span>
				<?php if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) { ?>
				<span class="text-white"><a class="text-white" href="admin/dashboard.php">Admin Dashboard</a></span>
				<?php } ?>
				|
				<span class="text-white"><a class="text-white" href="logout.php"> Logout</a></span>
			</div>
			<?php }else{ ?>
				<div class="logged_in_info">
				<span class="text-white"><a class="text-white" href="register.php">Register</a></span>
				|
				<span class="text-white"><a class="text-white" href="login.php">Login</a></span>
			</div>
		</div>
		<?php } ?>
		</div>
	</nav>
	<div class="container">
		<h1 class="m-5 text-center">Hot Products</h1>
		<div class="row">
			<?php foreach ($products as $product): ?>
			<div class="col-lg-4 col-sm-6 mb-4">
				<div class="card h-100">
				<a href="single_product.php?id=<?php echo $product['id']; ?>"><img style="width: 347px; height: 347px;" src="<?php echo 'uploads/' . $product['img']; ?>"></a>
					<div class="card-body">
						<h4 class="card-title">
							<h5 class="card-title"><?php echo $product['title'] ?></h5>
						</h4>
						<p class="card-text"><?php echo $product['body'] ?></p>
					</div>
					<div class="card-footer">
					<p class="card-text"><?php echo '$' .$product['price'] ?></p>
						<small class="text-muted"><span><?php echo date("F j, Y ", strtotime($product["created_at"])); ?></small>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>