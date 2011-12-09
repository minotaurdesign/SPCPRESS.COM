<?PHP

	$bookname = 'The Process Evaluation Handbook';
	$edition = '';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/peh.jpg';
	$bookcover_small = 'book__thumbnails/thumb_peh.jpg';
	$bookcover_width = 225;
	$bookcover_height = 325;
	$bookdata = '';
	$bookdescription = 'This book teaches you how to turn capability indexes into profits. It is about process evaluation—where you have been, where you can go, and what you can accomplish by going there.';
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

        <p>This book teaches you how to turn capability indexes into profits. It is about process evaluation—where you have been, where you can go, and what you can accomplish by going there. This assessment is done using the language of management—the actual Dollar Savings that can be realized from a given course of action. These process evaluation techniques enable you to estimate the payback from each different approach to improvement—before you undertake any course of action. This allows you to focus on those projects having the largest payback potential with the least effort expended. Be among the first to turn your Continual Improvement efforts into actual dollars saved for your organization. This book shows you how to do it. </p>
		<p>The tables in this book combine both the Excess Costs of Production and the Excess Costs of Use into a single value.  The successor to this book, Reducing Production Costs, allows for these two excess costs to be separated. </p>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>262 pages, 48 figures, 36 reference tables, softcover</li>
            <!--<li>release date: February 2000  </li>-->
            <li>ISBN 978-0-945320-55-5</li>
            <li> $35.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
