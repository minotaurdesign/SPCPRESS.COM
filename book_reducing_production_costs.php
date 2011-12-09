<?PHP

	$bookname = 'Reducing Production Costs';
	$edition = '';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/reducing_prod_costs.jpg';
	$bookcover_small = 'book__thumbnails/thumb_reducing_prod_costs.jpg';
	$bookcover_width = 225;
	$bookcover_height = 305;
	$bookdata = 'toc_RPC.pdf';
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

        <p>Everyone who is trying to do more with less needs this book!</p>
        <p>By using a proven methodology of reducing production costs, this book shows you how to evaluate paybacks so that you can pick winning improvement strategies. Unlike many programs that often rely on smoke and mirrors, this approach is built solely upon the process data—no guesswork needed. These techniques remove the guesswork and replace it with practical, easy-to-use tools that are built upon a rigorous theoretical foundation.</p>
        <p>While some of this material has been available for years, there has been no serious effort to integrate the tools into the conceptual framework that promotes their effective use. By using this book, you can join those practitioners who have had spectacular results because they were taught the conceptual framework for the techniques. Their success is proof that this methodology, used as the foundation for improvement efforts, not only works in practice, but that it works supremely well.</p>
        <h4>Read this book to:</h4>
        <ul>
        	<li><span>discover how the nature of data leads to two distinctly different approaches to improvement</span></li>
            <li><span>learn how to get the most out of existing systems using observational studies</span></li>
            <li><span>see how to quantify the excess costs of production</span></li>
            <li><span>learn how to quantify the excess costs of use</span></li>
            <li><span>discover how these excess costs are related to capability indexes</span></li>
            <li><span>learn how to use the tables to find the excess costs for:</span>
            	<ul>
                	<li><span>two-sided specifications</span></li>
            		<li><span>one-sided specifications	</span></li>
                    <li><span>target at boundary condition</span></li>
                    <li><span>when the nominal costs change with aim</span></li>
                </ul>
            </li>
            <li><span>get the formulas for the excess costs for count data</span></li>
            <li><span>find all of the computational details for the ten tables of excess costs in the summary chapter</span></li>
        </ul>


		<p>This book is intended to breathe a breath of life into the dry bones of the computations and techniques of SPC, and to take you to the point where you understand how simple and easy it is to continually and relentlessly reduce production costs, leading to a better bottom line. </p>

        <ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>290 pages, 134 figures, 97 examples, 20 reference tables, glossary, index, softcover</li>
            <!--<li>release date: August 2010  </li>-->
            <li>ISBN 978-0-945320-70-8</li>
            <li>$49.00</li>
         </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
