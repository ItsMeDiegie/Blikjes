<?php require_once('../connect.php') ?>
<?php require_once('../controllers/settings.php') ?>

<?php $userSettings = getSettingsData(); ?>

<?php if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
	} else {
	header("Location: ../login.php");
	} ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Settings</title>
  </head>
  <body>  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<h3 class="navbar-brand" href="#">Settings</h3>
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
				<span class="text-white"><a class="text-white" href="/">Webshop</a></span>
				|
				<span class="text-white"><a class="text-white" href="../logout.php">Logout</a></span>
			</div>
			<?php }else{ ?>
			<?php header("Location: ../login.php"); ?>
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
		<a class="btn mt-3" href="dashboard.php">Overview</a>
		</li>
        <li>
        <li>
		<a class="btn mt-3" href="create_product.php">Create Product</a>
		</li>
		<li>
		<a class="btn mt-3" href="unpublished.php">Unpublished Products</a>
		</li>
		<li>
		<a class="btn mt-3" href="edit.php">Settings</a>
		</li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
	  <div class="container">
		<h3 class="m-5 text-center">Settings</h3>
		<?php foreach ($userSettings as $userSetting): ?>
		<form action="usersettings.php" method="post">
                <input type="email" name="mailadress" class="form-control" value="<?php echo $userSetting['ContactEmail'] ?>" placeholder="E-mail">
                <label for="mailadress"></label>
                <textarea type="text" rows="20" cols="250" name="body" value="<?php echo $userSetting['AboutText'] ?>" class="form-control" placeholder="About Me"><?php echo $userSetting['AboutText'] ?></textarea>
                <label for="username"></label>
                <!-- <?php include('includes/errors.php') ?> -->
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="saveSettings" type="submit">Sign Up</button>
              <hr class="my-4">
            </form>
			<?php endforeach ?>
		</div>
	</div>
  </main>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>