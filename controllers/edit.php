<?php 


    $post_id = $_GET['id'];
    
    function getProductByID() {
        global $conn;
        $post_id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id='$post_id'";
        $result = mysqli_query($conn, $sql);
        
        $productById = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
        return $productById;
    }
    

if (isset($_POST['update'])) {
 if(isset($_FILES['image'])){
    //   $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 5097152){
         $errors[]='File size must be excately 5 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../uploads/".$file_name);
      }else{
         print_r($errors);
      }
   }

$product_id = $_POST['id'];
$title = mysqli_real_escape_string($conn, $_POST['title']);
$body = mysqli_real_escape_string($conn, $_POST['body']);
$old_file = $_POST['OldImg'];
$file_name = $_FILES['image']['name'];
$price = mysqli_real_escape_string($conn, $_POST['price']);
$published = isset($_POST['publish']);

if(empty($file_name)) {
   $sql = "UPDATE products SET title = '$title', body = '$body', img = '$old_file', price = '$price', published = '$published' WHERE id='$product_id'";
} else {
   $sql = "UPDATE products SET title = '$title', body = '$body', img = '$file_name', price = '$price', published = '$published' WHERE id='$product_id'";
}
 
if(mysqli_query($conn, $sql)){
    header("Location: dashboard.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
mysqli_close($conn);
}
?>