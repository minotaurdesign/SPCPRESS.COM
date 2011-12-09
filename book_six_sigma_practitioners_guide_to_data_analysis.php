<?PHP

	$bookname = 'Six Sigma Practitioner\'s Guide to Data Analysis';
	$edition = 'Second Edition';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/6sigma_gtda.jpg';
	$bookcover_small = 'book__thumbnails/thumb_6sigma_gtda.jpg';
	$bookcover_width = 225;
	$bookcover_height = 325;
	$bookdata = 'toc_GDA.pdf';
	$bookdescription = 'This book is a practical guide that will help you figure out when and where to use the many data analysis techniques taught in most Six Sigma programs. This book is completely different from traditional textbooks in statistics since it is written from the perspective of the data analyst rather than that of the mathematician.  Throughout the book the emphasis is upon how to gain the maximum insight with the least effort.';
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

        <p>All Six Sigma practitioners need this book!</p>
		<p>This book is a practical guide that will help you figure out when and where to use the many data analysis techniques taught in most Six Sigma programs. This book is completely different from traditional textbooks in statistics since it is written from the perspective of the data analyst rather than that of the mathematician.  Throughout the book the emphasis is upon how to gain the maximum insight with the least effort.</p>
		<p><strong>Unique elements of this book include the following: </strong> </p>
        <ul>
        	<li><span>analysis techniques organized by types of problems</span></li>
            <li><span>equivalence of techniques shown with real data sets</span></li>
            <li><span>the first rigorous explanation of the Six Sigma zone and why you need to operate there</span></li>
            <li><span>how to convert capabilities directly into effective costs of production and use</span></li>
		</ul>
        <p>This book clarifies the confusion surrounding statistical inference; it allows you to simplify your approach to data analysis without losing any of the interesting information contained in your data; and it provides you with more effective ways to share your analyses with others. It will also help you identify the right projects, facilitate the necessary buy-in, and communicate your results with clarity.</p>
      <p><strong>Part One presents the foundations of data analysis.</strong><br>These foundations provide a distinction between the textbook approach to statistics and the perspective needed for data analysis.  Beginning with eight axioms of data analysis, the fundamental problem of data analysis is laid out and discussed in general terms that will help the reader avoid much of the confusion that is commonly associated with statistics.</p>
        <p>A discussion of what descriptive statistics will do, and what they will not do, provides insight into the basis of all modern analysis. A brief overview of the role of process behavior charts in examining data for homogeneity shows how to address the fundamental question of data analysis. Next, an introduction to the elements of statistical inference is provided and a simplified approach to the problem of inference is presented.</p>
        <p><strong>Part Two consists of the techniques for data analysis.</strong><br> Eleven different problems are addressed. These problems are characterized by how the data were obtained and the type of response variable. Data collected under one, two, or three or more conditions are considered, along with data collected at three or more values of a single variable. Also considered are responses that consist of measurements, counts, or categories. For each of these different problems the appropriate analysis techniques are presented and illustrated. Then, summaries are given to list the advantages and disadvantages of each analysis technique.</p>
        <p><strong>Part Three provides the reader with the keys to effective data analysis.</strong><br> Here is a coherent approach to making sense of data. A systematic way of characterizing a process is presented, along with guidelines on what improvement activity is appropriate. Methodologies and tables for converting the statistical measures of performance into the Effective Costs of Production and Use are presented. Then these Effective Costs are used to choose an appropriate improvement strategy and to provide the first rigorous explanation of why you need to operate in the Six Sigma Zone.</p>
        <p>Problems commonly encountered are addressed in the book, along with pitfalls for the unwary and ways to avoid these pitfalls. Finally, two models for process improvement are presented.</p>
        <p><strong>The Second Edition </strong>contains two new sections, one revised section, and one additional chapter.  Section 1.7 covers the difference between Observational Studies and Experimental Studies. Section 3.4 was revised to better answer the question of how many data to use for limits. Section 13.7 was added to show the relationships between Capability and Performance Indexes. And Chapter 19 was added to include a discussion of the problems with the AIAG Gauge R&amp;R Study and to present an Honest R&amp;R Study.</p>
        <p>While this book won't tell you how to do Six Sigma, it will tell you how to do Six Sigma better!</p>
        
<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>424 pages, 190 figures, 44 data tables, </li>
            <li>26 reference tables, index, softcover</li>
            <!--<li>release date: October 2010 </li> -->
            <li>ISBN 978-0-945320-71-5</li>
            <li> $89.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
