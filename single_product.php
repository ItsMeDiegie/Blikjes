<?php  include('connect.php'); ?>
<?php  include('controllers/edit.php'); ?>


<?php $products = getProductByID(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/single.css">

    <title>Edit</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<h2 class="text-white">DEMO SHOP</h2>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
			aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mx-auto">
			</ul>
			<?php if (isset($_SESSION['user']['username'])) { ?>
			<div class="logged_in_info">
				<span>Welcome <?php echo $_SESSION['user']['username'] ?></span>
				|
				<span><a href="logout.php">Logout</a></span>
			</div>
			<?php }else{ ?>
			<a href="register.php" class="btn nav-link text-white">Register</a>
			<a href="login.php" class="btn nav-link text-white">Login</a>
		</div>
		<?php } ?>
		</div>
	</nav>

  <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky vh-100">
        <ul class="nav flex-column">
		<li>
		<a class="btn mt-3" href="/">Homepage</a>
		</li>
        </ul>
      </div>
    </nav>
    
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 h-100 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <?php foreach ($products as $product): ?>
                <h2 class="text-center"><?php echo $product['title'] ?></h2>
              <img style="width: 347px; height: 347px;" class="center mt-5" src="<?php echo 'uploads/' . $product['img']; ?>">
              <h5 class="text-center mt-5"><?php echo $product['body'] ?></h5>
              <h3 class="text-right mt-5">$<?php echo $product['price'] ?></h3>
              <hr class="my-4">
              <?php endforeach ?>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>