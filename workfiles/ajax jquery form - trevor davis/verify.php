<?php
if(isset($_POST['submitted'])) {
	if($_POST['firstName'] == '') {
		$firstNameError = 'You forgot to enter your first name.';
	}
	if($_POST['lastName'] == '') {
		$lastNameError = 'You forgot to enter your last name.';
	}
	if($_POST['emailFrom'] == '') {
		$emailFromError = 'You forgot to enter your email address.';
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $_POST['emailFrom'])) {
		$emailFromError = 'Please enter a valid email address..';
	}
	
	if($_POST['message'] == '') {
		$messageError = 'You forgot to enter the message.';
	}

	if(!isset($emailToError) && !isset($emailFromError) && !isset($subjectError) && !isset($messageError)) {
		include('sendEmail.php');
		include('thanks.php');
	}
}

?>