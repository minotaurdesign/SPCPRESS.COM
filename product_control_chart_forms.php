<?PHP

	$bookname = 'Control Chart Forms';
	$bookcover_big = 'book__covers/control_chart.jpg';
	$bookcover_small = 'book__thumbnails/thumb_control_chart.jpg';
	$bookcover_width = '';
	$bookcover_height = '';
	$bookdescription = '';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head class="html5reset-bare-bones">

	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<title>Product: <? echo($bookname); ?></title>
	<?php 
		//if book description 
		if($bookdescription != '') {
			echo('<meta name="description" content="' . $bookdescription . '">'); 
		} else {
			echo('<meta name="description" content="' . $bookname . ' - Product Description, Product Image">'); 
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
    <?php include('inc/other_products_sidebar.inc'); ?>
    
    <section class="book">  
        <header>
            <h1><? echo($bookname); ?></h1>
        </header>  
        <figure>
          <img src="<? echo($bookcover_big); ?>" alt="<? echo($bookname); ?>" title="<? echo($bookname); ?>"
			<?php 
             
			  if($bookcover_width != '') { echo('width="' . $bookcover_width . '"');} 
			  if($bookcover_height != '') { echo('height="' . $bookcover_height . '"');} 
			  
			?>>
        </figure>

        <p>There are times when an old-fashioned control chart form is the very best option. Plotting and examining the data can help you see details that could be obscured by software programs. Many practitioners like to examine their data this way before determining how they want to set up their computer programs. For 20 years, SPC Press has offered these well-designed forms with a variety of specifications.</p>
        <ul>
        	<li><span>Each form has a worksheet on the back with step-by-step instructions for making the calculations.</span></li>
            <li><span>Appropriate scaling factors are included on each form.</span></li>
            <li><span>The user determines the break between the Average Chart and the Range chart.</span></li>
            <li><span>Light green printing makes pencil and pen marks stand out.</span></li>
            <li><span>Forms come in pads of 50 sheets.</span></li>
        </ul>

        <p><strong>Form 5 60 20 is</strong> for an Average and Range Chart in portrait format.</p>
        <p class="indent">This form accommodates subgroups of size 2 to 5.</p>
        <p class="indent">The graph has 60 vertical spaces (12 lines per inch).</p>
        <p class="indent">There is room for 20 subgroups left to right.</p>
        <p><strong>Form 5 65 25</strong> is for an Average and Range Chart in landscape format.</p>
        <p class="indent">This form accommodates subgroups of size 2 to 5.</p>
        <p class="indent">The graph has 65 vertical spaces (16 lines per inch).</p>
        <p class="indent">There is room for 25 subgroups left to right.</p>
        <p><strong>Form 1 80 25</strong> is for an Individual Values Chart in landscape format.</p>
        <p class="indent">This form is for plotting single values as they occur.</p>
        <p class="indent">The graph has 80 vertical spaces (16 lines per inch).</p>
        <p class="indent">There is room for 25 points left to right.</p>

	<h4>Price of Standard Forms:</h4> 
    <p>$10.00 per pad, $175.00 for 20 pads</p>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
