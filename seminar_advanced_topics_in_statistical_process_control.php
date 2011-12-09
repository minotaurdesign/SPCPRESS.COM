<?PHP
	$seminarname = 'The Understanding SPC Seminar';
	$seminardescription = 'This seminar is intended for all those who need to learn to use SPC and Data Analysis techniques in production, manufacturing, or process industries.';
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

        <p>In this seminar you will learn why the tools and techniques of SPC work the way they do. This will free you from popular misconceptions and lay a sound foundation by providing clear explanations of the underlying theory. As a result, you will learn how to use process behavior charts more effectively.</p>
		<p>The emphasis in this course is upon the "whys and wherefores" of SPC, rather than the "how-tos." Those with a practical working knowledge of SPC or those with an extensive background in statistics will benefit most from this course.</p>
      <h4>Topics include:</h4>
        <ul>
            <li><span>evaluating the measurement process</span></li>
            <li><span>degrees of freedom for process behavior charts</span></li>
            <li><span>different methods for estimating dispersion</span></li>
            <li><span>process behavior charts and chaos theory</span></li>
            <li><span>autocorrelated data and process behavior charts</span></li>
            <li><span>cumulative sum techniques</span></li>
            <li><span>the role of the central limit theorem</span></li>
            <li><span>precontrol and zone charts</span></li>
            <li><span>normality and the process behavior chart</span></li>
            <li><span>power functions for process behavior charts</span></li>
            <li><span>origins of scaling factors for process behavior charts</span></li>
            <li><span>21 different types of process behavior charts</span></li>
            <li><span>the theory behind charts for count data</span></li>
            <li><span>short run techniques</span></li>
            <li><span>difference charts and standardized charts</span></li>
            <li><span>differences between theory and practice</span></li>
            <li><span>using measurements to characterize product</span></li>
            <li><span>EWMA charts</span></li>
            <li><span>different detection rules</span></li>
        </ul>

		<h4>Books include:</h4>
        <ul class="seminar_books">
          <li><span><a href="book_advanced_topics_in_spc.php" title="Advanced Topics in Statistical Process Control">Advanced Topics in Statistical Process Control</a></span></li>
          <li><span><a href="book_emp3.php" title="EMP III: Evaluating the Measurement Process">EMP III: Evaluating the Measurement Process</a></span></li>
          <li><span><a href="book_normality_and_process.php" title="Normality and the Process Behavior Chart">Normality and the Process Behavior Chart</a></span></li>
          <li><span><a href="book_short_run_spc.php" title="Short Run SPC">Short Run SPC</a></span></li>
      </ul>

    </section>
  	

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
          
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
