<?php require_once('connect.php') ?>
<?php require_once('controllers/settings.php') ?>

<?php $userSettings = getSettingsData(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>About</title>
  </head>
  <body>  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<h3 class="navbar-brand" href="#">About</h3>
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
				<span class="text-white"><a class="text-white" href="logout.php">Logout</a></span>
			</div>
			<?php }else{ ?>
			<?php header("Location: login.php"); ?>
		</div>
		<?php } ?>
		</div>
	</nav>
	  <div class="container">
		<h3 class="m-5 text-center">About Me</h3>
		<?php foreach ($userSettings as $userSetting): ?>
                <?php echo $userSetting['AboutText'] ?>
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