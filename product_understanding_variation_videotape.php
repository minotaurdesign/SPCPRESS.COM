<?PHP

	$bookname = 'Understanding Variation: The Videotape';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/uv_video.jpg';
	$bookcover_small = 'book__thumbnails/uv_video_thumb.jpg';
	$bookcover_width = '225';
	$bookcover_height = '325';
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
			echo('<meta name="description" content="' . $bookname . ' - by ' . $authorname . ' - Product Description, Product Image">'); 
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
            <h3>by <? echo($authorname); ?></h3>
        </header>  
        <figure>
          <img src="<? echo($bookcover_big); ?>" alt="<? echo($bookname); ?>" title="<? echo($bookname); ?>"
			<?php 
              if($bookcover_width != '') { echo('width="' . $bookcover_width . '"');} 
			  if($bookcover_height != '') { echo('height="' . $bookcover_height . '"');} 
			?>>
        </figure>

        <p>When the International Institute for Learning featured Dr. Wheeler in a satellite broadcast of the landmark presentation, people at more than 700 sites participated. Now you can bring this widely acclaimed presentation to your organization.</p>
        <p>Your performance, and that of your organization, hinges on accurately understanding and using data. This presentation focuses on variation...how it impacts your data and how to determine exactly what your data is telling you. With this understanding you can use your data to make effective decisions.</p>
        <p>This program was designed for managers, but it is also extremely effective for all personnel who make decisions in your organization. Specific recommendations for action are presented, and you will learn how to use techniques that will provide valuable insight into your business processes.</p>
        <p>The video includes Dr. Wheeler's title presentation, a short talk by Dr. Wheeler on the construction of process behavior charts, and Dr. Genichi Taguchi's short presentation on the Taguchi Quadratic Loss Function (subtitled for ease of understanding).</p>
		<p>The tape runs 75 minutes.</p>

        <h4>Price:</h4>
        <p>$495.00</p>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
