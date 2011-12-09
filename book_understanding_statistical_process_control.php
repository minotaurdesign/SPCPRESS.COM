<?PHP

	$bookname = 'Understanding Statistical Process Control';
	$edition = 'Third Edition';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/USPC.jpg';
	$bookcover_small = 'book__thumbnails/thumb_uspc.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = 'toc_USPC3.pdf';
	$bookdescription = '';
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

        <p>This internationally acclaimed textbook (often called the blue book) is widely used for teaching SPC and Continual Improvement techniques to those who work in manufacturing and process industries.</p>
		<p>Wheeler and Chambers distilled over 75 years of practical experience into this book by combining instruction with real-world case studies. Written in an accessible style using ordinary language, this book is appropriate for self-study. W. Edwards Deming wrote in his foreword, "It is fitting to add my deep appreciation for the mathematical achievements of Dr. Wheeler. His understanding of theory, and its application, is guided by mathematical knowledge."</p>
		<p><strong>Some of the unique material in this landmark text includes:</strong></p>
        
        <ul>
        	<li><span>how to use process behavior charts for continual improvement</span></li>
            <li><span>the principles of rational subgrouping</span></li>
            <li><span>the right and wrong ways of computing limits</span></li>
            <li><span>why three-sigma limits work</span></li>
            <li><span>world-class quality</span></li>
            <li><span>using process behavior charts with batch processes</span></li>
            <li><span>myths regarding process behavior charts</span></li>
            <li><span>what happens with non-normal data</span></li>
            <li><span>how to use count data effectively</span></li>
            <li><span>how charts warn that the data have excessive round-off</span></li>
            <li><span>estimating the fraction of nonconforming product</span></li>
            <li><span>the fallacy of acceptance sampling</span></li>
		</ul>
        <h3>New in the Third Edition:</h3>
        <ul>
        	<li><span>better ways to interpret and use capability and performance indexes</span></li>
            <li><span>converting capabilities into effective costs of production and use</span></li>
            <li><span>the excess costs of production and use</span></li>
            <li><span>the myth of long-term capability</span></li>
            <li><span>problems with transforming your data</span></li>
            <li><span>interpreting the detection rules</span></li>
            <li><span>the nature of assignable causes and common causes</span></li>
        </ul>
        
        <ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>428 pages, 222 figures, 70 examples, 49 tables,</li>
            <li>37 exercises with answers, softcover</li>
            <!--<li>release date: June 2010</li>-->
            <li>ISBN 978-0-945320-69-2</li>
            <li>$89.00</li>
        </ul>
    </section>
  	

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
