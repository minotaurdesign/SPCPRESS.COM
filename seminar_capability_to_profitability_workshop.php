<?PHP
	$seminarname = 'The Reducing Production Costs Workshop';
	$seminardescription = 'This powerful presenation is based upon the popular book, <em>Understanding Variation... The Key to Managing Chaos</em>';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head class="html5reset-bare-bones">

	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<title> <? echo($seminarname); ?></title>
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

        <p>This one-day workshop teaches how to choose the most effective strategies for reducing production costs. Using the Effective Cost of Production and Use, you learn how to reduce excess costs, increase the profitability of operations, and document the dollars saved.</p>
        <p>It begins with a comprehensive treatment of the questions surrounding process capability. Then, based on the average costs-of-use, capabilities are converted into Effective Costs of Production and Use. By evaluating these values for different scenarios you can determine potential savings for different improvement strategies, which will allow you to choose the improvement strategy with the greatest potential savings.</p>
      <p>This workshop is intended for those dealing with capability issues in a production setting and those who are charged with improving processes and systems. It should be an integral part of every Six Sigma initiative.</p>
      <h4>Topics include:</h4>
        <ul>
            <li><span>conformance versus lean production</span></li>
            <li><span>predicting the future for a process</span></li>
            <li><span>predictable and unpredictable processes</span></li>
            <li><span>capability for predictable processes</span></li>
            <li><span>converting capability indexes into fraction nonconforming</span></li>
            <li><span>capability for unpredictable processes</span></li>
            <li><span>performance indexes</span></li>
            <li><span>hypothetical capability for an unpredictable process</span></li>
            <li><span>what capability indexes do and don't do</span></li>
            <li><span>capability for count data</span></li>
            <li><span>the costs of using conforming product</span></li>
            <li><span>the average cost-of-use concept</span></li>
            <li><span>the Effective Cost of Production and Use</span></li>
            <li><span>characterizing past performance</span></li>
            <li><span>the savings from operating on-target</span></li>
            <li><span>the saving from operating predictably</span></li>
            <li><span>the savings from operating both predictably and on-target</span></li>
            <li><span>the savings from process reengineering</span></li>
            <li><span>working with one-sided specifications</span></li>
          <li><span>working with targets at boundaries</span></li>
      </ul>

        <p>This workshop uses <em><a href="book_reducing_production_costs.php" title="Reducing Production Costs`">Reducing Production Costs</a></em> as its textbook.</p>
  </section>
  	

<footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
          
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
