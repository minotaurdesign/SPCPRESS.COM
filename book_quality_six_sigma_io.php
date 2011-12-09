<?PHP

	$bookname = 'Quality &amp; Six Sigma from the Inside Out';
	$edition = '';
	$authorname = 'Lisa McNary';
	$bookcover_big = 'book__covers/inside_out.jpg';
	$bookcover_small = 'book__thumbnails/thumb_inside_out.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = '';
	$bookdescription = 'This may be the first book to provide a management theory that forms a foundation for an integrated implementation of Quality Management and Six Sigma. As such, it is a must read for organizations with Quality Management or Six Sigma programs, whether newly implemented or firmly established.';
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

        <p>This thought-provoking story illustrates what ought to occur in organizational changes. But reality rarely follows theory, especially when organizational culture gets in the way. Research suggests the majority of change programs are quickly tweaked beyond recognition, and many are abandoned within two years. The primary reason? Purely cultural. </p>
        <p>As this fictional company tries to solve a complex problem with hastily applied Quality Management and Six Sigma tools, the effects of organizational culture and politics get in the way. As you read about “TPT, Inc.” going from one worse case scenario to another, you are likely to find something that resonates with your own experience. The blunders of even well-intentioned managers can wreak havoc, and those with private agendas can turn any organization into the workplace from hell! </p>
        <p>This may be the first book to provide a management theory that forms a foundation for an integrated implementation of Quality Management and Six Sigma. As such, it is a must read for organizations with Quality Management or Six Sigma programs, whether newly implemented or firmly established.</p>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	   
            <li>192 pages, softcover,</li>
        	<!--<li>release date: September 2004</li>  -->
        	<li>ISBN 978-0-945320-64-7 </li>
            <li> $22.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
