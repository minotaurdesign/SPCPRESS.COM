<?PHP

	$bookname = 'Real People Real Work';
	$edition = '';
	$authorname = 'Lee Cheany and Maury Cotter';
	$bookcover_big = 'book__covers/real_people.jpg';
	$bookcover_small = 'book__thumbnails/thumb_real_people.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = '';
	$bookdescription = 'These 25 parables about everyday people, human interactions, and the nature of responsibility and creativity are packed full of lessons about leadership and the effect that each of us has upon those with whom we work.  The people in these stories will capture your heart.  The stories will stimulate your imagination, moving you to action.';
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

        <p>These 25 parables about everyday people, human interactions, and the nature of responsibility and creativity are packed full of lessons about leadership and the effect that each of us has upon those with whom we work.  The people in these stories will capture your heart.  The stories will stimulate your imagination, moving you to action.</p>
        <ul>
        	<li><span>learn about Sara...doing the wrong stuff right</span></li>
            <li><span>find out why a statistician might make the best soccer coach</span></li>
            <li><span>learn how it's possible to work hard and still fall behind</span></li>
            <li><span>see what a meat inspector and a professor have in common</span></li>
            <li><span>discover a child's knowledge of teamwork</span></li>
        </ul>
        <h4>Readers say:</h4>
        <cite>“I loved it!”</cite>
        <cite>“I don’t know if the book is a primer or an advanced text. It may be both.”</cite>
        <cite>“The world would be a better place if more people would read this book.”</cite>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	   
            <li>178 pages, softcover</li>
            <!--<li>release date: Fall 1991  </li>-->
            <li>ISBN 978-0-945320-11-1 </li>
            <li>$10.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
