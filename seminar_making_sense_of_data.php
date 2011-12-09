<?PHP
	$seminarname = 'The Making Sense of Data Seminar';
	$seminardescription = 'This seminar is intended for anyone who needs to learn how to use Data Analysis and SPC techniques in service or administrative areas.';
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
        <p>The three basic questions of improvement are:</p>
        <ul style="margin-top: 0; margin-bottom:0; padding-top:0; padding-bottom: 0;">
            <li><span>What do you want to accomplish?</span></li>
            <li><span>By what method?</span></li>
            <li><span>How will you know?</span></li>
        </ul>
        <p>These questions provide a framework for discovery through data analysis, and they are the organizing principle for this seminar.  The answers to these questions allow you to combine the various tools and techniques of data analysis into an effective and coherent approach—vital for any SPC, Six Sigma, or improvement effort of any kind.</p>
        <p>Examples are drawn from all types of service and administrative areas, including healthcare, food service, accounting, banking, insurance, retail, distribution and sales, transportation, telemarketing, and telecommunications. These examples illustrate how to utilize survey data, safety data, and all types of management data.</p>
        <p>This seminar is intended for anyone who needs to learn how to use Data Analysis and SPC techniques in service or administrative areas. The "Understanding Variation" workshop is also incorporated in this seminar.</p>
        <p>While this is a basic seminar, it is also comprehensive. It not only covers the material included in most introductory classes, but it also goes into the issues of effectively using these techniques. Unlike many courses and books that present a bewildering array of different techniques, this course presents a unified approach that has a proven track record in all types of organizations.</p>
        
      <h4>Topics include:</h4>
        <ul>
            <li><span>a framework for using data effectively</span></li>
            <li><span>flowcharts (process maps), block diagrams, and deployment flowcharts</span></li>
            <li><span>brainstorming</span></li>
            <li><span>cause-and-effect diagrams</span></li>
            <li><span>bar-charts, Pareto charts, histograms, and running records</span></li>
            <li><span>data collection</span></li>
            <li><span>using process behavior charts for data analysis</span></li>
            <li><span>charts for count data</span></li>
            <li><span>charts for trended data</span></li>
            <li><span>working with seasonal data</span></li>
            <li><span>using the tools interactively to achieve continual improvement</span></li>
        </ul>
		
		<h4>Books include:</h4>
        <ul class="seminar_books">
        	<li><span><a href="book_making_sense_of_data.php" title="Making Sense of Data">Making Sense of Data</a></span></li>
			<li><span><a href="book_understanding_variation.php" title="Understanding Variation">Understanding Variation</a></span></li>
        </ul>
    </section>
  	
    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
          
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
