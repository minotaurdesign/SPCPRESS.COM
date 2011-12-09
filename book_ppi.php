<?PHP

	$bookname = 'Practical Process Improvement';
	$edition = '';
	$authorname = 'R. Edward Zunich';
	$bookcover_big = 'book__covers/ppi.jpg';
	$bookcover_small = 'book__thumbnails/thumb_ppi.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = 'toc_ppi.pdf';
	$bookdescription = 'This book presents a program for leadership in the Twenty-First Century.  The objective of Practical Process Improvement is to increase profit and organizational effectiveness by improving customer satisfaction, quality, and productivity, all while reducing costs.  ';
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
       	<p>Tired of creating tool zombies with little to show for it?  Not getting the results you expected from Six Sigma?  Try Practical Process Improvement!</p>
		<p>This book presents a program for leadership in the Twenty-First Century.  The objective of Practical Process Improvement is to increase profit and organizational effectiveness by improving customer satisfaction, quality, and productivity, all while reducing costs. It is based on three principles:</p>
        <ul>
        	<li><span>apply logical simplicity</span></li>
            <li><span>use practical methods and tools</span></li>
            <li><span>involve everyone</span></li>
        </ul>
		<p>From his years of experience as a Navy Captain and a management consultant in industry, Ed Zunich developed this powerful program that is being successfully used in organizations and corporations around the world.  </p>
		<p>This book describes the philosophy, background, principles, and practical applications of his approach. Managers and employees at all levels will find the book informative and easy to read, and the methods simple and effective. Practical Process Improvement replaces complexity with a straightforward approach that has a proven track record.</p>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	   
            <li>182 pages, softcover</li>
            <!--<li>release date: February 2005  </li>-->
            <li>ISBN 978-0-945320-65-4</li>
            <li>$25.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
