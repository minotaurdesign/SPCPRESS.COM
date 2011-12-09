<?PHP
	$seminarname = 'The Successful Experimentation Seminar';
	$seminardescription = 'This highly acclaimed seminar is built upon a unique approach to designed experiments. Rather than getting bogged down in mathematical theory, this course will help you develop a working knowledge of how to collect and analyze experimental data. ';
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

        <p>This highly acclaimed seminar is built upon a unique approach to designed experiments. Rather than getting bogged down in mathematical theory, this course will help you develop a working knowledge of how to collect and analyze experimental data. Throughout the course, the focus is on obtaining results that are understandable, usable, and capable of being clearly communicated to others. To this end, the calculations are deliberately kept simple and comprehensible.</p>
        <p>This course is designed for engineers, technicians, scientists, and those who need to obtain and interpret experimental results. The unique approach used in this seminar has proven to be suitable for both beginners and experts.</p>
        <p>For over 20 years, in company after company, this class has been identified as the beginning of a successful program of experimentation. No matter how many other classes in designed experimentation you may have previously had, you will gain additional skills and knowledge from this one.</p>
        <p>If you are part of a Six Sigma program you cannot afford to miss this seminar. Brown Belts, Black Belts, and Master Black Belts tell us they learn far more in this class than is included in traditional classes in experimental design.</p>

      <h4>Topics include:</h4>
        <ul>
            <li><span>the analysis of means</span></li>
            <li><span>the one-way analysis of variance</span></li>
            <li><span>Tukey's post-hoc test</span></li>
            <li><span>using contrasts to make comparisons</span></li>
            <li><span>orthogonal sets of contrasts</span></li>
            <li><span>single degree-of-freedom analysis of variance</span></li>
            <li><span>multifactor analysis of variance</span></li>
            <li><span>analysis of variance for subgroups of size one</span></li>
            <li><span>scree plots and normal probability plots</span></li>
            <li><span>the analysis of messy data</span></li>
            <li><span>fractional factorial designs</span></li>
            <li><span>Plackett-Burman screening designs</span></li>
            <li><span>minimizing variation while getting on target</span></li>
            <li><span>Taguchi's approach to industrial experimentation</span></li>
        </ul>
		<p>This seminar is a structured workshop that uses exercises to constantly reinforce the concepts and techniques.</p>
		<h4>Books include:</h4>
        <ul class="seminar_books">
        	<li><span><a href="book_understanding_indust_exp.php" title="Understanding Industrial Experimentation">Understanding Industrial Experimentation</a></span></li>
          <li><span><a href="book_tables_of_screening_designs.php" title="Tables of Screening Designs">Tables of Screening Designs</a></span></li>
          <li><span><a href="book_range_based_analysis.php" title="Range Based Analysis of Means">Range Based Analysis of Means</a></span></li>
      </ul>

    </section>
  	

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
          
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
