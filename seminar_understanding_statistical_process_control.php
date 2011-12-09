<?PHP
	$seminarname = 'The Understanding Statistical Process Control Seminar';
	$seminardescription = 'This seminar is intended for all those who need to learn to use SPC and Data Analysis techniques in production, manufacturing, or process industries. ';
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

        <p>This seminar is intended for all those who need to learn to use SPC and Data Analysis techniques in production, manufacturing, or process industries. For those involved with a Six Sigma initiative, this course provides the material that is essential for a successful program, but which is not included in most Six Sigma training. The "Understanding Variation" workshop is also incorporated in this seminar.</p>
        <p>You will learn how to discover the useful information in your data—one participant characterized it as "learning to listen to what your data is telling you"—and then use your discoveries in an effective, coherent program of Continual Improvement.</p>
        <p>While this is a basic seminar, it is also comprehensive. While it covers all the material included in most introductory classes, it also teaches you how to effectively use the techniques. This course demonstrates how others have used the techniques successfully, and it will provide you with a road map for your own success.</p>

      <h4>Topics include:</h4>
        <ul>
            <li><span>four possibilities for any process</span></li>
            <li><span>different types of process behavior charts</span></li>
            <li><span>the uses of process behavior charts</span></li>
            <li><span>the logic behind the charts</span></li>
            <li><span>the origin of the scaling factors for the charts</span></li>
            <li><span>the empirical rule and the robustness of the charts</span></li>
            <li><span>right and wrong ways of computing limits</span></li>
            <li><span>myths and foundations concerning the charts</span></li>
            <li><span>rational sampling and rational subgrouping</span></li>
            <li><span>detection rules for the charts</span></li>
            <li><span>capability, predictability, and world-class quality</span></li>
            <li><span>turning capabilities into costs of production</span></li>
            <li><span>the problem of chunky data</span></li>
            <li><span>using count data effectively</span></li>
        </ul>
		<p>You will leave this class with a comprehensive set of reference materials and the ability to use them effectively.</p>

		<h4>Books include:</h4>
        <ul class="seminar_books">
        	<li><span><a href="book_understanding_statistical_process_control.php" title="Understanding Statistical Process Control, Third Edition">Understanding Statistical Process Control, Third Edition</a></span></li>
          <li><span><a href="book_understanding_variation.php" title="Understanding Variation">Understanding Variation</a></span></li>
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
