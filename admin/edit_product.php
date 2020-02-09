<?php  include('../connect.php'); ?>
<?php  include('../controllers/edit.php'); ?>


<?php $products = getProductByID(); ?>

<?php if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
	} else {
	header("Location: /shop/login.php");
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

    <title>Edit</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <?php foreach ($products as $product): ?>
            <h5 class="card-title text-center">Edit <?php echo $product['title'] ?></h5>
            <form action="edit_product.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $post_id; ?>">
            <div class="form-label-group">
                <input type="text" name="title" class="form-control" value="<?php echo $product['title'] ?>" placeholder="Title" required autofocus>
                <label for="title"></label>
              </div>
              <div class="form-label-group">
                <textarea type="text" rows="4" cols="50" name="body" class="form-control" placeholder="Product Description" required><?php echo $product['body'] ?></textarea>
              </div>
              <div class="form-label-group">
                <input type="text" name="OldImg" class="form-control" value="<?php echo $product['img'] ?>" readonly>
                <label for="OldImg"></label>
              </div>
              <input type="file" class="mb-3" name="image" accept=".jpg,.jpeg,.png" blank=True/>
              <div class="form-label-group">
                <input type="number" name="price" value="<?php echo $product['price'] ?>" class="form-control" placeholder="Price" required>
                <label for="price"></label>
              </div>
              <?php if ($product['published'] == 1){ ?>
                <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" name="publish" value="1" checked>
                <label for="publish">Publish</label>
                </div>
              <?php } else { ?>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" name="publish" value="1">
                <label for="publish">Publish</label>
                </div>
            <?php } ?>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="update" type="submit">Update</button>
              <hr class="my-4">
              <?php endforeach ?>
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