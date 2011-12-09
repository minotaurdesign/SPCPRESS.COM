<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>jQuery Ajax Forms | Trevor Davis</title>
<link href="screen.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

<div id="container">
<?php include('verify.php'); ?>
	<form action="/play/jqueryAjaxForm/" method="post" id="sendEmail">
    <label for="firstName">First Name</label><input type="text" name="firstName" id="firstName" value="<?= $_POST['firstName']; ?>" /><?php if(isset($firstNameError)) echo '<span class="error">'.$firstNameError.'</span>'; ?>
        <label for="lastName">Last Name</label><input type="text" name="lastName" id="lastName" value="<?= $_POST['lastName']; ?>" /><?php if(isset($lastNameError)) echo '<span class="error">'.$lastNameError.'</span>'; ?>
    
<label for="emailFrom">From</label><input type="text" name="emailFrom" id="emailFrom" value="<?= $_POST['emailFrom']; ?>" /><?php if(isset($emailFromError)) echo '<span class="error">'.$emailFromError.'</span>'; ?>
			<label for="message">Message</label><textarea name="message" id="message"><?= $_POST['message']; ?></textarea><?php if(isset($messageError)) echo '<span class="error">'.$messageError.'</span>'; ?>
			<button type="submit" id="submit">Send Email &raquo;</button><input type="hidden" name="submitted" id="submitted" value="true" />
	</form>
	<div class="clearing"></div>
</div>

</body>
</html>
