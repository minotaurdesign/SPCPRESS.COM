<?PHP

	$bookname = 'Twenty Things You Need to Know';
	$edition = '';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/twenty_things.jpg';
	$bookcover_small = 'book__thumbnails/thumb_twenty_things.jpg';
	$bookcover_width = 225;
	$bookcover_height = 322;
	$bookdata = 'toc_things.pdf';
	$bookdescription = 'This book provides brief answers to many of the commonly occurring questions that arise when people begin to use process behavior charts.';
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

        <p>An alternate title for this book might have been "Lessons Learned from a Lifetime of Data Analysis." Drawing on 40 years of study, practice, instruction, and consultation, this book provides brief answers to many of the commonly occurring questions that arise when people begin to use process behavior charts. While the first chapter recaps some material from <em>Understanding Variation</em>, the rest of the chapters complete the message of that book. In every case the objective was to enable you to better and more easily use process behavior charts to get the most out of your processes and operations.</p>
	  <p>Since not all sources of information about SPC are equally reliable, some of the chapters are, of necessity, focused on mistakes and misinformation that are currently in circulation. In the interest of completeness, these chapters also include enough of the background material to justify the answers given. In addition, citations are given for those who wish to delve more deeply into any particular topic.</p>

        <ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>158 pages, 58 figures, 13 data tables, <br>6 reference tables, bibliography, index, softcover</li>
            <!--<li>release date: August 2008  </li>-->
            <li>ISBN 978-0-945320-68-5</li>
            <li>$39.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
