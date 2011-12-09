<?PHP

	$bookname = 'Deming\'s Road to Continual Improvement';
	$edition = '';
	$authorname = 'William W. Scherkenbach';
	$bookcover_big = 'book__covers/road_to_cont_improv.jpg';
	$bookcover_small = 'book__thumbnails/thumb_road_to_cont_improv.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = '';
	$bookdescription = 'Continual Improvement requires much more than "right" techniques!  It was an entirely new way of thinking…a philosophy of Profound Knowledge…as defined by W. Edwards Deming.  That philosophy is the inspiration and guide for this book.. ';
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

        <p>Continual Improvement requires much more than "right" techniques!  It is an entirely new way of thinking…a philosophy of Profound Knowledge…as defined by W. Edwards Deming.  That philosophy is the inspiration and guide for this book.</p>
        <p>You will be challenged by ideas that are the proven foundation for increased quality, increased productivity, and improved competitive position.  They are being used by large numbers of leading business people in many different cultures and in every type of business.</p>
        <p>Understanding Profound Knowledge involves a revolution in thought.  Operationalizing Profound Knowledge requires an evolution of practice.  Both of these requirements are addressed in this unique book.  Based upon Scherkenbach's years of study under the tutelage of Dr. Deming, and his work at both Ford and General Motors, this book provides a clear review of concepts, but also goes a step further—it shows how these concepts can be put to work in your business.</p>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>360 pages, Hardcover</li>	
            <!--<li>release date: Summer 1991  </li>	-->
            <li>ISBN 978-0-945320-10-4</li>
            <li> $20.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
