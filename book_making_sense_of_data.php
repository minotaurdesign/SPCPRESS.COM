<?PHP

	$bookname = 'Making Sense of Data: SPC for the Service Sector';
	$edition = '';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/making_sense.jpg';
	$bookcover_small = 'book__thumbnails/thumb_making_sense.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = 'toc_making_sense.pdf';
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
		<p>This book addresses the issues of using data analysis tools in service or administrative settings. Written in the easy, reader-friendly style of <em>Understanding Variation</em>, but with the in-depth content of <em>Understanding Statistical Process Control</em>, the book handles the questions of how to make sense of your data with great clarity. It is organized around the three basic questions of improvement:</p>
        <ul>
            <li><span>What do you want to accomplish?</span></li>
            <li><span>By what method?</span></li>
            <li><span>How will you know?</span></li>
        </ul>


        <p>With over 130 service sector examples and case histories, you will discover where to start, what to measure, how to measure it, and how to understand the measurement. In addition to teaching how to create process behavior charts, this book takes you beyond merely collecting data to provide a framework in which you can understand and use your data effectively.
This book provides the practical expertise and useful guidance that you have come to expect from Donald J. Wheeler.</p>

        <ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>408 pages, 233 figures, 130 examples, 62 data tables, 6 reference tables, 43 exercises with answers, glossary, bibliography, index, hardcover</li>
            <!--<li>release date: March 2003</li>-->
            <li>ISBN 978-0-945320-61-6</li>
            <li>$79.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
