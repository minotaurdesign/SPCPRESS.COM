<?PHP

	$bookname = 'Out of the Crisis';
	$edition = '';
	$authorname = 'W. Edwards Deming';
	$bookcover_big = 'book__covers/out_of_the_crisis.jpg';
	$bookcover_small = 'book__thumbnails/thumb_out_of_the_crisis.jpg';
	$bookcover_width = 225;
	$bookcover_height = 347;
	$bookdata = '';
	$bookdescription = 'This book is the definitive work by W. Edwards Deming–often regarded as the "American Prophet of Quality" and the "Father of the Third Wave of the Industrial Revolution." In this book he explains, with numerous examples, his view of how American management has functioned in the past and what changes must be made in order to ensure success in the future.';
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
        <p class="clearfix">This book is the definitive work by W. Edwards Deming–often regarded as the "American Prophet of Quality" and the "Father of the Third Wave of the Industrial Revolution." In this book he explains, with numerous examples, his view of how American management has functioned in the past and what changes must be made in order to ensure success in the future. Deming shows managers of every level how they can improve quality and productivity, thereby regaining world-class competitive position through the use of his well-known "14 Points for Management."</p>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	   
            <li>517 pages, softcover</li>
            <!--<li>release date: 1986  </li>-->
            <li>ISBN 978-0-262-54115-2</li>
            <li>$34.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
