<?PHP

	$bookname = 'Tables of Screening Designs';
	$edition = 'Second Edition';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/TSD.jpg';
	$bookcover_small = 'book__thumbnails/thumb_TSD.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = 'toc_TSD.pdf';
	$bookdescription = 'This book of tables is the most complete reference for Plackett-Burman Screening Designs available. ';
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

        <p>This book of tables is the most complete reference for Plackett-Burman Screening Designs available. In addition to the basic Orthogonal Arrays, it provides data collection worksheets to facilitate conducting experiments and computation worksheets to facilitate the analysis of data. Tables of Confounding Patterns help with the interpretation of the results, making it easier to discover whether significant effects are due to interactions rather than main effects.  </p>
        <h4>Included are:</h4>

        <ul>
        	<li><span>over 200 designs indexed and laid out for easy use.</span></li>
            <li><span>over 80 designs for combining factors with two levels with factors having more than two levels</span></li>
            <li><span>data collection worksheets for 177 designs</span></li>
            <li><span>review of basic calculations</span></li>
            <li><span>tables showing confounding patterns for 145 designs</span></li>
            <li><span>examples for all two level Plackett-Burman designs</span></li>
		</ul>
        
        
<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>305 pages, softcover</li>
            <!--<li>release date: Winter 1989  </li>-->
            <li>ISBN 978-0-945320-05-0</li>
            <li>$45.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
