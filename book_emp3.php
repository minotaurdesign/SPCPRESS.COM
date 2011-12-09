<?PHP

	$bookname = 'EMP III: Evaluating the Measurement Process <br>&amp; Using Imperfect Data';
	$edition = '';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/emp3_UID.jpg';
	$bookcover_small = 'book__thumbnails/thumb_emp3_UID.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = 'toc_emp3.pdf';
	$bookdescription = '';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head class="html5reset-bare-bones">

	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<title>Book: <? echo($bookname . ' - by ' . $authorname); ?></title>
	<?php 
		//if book description 
		if($bookdescription != '') {
			echo('<meta name="description" content="' . $bookdescription . '">'); 
		} else {
			echo('<meta name="description" content="' . $bookname . ' - by ' . $authorname . ' - Book Description, Cover Image, ISBN and Release date">'); 
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
    <?php include('inc/books_sidebar.inc'); ?>
    
    <section class="book">  
        <header>
            <h1><? echo($bookname); ?></h1>
            <?php 
				//if edition
				if($edition != '') {
					echo('<h2>' . $edition . '</h2>');
				}
			?>
            <h4>by <? echo($authorname); ?></h4>
        </header>  
        <figure>
          <img src="<? echo($bookcover_big); ?>" alt="<? echo($bookname); ?>" title="<? echo($bookname); ?>"
			<?php 
              if($bookcover_width != '') { echo('width="' . $bookcover_width . '"');} 
			  if($bookcover_height != '') { echo('height="' . $bookcover_height . '"');} 
			?>>
        </figure>
		<h4></h4>
        <p>EMP III is much more than a new edition of the old green book—it is a completely new treatment of the classic procedures in the first two EMP editions. It also goes beyond those procedures to include the explanations of why the procedures work. Additionally, it includes a new way of characterizing measurement systems and provides illustrations of problems with the traditional techniques.</p>
        <h4>Part One: Characterizing the Measurement Process </h4>
        <p>After listing 20 of the most frequently asked questions regarding a measurement process, Part One contains a greatly expanded treatment of the topics of measurement consistency, measurement precision, and the bias of a measurement system. Absolute characterizations of the quality of a measurement system are developed and explained, and the role of a consistency chart is described.</p>
        <h4>Part Two: Evaluating the Measurement Process </h4>
        <p>Short EMP Studies are presented as a way of characterizing the relative utility of a measurement system for a given application. Basic EMP Studies let you characterize the measurement process and also consider the effects of a potential nuisance component of measurement error. Two-Factor EMP Studies let you consider the effects of two potential nuisance components of measurement error.</p>
        <h4>Part Three: Using Imperfect Data </h4>
        <p>Here we consider the effects of chunky data upon a control chart; how to use censored data to construct meaningful process behavior charts; the problem of how to characterize the product that was not measured; and the problem of how to predict what a process will produce.</p>
        <h4>Part Four: Explanations </h4>
        <p>Here we have the supporting material behind some of the groundbreaking results presented in the earlier chapters. The answer to the age-old question of how many digits to record is answered as we learn why the Probable Error defines the optimum size for the measurement increment. We learn how to establish manufacturing specifications. We see the underpinnings that lead to characterizing every measurement as either a First, Second, Third, or Fourth Class Monitor. We discover the origins of the problems with the AIAG gauge R&amp;R study and see how to perform an Honest R&amp;R Study.</p>

        <ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>316 pages, 175 figures, 64 examples, 40 data tables, 8 appendices, 25 reference tables, 3 worksheets, index, hardcover</li>
        	<!--<li>release date: March 2006  </li>-->
        	<li>ISBN 978-0-945320-67-8</li>
        	<li>$69.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
