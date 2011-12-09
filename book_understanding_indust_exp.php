<?PHP

	$bookname = 'Understanding Industrial Experimentation';
	$edition = 'Second Edition';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/UIE.jpg';
	$bookcover_small = 'book__thumbnails/thumb_UIE.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = 'toc_UIE.pdf';
	$bookdescription = 'Here is a reader-friendly guide to the techniques needed for successful experiments.  It begins with basic concepts and proceeds in a cumulative manner through the specialized techniques needed for effective application.  While avoiding needless complexity, the concepts and techniques are clearly explained, allowing the reader to immediately use the tools to obtain understandable, useful, and easily communicated results. ';
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

        <p>Here is a reader-friendly guide to the techniques needed for successful experiments.  It begins with basic concepts and proceeds in a cumulative manner through the specialized techniques needed for effective application.  While avoiding needless complexity, the concepts and techniques are clearly explained, allowing the reader to immediately use the tools to obtain understandable, useful, and easily communicated results. </p>
        <h4>Topics include:</h4>

        <ul>
        	<li><span>working with variation</span></li>
            <li><span>the analysis of means</span></li>
            <li><span>the concept of analysis of variance</span></li>
            <li><span>making specific comparisons using contrasts</span></li>
            <li><span>interaction effects and orthogonal arrays</span></li>
            <li><span>getting more out of plackett-burman designs</span></li>
            <li><span>response plots and anom plots with screening designs</span></li>
            <li><span>quadratic loss function</span></li>
            <li><span>simple ways of minimizing the average loss</span></li>
            <li><span>Taguchi’s contributions</span></li>
		</ul>
        
        
<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>379 pages, 60 figures, 120 examples and exercises, softcover</li>
            <!--<li>release date: Fall 1990  </li>-->
            <li>ISBN 978-0-945320-09-8</li>
            <li>$55.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
