<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mailTo = 'indexasp@gmail.com';
$mailFrom = $_POST['emailFrom'];
$subject = 'Email from ' . $firstName . ' ' . $lastName;
$message = $_POST['message'];

			
mail($mailTo, $subject, $message, "From: ".$mailFrom);
?>