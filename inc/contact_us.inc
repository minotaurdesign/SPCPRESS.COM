<? 
		//grab current url
		function curPageURL() {
		 $pageURL = 'http';
		 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 return $pageURL;
		}

		
		if(!($_POST['contact_formSent'])) {  ?>

		<form name="contact_us" action="<? echo curPageURL() ?>" method="post">
		<table>
		<tr>
		<td width="150">
		
            <input type="hidden" name="contact_formSent" value="true">
            
            <label for 'firstName'>First Name</label>
            <input name="firstName" />
            
            <label for 'lastName'>Last Name</label>
            <input name="lastName" />
            <label for 'phoneNumber'>Phone Number</label>
            <input name="phoneNumber" />
            <label for 'email'>Email</label>
            <input type="email" name="email" />
		</td>
		<td>
 			<label for 'message'>Message</label>
			<textarea name="message"></textarea>
			
			<label for 'math_captcha_answer' class="captcha">Captcha Answer</label>
            <input class="captcha" name="math_captcha_answer" placeholder="to send email, input correct answer">
			<img src="math_captcha/image.php" />
			<input class="submit" type="submit" name="Submit" value="Send Message" />
        </td>
		</tr>
		</table></form>
		
		<?  } else {

		// initialize variables for To and Subject fields
		################################################
		# send-to address is $to                       #
		################################################
		$to = "indexasp@gmail.com, spcservice@spcpress.com";
		$from = strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']); 
		$phone = strip_tags($_POST['phoneNumber']);
		$email = $_POST['email'];
		$comments = strip_tags($_POST['message']);
		$subject = $from . ' sent you email via the website\'s contact us page.';
		
		// build message body from variables received in the POST array
		
		$message = $from . ' sent you email via the website.' . "\n\n";
		$message .=  'phone number: ' . $phone . "\n\n";
		$message .=  'email address: ' . $email . "\n\n";
		
		
		$message .= 'Message:  ' . $comments . "\n\n";
		
		// add additional email headers for more user-friendly reply
		##################################################
		$additionalHeaders = "From:" . $from . "<" . $email . ">\n";
		$additionalHeaders .= "Reply-To: " . $email;
		
		//form validation
		//echo "<script>alert('form submitting now')</script>";
		if ( ($_POST['math_captcha_answer'] == $_SESSION['captcha value']) && ($_POST['email'] && $_POST['message']) )
		{
			$OK = mail($to, $subject, $message, $additionalHeaders);
			if ($OK) {
			  echo "<h1>Thanks for contacting SPC Press.  If you requested a call back or information we'll respond quickly!</h1>";
			  }
			  else {
			  echo 'sent=failed&reason='. urlencode('<p>There seems to be a problem with the server. Please try later.</p>');
			  }
		  
		 }  else {
		 
			echo "<p>This form was not properly completed. Please hit the \"back\" button and fill out the form completely. </p>";
		 
		 }
		} ?>	