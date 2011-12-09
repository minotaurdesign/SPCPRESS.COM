<!DOCTYPE html>
<html lang="en" class="no-js">
<head class="html5reset-bare-bones">

	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<title>SPC Press</title>
	
	<meta name="description" content="SPC Press offers you today’s best books on Statistical Process Control, Six Sigma, Data Analysis, and Quality Improvement.  Statistical Process Controls offers you today’s best training in Data Analysis Techniques, taught by the internationally recognized expert…Dr. Donald J. Wheeler. ">
    
    <meta name="author" content="Richard Lee" />
	<meta name="copyright" content="Copyright SPC Press 2011. All Rights Reserved." />

	<link rel="stylesheet" href="_/css/main5.css">
	<link rel="stylesheet" href="_/css/_print/main.css" media="print">
	
	<!--[if IE]>
	<link rel="stylesheet" href="_/css/_patches/win-ie-all.css">
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" href="_/css/_patches/win-ie7.css">
	<![endif]-->
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="_/css/_patches/win-ie-old.css">
	<![endif]-->

	<!-- MODERNIZR: http://www.modernizr.com/ -->
	<script src="_/js/modernizr-1.7.min.js"></script>
</head>


<body id="home">  
<div id="wrap">
    <header id="brand">
        <a href="http://www.spcpress.com"><h1 id="logo"><span>SPC Press - Publisher</span></h1></a>
    </header> 

    <!-- main nav inserts here -->
    <?php include('inc/mainnav.inc'); ?> 

    
    <!-- sidebar inserts here -->
    <?php include('inc/homepage_sidebar.inc'); ?>
    

  	<section>
        <header>
          <h1>Speak with us:</h1>
      </header>
      	<p>Call us between 9 am and 4 pm Eastern time, Monday through Friday, and we will be glad to talk with you. At other times, you can leave a phone message and we will return your call the following business day. Or you can contact us here on the website by filling out the form below, or email us at <a href="mailto:spcservice@spcpress.com">spcservice@spcpress.com</a>.  Either way, we like hearing from you!</p>
 	 </section>
    <section class='contact_form'>
        <header>
            		<h1>Contact us! </h1>
        </header>
       
       <? 
		if(!($_POST['contact_formSent'])) {  ?>

		<p>Complete the form and we'll be in touch as soon as possible. </p>
		<form name="contact_us" action="contact_us_fw.php" method="post">
            <input type="hidden" name="contact_formSent" value="true">
            
            <label for 'firstName'>First Name</label>
            <input name="firstName" autofocus />
            
            <label for 'lastName'>Last Name</label>
            <input name="lastName" />
            <label for 'phoneNumber'>Phone Number</label>
            <input name="phoneNumber" />
            <label for 'email'>Email</label>
            <input type="email" name="email" />
 			<label for 'message'>Message</label>
			<textarea name="message" rows="10"></textarea>
            <img src="math_captcha/image.php" /><br>
            <label for 'math_captcha_answer'>Captcha Answer</label>
            <input name="math_captcha_answer" placeholder="to send your email, enter your answer here for the math problem above">
            
			<input type="submit" name="Submit" value="Send Message" />
		</form>
        
		
		<?  } else {

		// initialize variables for To and Subject fields
		################################################
		# send-to address is $to                       #
		################################################
		$to = "indexasp@gmail.com" . ', '; 
		$to .= 'spcservice@spcpress.com';
		$from = strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']);
		$phone = strip_tags($_POST['phoneNumber']);
		$email = strip_tags($_POST['email']);
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
		//if ( ($_POST['math_captcha_answer'] == $_SESSION['captcha value']) && ($_POST['email'] && $_POST['message']) )
		if  ($_POST['email'] && $_POST['message']) 
		{
			// bypass human check
			$OK = mail($to, $subject, $message, $additionalHeaders);
			if ($OK) {
			  echo "<p>Thanks for contacting SPC Press.  If you requested a call back or information we'll respond quickly!</p>";
			  }
			  else {
			  echo 'sent=failed&reason='. urlencode('<p>There seems to be a problem with the server. Please try later.</p>');
			  }
		  
		 }  else {
		 
			echo "<p>This form was not properly completed. Please hit the \"back\" button and fill out the form completely. </p>";
		 
		 }
		} ?>	
       
  </section>  

    <footer class="clearfix" id="contact_us">  
        <section id="copyright">
            <address>Copyright&copy; 2011 SPC Press, Inc.</address>
        </section>
        <section id="designed_by">
            <h1>Site Design by:</h1>
            <a href="http://www.minotaurdesign.com" title="Site created by Minotaur Design" target="_blank"><h3>Minotaur Design</h3></a>
            <p>
            	
        </section>
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
