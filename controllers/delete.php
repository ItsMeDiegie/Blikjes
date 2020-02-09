<?php
    $post_id = $_GET['id'];

    if (isset($_POST['delete'])) {
        global $conn;
        $product_id = $_POST['id'];
        $sql = "DELETE FROM products WHERE id=$product_id";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = "Post successfully deleted";
            header("location: dashboard.php");
            exit(0);
        }
    }
?>