<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "office@montari-reconditionari-parchet.ro";
$subject = "Mesaj de pe site";
$headers = "From: $email \r\n".
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $headers, $message) or die("Eroare!");
echo "Multumesc ca ne-ati contactat!";
echo $name.$email.$message;exit; 
?>
