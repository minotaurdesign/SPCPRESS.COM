<?PHP

	$bookname = 'Understanding Variation Instructor\'s Kit';
	$bookcover_big = 'book__covers/uv_instructors_kit.jpg';
	$bookcover_small = 'book__thumbnails/uv_instructors_kit_thumb.jpg';
	$bookcover_width = '225';
	$bookcover_height = '286';
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

        <p>Many company training leaders find this instructor's kit to be a most necessary part of their training materials. This kit is designed to help trainers create their own customized presentation of the popular book, Understanding Variation. The kit includes the following materials:

</p>
        <ul>
        	<li><span><strong>150 full-color overhead transparencies:</strong> The heart of the kit, these colorful transparencies include all examples and graphics from every chapter of the book, adding visual appeal to your presentation.</span></li>
       		<li><span><strong>Spiral-bound Instructor's Guide: </strong>Dr. Wheeler has added occasional comments that supplement the text or make suggestions about the presentation.</span></li>
       		<li><span>The wide margins on each page are provided for your personal notes. By adding your own examples and case studies, you can easily create your own customized training package.</span></li>
        	<li><span>Convenient and Durable Vinyl Carrying Case with handle.</span></li>
        </ul>


	<h4>Price:</h4> 
    <p>$350</p>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
