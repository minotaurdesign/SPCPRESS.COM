<?PHP

	$bookname = 'The Deming Dimension';
	$edition = '';
	$authorname = 'Henry R. Neave';
	$bookcover_big = 'book__covers/deming_dim.jpg';
	$bookcover_small = 'book__thumbnails/thumb_deming_dim.jpg';
	$bookcover_width = 225;
	$bookcover_height = 325;
	$bookdata = 'toc_demdim.pdf';
	$bookdescription = 'This classic is the definitive book written about Dr. W. Edwards Deming and his important work. ';
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

        <p>This classic is the definitive book written about Dr. W. Edwards Deming and his important work. The author and Dr. Deming were friends and colleagues who worked together for many years.  Dr. Neave has ably communicated both the principles developed by Dr. Deming and the philosophy behind those principles.</p>
        <p>It begins with a first-rate historical perspective, going on to clearly explain the basic tenets of the "Deming philosophy"—which shows both what needs to be done and what needs to be undone—and why.  </p>
        <p>Dr. Deming's most up-to-date ideas on themes such as Joy in Work, Innovation (not just improvement), Cooperation…Win-Win, and Optimization of Systems are clarified.  Also included was Deming's latest work on the System of Profound Knowledge, the system of thinking that provides the foundation for his work.</p>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>440 pages, softcover  </li>
            <li>ISBN 978-0-945320-36-4</li>
            <li> $20.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
