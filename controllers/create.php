<?php 

$errors = array(); 

if (isset($_POST['create'])) {
 if(isset($_FILES['image'])){
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_extension = explode('.', $file_name);
      $file_ext = end($file_extension);
      // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         array_push($errors, "extension not allowed, please use a JPEG or PNG file.");
      }
      
      if($file_size > 5097152){
        array_push($errors, "File size must be excately 5 MB");
      }

   }
   if (count($errors) == 0) {

      move_uploaded_file($file_tmp,"../uploads/".$file_name);

   $title = mysqli_real_escape_string($conn, $_POST['title']);
   $body = mysqli_real_escape_string($conn, $_POST['body']);
   $file_name = $_FILES['image']['name'];
   $price = mysqli_real_escape_string($conn, $_POST['price']);
   $published = isset($_POST['publish']);
   
   $sql = "INSERT INTO products (title, body, img, price, published) VALUES ('$title', '$body', '$file_name', '$price', '$published')";
   if(mysqli_query($conn, $sql)){
      header("Location: dashboard.php");
   } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }
   }
   mysqli_close($conn);
   }
   ?>