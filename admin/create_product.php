<?php  include('../connect.php'); ?>
<?php  include('../controllers/create.php'); ?>

<?php if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
	} else {
	header("Location: login.php");
	} ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/auth.css">

    <title>Create</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Create Product</h5>
            <form action="create_product.php" method="post" enctype="multipart/form-data">
            <div class="form-label-group">
                <input type="text" name="title" class="form-control" placeholder="Title" required autofocus>
                <label for="title"></label>
              </div>
              <div class="form-label-group">
                <textarea type="text" rows="4" cols="50" name="body" class="form-control" placeholder="Product Description" required></textarea>
              </div>
              <input type="file" class="mb-3" name="image" />
              <div class="form-label-group">
                <input type="number" name="price" class="form-control" placeholder="Price" required>
                <label for="price"></label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" name="publish" value="1">
                <label for="publish">Publish</label>
              </div>
              <?php include('../includes/errors.php') ?>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="create" type="submit">Create</button>
              <hr class="my-4">
            </form>
          </div>
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