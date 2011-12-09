<?PHP
	$seminarname = 'The Evaluating the Measurement Process Workshop';
	$seminardescription = 'While most measurement system studies are set up to condemn measurement processes, this workshop shows you how to get the most from the measurement process that you have in place; how to get it to operate to its fullest potential.';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head class="html5reset-bare-bones">

	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<title>Seminar: <? echo($seminarname); ?></title>
	<?php 
		//if book description 
		if($seminardescription != '') {
			echo('<meta name="description" content="' . $seminardescription . '">'); 
		} else {
			echo('<meta name="description" content="' . $seminarname . ' - Seminar Description, Seminar dates, Seminar Location">'); 
		}
     ?>
	
    
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


<body>  
<div id="wrap">
    <header id="brand">
        <a href="http://www.spcpress.com"><h1 id="logo"><span>SPC Press - Publisher</span></h1></a>
    </header> 

    
    <!-- main nav inserts here -->
    <?php include('inc/mainnav.inc'); ?> 

    
    <!-- sidebar inserts here -->
    <?php include('inc/seminar_sidebar.inc'); ?>
    
    <section class="seminar">  
        <header>
            <h1>Donald J. Wheeler's Seminars and Workshops</h1>
            <h3><? echo($seminarname); ?></h3>
        </header>  

        <p>This one-day workshop has been one of our most popular classes since the mid 1980s. Now revised and based on the new book, <em>EMP III: Evaluating the Measurement Process and Using Imperfect Data</em>, it is even better!</p>
      <p>While most measurement system studies are set up to condemn measurement processes, this workshop shows you how to get the most from the measurement process that you have in place; how to get it to operate to its fullest potential. Over the years, thousands of workshop participants have discovered the profound difference that comes from using the right approach to measurement system analysis.</p>
        <p>In this new workshop you will learn about the hazards of needless recalibration and how to know when recalibration is actually needed. You will also learn how to use average and range charts to understand the measurement process, to characterize it, and to communicate this understanding to others. Dr. Wheeler takes you far beyond the confusion of meaningless percentages and teaches you how to quantify how good your measurements actually are.</p>
        <p>This workshop is intended for technicians, engineers, and all those involved in collecting or using physical measurements of any kind.</p>

      <h4>Topics include:</h4>
        <ul>
            <li><span>using process behavior charts for calibration, consistency, and precision</span></li>
            <li><span>assessing the consistency of a measurement system</span></li>
            <li><span>the effective resolution of a measurement</span></li>
            <li><span>the uses of the probable error</span></li>
            <li><span>the usefulness of a measurement for characterizing a given product</span></li>
            <li><span>characterizing the relative utility of a measurement</span></li>
            <li><span>what the four classes of process monitors mean in practice</span></li>
            <li><span>the problems with gauge R&amp;R studies</span></li>
            <li><span>how to perform an honest gauge R&amp;R study</span></li>
            <li><span>the effect of round-off on measurements</span></li>
            <li><span>identifying and removing operator effects</span></li>
            <li><span>identifying and removing instrument-to-instrument differences</span></li>
            <li><span>comparing different measurement systems</span></li>
            <li><span>round robin studies</span></li>
      </ul>
		<p>This workshop is incorporated into the Understanding SPC seminar and the Practical Data Analysis seminar, and uses the textbook:</p>
		<p><em><a href="book_emp3.php">EMP III: Evaluating the Measurement Process & Using Imperfect Data</a></em></p>
  </section>
  	

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
          
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
