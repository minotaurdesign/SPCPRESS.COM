<?PHP

	$bookname = 'Normality and the Process Behavior Chart';
	$edition = '';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/norm.jpg';
	$bookcover_small = 'book__thumbnails/thumb_norm.jpg';
	$bookcover_width = 225;
	$bookcover_height = 325;
	$bookdata = 'toc_normal.pdf';
	$bookdescription = 'This book provides the first careful and complete examination of the relationship between the normal distribution and the process behavior chart. It clears up much of the confusion surrounding this subject, and it can help you overcome the superstitions that have hampered the effective use of process behavior charts. ';
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
            <h3>by <? echo($authorname); ?></h3>
        </header>  
        <figure>
          <img src="<? echo($bookcover_big); ?>" alt="<? echo($bookname); ?>" title="<? echo($bookname); ?>"
			<?php 
              if($bookcover_width != '') { echo('width="' . $bookcover_width . '"');} 
			  if($bookcover_height != '') { echo('height="' . $bookcover_height . '"');} 
			?>>
        </figure>

        <p>Having a normally shaped histogram is not a prerequisite for placing your data on a process behavior chart.  Neither is it inevitable that a predictable process will display a 				mound shaped histogram.</p>
		<p>This book provides the first careful and complete examination of the relationship between the normal distribution and the process behavior chart. It clears up much of the confusion surrounding this subject, and it can help you overcome the superstitions that have hampered the effective use of process behavior charts.</p>
		<h4>Topics include:</h4>

        <ul>
        	<li><span>the history of the normal distribution and early attempts to use it to analyze data</span></li>
            <li><span>the shortcomings of goodness-of-fit tests</span></li>
            <li><span>how to really compute parts-per-million defect rates</span></li>
            <li><span>the fundamental difference between theory and practice</span></li>
            <li><span>the relationship between R&D and SPC</span></li>
            <li><span>the linkage between the normal distribution and basic constants in chart formulas</span></li>
            <li><span>how non-normal distributions affect these basic constants</span></li>
            <li><span>how three-sigma limits work with over 1100 different probability models</span></li>
            <li><span>the shortcomings of average run lengths as a tool for sensitivity analysis</span></li>
        </ul>

        <ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>156 pages, 54 figures, 13 examples, <br>31 tables,  softcover</li>
            <!--<li>release date: March 2000  </li>-->
            <li>ISBN 978-0-945320-56-2</li>
            <li> $20.00</li>
         </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
