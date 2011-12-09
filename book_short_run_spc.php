<?PHP

	$bookname = 'Short Run SPC';
	$edition = '';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/short_run.jpg';
	$bookcover_small = 'book__thumbnails/thumb_short_run.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = '';
	$bookdescription = 'In this book you will learn how process behavior charts can be used effectively with limited amounts of data..';
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

        <p>In this book you will learn how process behavior charts can be used effectively with limited amounts of data.</p>
		<p><strong>Part One</strong> shows how to track a process while making different products:</p>

        <ul>
        	<li><span>difference charts</span></li>
            <li><span>charts for mean ranges</span></li>
            <li><span>zed charts</span></li>
            <li><span>the role of moving range charts</span></li>
            <li><span>difference charts for subgrouped data</span></li>
            <li><span>standardized charts for subgrouped data</span></li>
            <li><span>recommendations</span></li>
		</ul>
		<p><strong>Part Two</strong> discusses topics related to setting the process aim:</p>
        <ul>
        	<li><span>the difference between aim and consistency</span></li>
            <li><span>setting the process aim using a sequence of values</span></li>
            <li><span>setting the process aim using difference charts</span></li>
            <li><span>setting the process aim using multiple measurements</span></li>
            <li><span>world class quality</span></li>
		</ul>
        
        
<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>72 pages, appendix, glossary, softcover</li>
            <!--<li>release date: Fall 1991  </li>-->
            <li>ISBN 978-0-945320-12-8</li>
            <li>$20.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
