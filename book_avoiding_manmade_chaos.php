<?PHP

	$bookname = 'Avoiding Man-Made Chaos';
	$edition = '';
	$authorname = 'Donald J. Wheeler and Myron Tribus';
	$bookcover_big = 'book__covers/ammc.jpg';
	$bookcover_small = 'book__thumbnails/thumb_ammc.jpg';
	$bookcover_width = 225;
	$bookcover_height = 325;
	$bookdata = '';
	$bookdescription = 'This collection of four papers presents the basic elements of Continual Improvement.   ';
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

        <p>This collection of four papers presents the basic elements of Continual Improvement.  </p>
        <p><strong>The Germ Theory of Management</strong> by Myron Tribus is a powerful description of the scope and nature of the transition from traditional ways of doing business.</p>  
        <p><strong>Avoiding Man-Made Chaos</strong> continues this theme, contrasting traditional methods of interpreting data with the use of process behavior charts. Additional sections on avoiding the chaos of mathematical complexity and inappropriate terminology are included.  </p>
        <p><strong>Myths and Foundations </strong>outlines four common misconceptions about process behavior charts and four requirements for their effective use. </p>
        <p><strong>Charts Done Right</strong> outlines the difference between the right and wrong ways of computing limits for the two most common types of process behavior charts.  </p>


        
<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>68 pages, softcover</li>
            <!--<li>release date: Summer 1998</li>-->
			<li>ISBN 978-0-945320-54-8</li>
            <li> $14.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
