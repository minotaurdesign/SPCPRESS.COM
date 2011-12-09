<?PHP

	$bookname = 'The World of W. Edwards Deming';
	$edition = '';
	$authorname = 'Cecelia S. Kilian';
	$bookcover_big = 'book__covers/world_of_deming.jpg';
	$bookcover_small = 'book__thumbnails/thumb_world_of_deming.jpg';
	$bookcover_width = 235;
	$bookcover_height = 300;
	$bookdata = '';
	$bookdescription = 'The biographical book tells the story of Dr. Deming from a personal perspective.  It tells of his early years, his education, his vitally important work with the Japanese after World War II.  It also tells the story of how he began work with American business. ';
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

        <p>Dr. W. Edwards Deming gave the world the philosophical foundation upon which the entire quality transformation was based.  But where and how did it all begin?</p>
        <p>This biographical book tells the story of Dr. Deming from a personal perspective.  It tells of his early years, his education, his vitally important work with the Japanese after World War II.  It also tells the story of how he began work with American business.  The book includes important papers, such as a proposed Code of Ethics for Statisticians, Notes on Quality Care in Medicine, and the historical Lecture to Top Managers in Japan in 1950.  Included is a bibliography of publications, all academic and honorary degrees, international activities, and musical composition.</p>
        <p>This is the only authorized biography of W. Edwards Deming.  Its author was Dr. Deming's assistant for 39 years, and she gives the best personal look at the man and his work.  If you want to know Ed Deming—the man—this is the book for you.</p>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>380 pages, Hardcover</li>
<!--			<li>release date: Fall 1992  </li>-->
			<li>ISBN 978-0-945320-29-6</li>
            <li> $20.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
