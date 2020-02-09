<?php
$SendToMail = "";


	global $conn;
	$sql = "SELECT * FROM settings ORDER BY id DESC limit 1";
    $result = mysqli_query($conn, $sql);
    
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach ($products as $product):
 $SendTo = $product['ContactEmail'];
endforeach;

$SendToMail = "$SendTo";
echo $SendToMail;

if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $SendToMail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $SendToMail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	header('Location: /');
 } 

?>