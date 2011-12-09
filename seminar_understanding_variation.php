<?PHP
	$seminarname = 'The Understanding Variation Workshop';
	$seminardescription = 'This powerful presentation is based upon the popular book, Understanding Variation... The Key to Managing Chaos';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head class="html5reset-bare-bones">

	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<title><? echo($seminarname); ?></title>
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

        <p>This powerful presentation is based upon the popular book, <em>Understanding Variation…The Key to Managing Chaos</em>. Using typical management report data, the presentation shows you a better way to understand and use your own data. In company after company this workshop has been credited with being a turning point…the beginning of data-based management. This workshop is intended for executives and managers throughout the organization. For some it will be the starting point of further studies. For others it will become the catalyst that changes the way they make decisions and interpret data.</p>
      <h4>Topics include:</h4>
        <ul>
            <li><span>the comparison of values and the problem of variation</span></li>
            <li><span>the principles for understanding data</span></li>
            <li><span>the specification approach to interpreting data</span></li>
            <li><span>the average value approach to interpreting data</span></li>
            <li><span>the process behavior chart approach</span></li>
            <li><span>the two mistakes of data analysis</span></li>
            <li><span>using data to gain insight into your processes</span></li>
            <li><span>comparisons between the approaches</span></li>
            <li><span>learning from your data</span></li>
            <li><span>the problem of fixing the wrong things</span></li>
            <li><span>a more effective way to understand your data</span></li>
        </ul>
		<p>This half-day workshop can be extended into a full-day workshop with the incorporation of selected topics from <em>Twenty Things You Need to Know</em>.</p>
        <h4>Participants Say:</h4>
		<cite>“I can’t begin to describe the profound effect your workshop had on us! Everyone took back information that was immediately beneficial. We will never again be able to look at data in the same old way!”</cite>
        <cite>"Don Wheeler teaches profoundly important, practical ideas with great clarity and force, and without intellectual embroidery."</cite>
        <cite>"I can’t begin to describe the profound effect your presentation had on us!"</cite>
        <cite>"This seminar removed all the gobbledy-gook that I’d heard from others, leaving me with a clear set of tools that I can really apply to my job!"</cite>

		<h4>Books include:</h4>
        <ul class="seminar_books">
        	<li><span><a href="book_understanding_variation.php">Understanding Variation...The Key to Managing Chaos</a></span></li>
        	<li><span><a href="book_twenty_things.php">Twenty Things You Need to Know</a></span></li>
      </ul>

    </section>
  	

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
          
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
