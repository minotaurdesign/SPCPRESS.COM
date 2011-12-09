<?PHP

	$bookname = 'A Japanese Control Chart';
	$authorname = 'Donald J. Wheeler';
	$bookcover_big = 'book__covers/ajjc_dvd.jpg';
	$bookcover_small = 'book__thumbnails/ajjc_dvd_thumb.jpg';
	$bookcover_width = '225';
	$bookcover_height = '287';
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

        <h4>THIS CLASSIC VIDEO NOW AVAILABLE ON DVD!</h4>
        <p>Based on the classic video from Dr. Donald J. Wheeler, this 1980s film has been enhanced and reinvented to expertly illustrate how control charts are used in the maintenance of a real life process. This new DVD has been used in Lean Six Sigma training throughout the world—in every industry and sector. The enhanced version is updated with new graphics and animations, but maintains the original learning points, including some of Dr. Wheeler's original lecture.</p>
        <p>Who is it for? It's ideal for people who understand what control charts are and how to use them, but who need to see them in action to understand how and why they work. Suitable for anyone from any level of organization, this presentation will enable you to relate control chart theory to the practice in an exciting and engaging way.</p>
        <p>What's covered? The DVD uses new animations and graphics to illustrate the power of control charts in helping monitor and respond to process behavior.</p>
        <p>The control chart is shown as a live record of the measures taken and the film illustrates how this resulted in improvements in quality—and in a process that was stable, predictable and well within the customer's specification. The 17 minute presentation takes the user into the heart of a manufacturing process at the Tokai Rika plant in Japan and shows how effective control charts are, not only in maintaining a process, but also how useful they can become for problem prevention.</p>
		<!--<h4>release date: Fall 2010</h4>-->
        <h4>Price:</h4>
        <p>$100.00</p>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
