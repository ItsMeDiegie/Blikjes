<?php 
function getPublishedproducts() {
	global $conn;
	$sql = "SELECT * FROM products WHERE published=true";
    $result = mysqli_query($conn, $sql);
    
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $products;
}

function getUnPublishedproducts() {
	global $conn;
	$sql = "SELECT * FROM products WHERE published=false";
    $result = mysqli_query($conn, $sql);
    
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $products;
}


function getproduct($slug){
	global $conn;
	$product_slug = $_GET['product-slug'];
	$sql = "SELECT * FROM products WHERE slug='$product_slug' AND published=true";
	$result = mysqli_query($conn, $sql);


	$product = mysqli_fetch_assoc($result);
	if ($product) {
		$product['topic'] = getproductTopic($product['id']);
	}
	return $product;
}