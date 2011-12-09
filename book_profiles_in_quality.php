<?PHP

	$bookname = 'Profiles in Quality';
	$edition = '';
	$authorname = 'Louis E. Schultz';
	$bookcover_big = 'book__covers/profiles_in_quality.jpg';
	$bookcover_small = 'book__thumbnails/thumb_profiles_in_quality.jpg';
	$bookcover_width = 226;
	$bookcover_height = 340;
	$bookdata = '';
	$bookdescription = 'This book traces the history and development of the Quality movement by focusing on its early authorities and by comparing, contrasting, and placing their theories in a modern context.  The author\'s "Rings of Management" shows how the various philosophies can be synthesized into a strong unified effort.';
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
        <p>This book traces the history and development of the Quality movement by focusing on its early authorities and by comparing, contrasting, and placing their theories in a modern context.  The author's "Rings of Management" shows how the various philosophies can be synthesized into a strong unified effort.</p>
        <p>These short biographies tell the story of people who helped make quality happen. They reveal how the concepts of quality were products of their time, as well as how they have evolved. For that reason it is a good reference book.  Subjects for the biographies include Shewhart, Deming, Juran, Sarasohn, Ishikawa, Taguchi, Kano, and others.</p>
        <p>This book was out of print for several years, but has been reprinted due to customer demand.</p>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	   
            <li>        268 pages, softcover</li>
        	<!--<li>release date:  1994  </li>-->
       	 	<li>ISBN 978-0-873890-66-1 </li>
            <li>$35.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
