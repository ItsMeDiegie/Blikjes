<?php 
    session_start();
    
    $conn = mysqli_connect("localhost", "diegogarcia_nl_shop", "HpiTZUqDnmYE", "diegogarcia_nl_shop");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
    }
?>