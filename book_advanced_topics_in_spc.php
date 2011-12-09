<?PHP

	$bookname = 'Advanced Topics in Statistical Process Control';
	$edition = 'Second Edition';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/ATSPC.jpg';
	$bookcover_small = 'book__thumbnails/thumb_ATSPC.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = 'toc_ATSPC.pdf';
	$bookdescription = 'This book is the most comprehensive source book on statistical process control since Shewhart’s original. It is the definitive book, containing a wealth of information found nowhere else. Unlike books which only add layers of complication onto the subject, this book provides a clear and comprehensive explanation of the underlying theory of process behavior charts.';
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

        <p>This book is the most comprehensive source book on statistical process control since Shewhart’s original. It is the definitive book, containing a wealth of information found nowhere else. Unlike books which only add layers of complication onto the subject, this book provides a clear and comprehensive explanation of the underlying theory of process behavior charts.</p>
		<h4>Topics include:</h4>

        <ul>
        	<li><span>the quality of limits for process behavior charts</span></li>
            <li><span>autocorrelated data and process behavior charts</span></li>
            <li><span>degrees of freedom for process behavior charts</span></li>
            <li><span>process behavior charts and chaos theory</span></li>
            <li><span>Cusum and EWMA techniques</span></li>
            <li><span>the role of the normal distribution</span></li>
            <li><span>the role of the central limit theorem</span></li>
            <li><span>precontrol and zone charts</span></li>
            <li><span>the analysis of means</span></li>
            <li><span>how to set manufacturing specifications</span></li>
            <li><span>using small amounts of data for limits</span></li>
            <li><span>the Shewhart catechism</span></li>
            <li><span>some differences between theory and practice</span></li>
        </ul>

        <ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>484 pages, 234 figures, 134 examples, <br>51 reference tables, index, hardcover</li>
            <!--<li>release date: March 2004  </li>-->
            <li>ISBN 978-0-945320-63-0</li>
            <li>$79.00</li>
         </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
