<?PHP
	$seminarname = 'The Practical Data Analysis Seminar';
	$seminardescription = 'This powerful presenation is based upon the popular book, Understanding Variation... The Key to Managing Chaos';
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

        <p>Are you tired of the traditional classes in statistics? Here is a seminar taught from the perspective of data analysis!</p>
        <p>This four-day seminar is for engineers, technicians, and six sigma practitioners on every level. It provides a coherent, integrated approach to using the statistical techniques for data analysis in business and industry, combining the techniques covered in traditional engineering statistics courses with the process improvement techniques of SPC. It also incorporates the EMP workshop.</p>
        <p>The seminar considers the specific situations you encounter in your day-to-day work and lists the techniques that are appropriate for each. Within each situation, the techniques are arranged in order, beginning with the more general and easy-to-use tools and progressing to the more sophisticated and narrowly focused procedures. This kind of organization provides each student with a range of appropriate techniques to use in each and every situation.</p>
        <p>The result of this unique organization is that complete mastery of each step is not required in order to make progress. This makes the class suitable for both beginners and experienced users, with material that is useful for both groups. Moreover, by emphasizing when and how to use the techniques, this course complements any statistical software package you may be using. However, it does not require that you have any such software in order to perform meaningful and appropriate analyses.</p>
        <p>In addition to the survey of statistical techniques, you will also learn how to use the economic justification for taking action—the Effective Cost of Production and Use. By using this in a coherent, organized program of process improvement you can choose the right projects and the right improvement strategies. When combined with the knowledge of which techniques to use, this approach to process improvement makes you highly effective in analyzing and using data.</p>

      <h4>Topics include:</h4>
        <ul>
            <li><span>the difference between statistics and data analysis</span></li>
            <li><span>what descriptive statistics do and their limitations</span></li>
            <li><span>how to answer the fundamental question of data analysis</span></li>
            <li><span>the difference between statistics and parameters</span></li>
            <li><span>data collected under one, two, or three or more conditions</span></li>
            <li><span>data collected at three or more values for X</span></li>
            <li><span>count-based data</span></li>
            <li><span>capability and performance indexes</span></li>
            <li><span>using the Effective Cost of Production and Use</span></li>
            <li><span>the Six Sigma Zone</span></li>
            <li><span>effective process improvement</span></li>
            <li><span>how to do an honest Gauge R&R Study</span></li>
        </ul>
		<h4>Books include:</h4>
        
        <ul class="seminar_books">
        	<li><span><a href="book_six_sigma_practitioners_guide_to_data_analysis.php" title="The Six Sigma Practitioner's Guide to Data Analysis">The Six Sigma Practitioner's Guide to Data Analysis</a></span></li>
          <li><span><a href="book_reducing_production_costs.php" title="Reducing Production Costs">Reducing Production Costs</a></span></li>
          <li><span><a href="book_emp3.php" title="EMP III: Evaluating the Measurement Process">EMP III: Evaluating the Measurement Process</a></span></li>
      </ul>

    </section>
  	

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
          
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
