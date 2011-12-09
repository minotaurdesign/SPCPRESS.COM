<?PHP

	$bookname = 'Confessions of a <br> Management Consultant <br>Turned CEO';
	$edition = '';
	$authorname = 'Anita Simonton and Georgeanna Kiser';
	$bookcover_big = 'book__covers/confessions_ceo.jpg';
	$bookcover_small = 'book__thumbnails/thumb_confessions_ceo.jpg';
	$bookcover_width = 225;
	$bookcover_height = 286;
	$bookdata = '';
	$bookdescription = 'This book offers invaluable and necessary skills for those who want to learn how to become more effective leaders.  But the book is not only intended for leaders.  Consultants who are helping leaders and those who are being led will also gain insight into the art of leadership. ';
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

        <p>Any leader will benefit from the reading of this book!</p>
        <p>After several years as a management consultant, the late Dr. Simonton became the CEO of a young company, giving her the opportunity to practice what she had learned from W. Edwards Deming.  How did that work?</p>
        <p>Well, of course she found out that it is easier to tell others what to do than to do it yourself!  In this book, she shares the successes and frustrations she experienced while putting her leadership philosophy to the real test—managing a company.</p>
        <p>In each chapter a leadership lesson is presented and then illustrated with a true story from her experience.  Questions for reflection and group discussion are offered.  New discoveries about the art of balancing leadership conclude each chapter, giving further clarification to the lesson.</p>
        <p>This book offers invaluable and necessary skills for those who want to learn how to become more effective leaders.  But the book is not only intended for leaders.  Consultants who are helping leaders and those who are being led will also gain insight into the art of leadership.  As Peter Scholtes puts it in his Foreword, “By the time you have finished reading you know that something significant has occurred in your mind….”</p>

		<ul id="bookdata">
            <?php 
					if($bookdata != '') {
						echo('<li><a href="book__data/'. $bookdata . '" title="Table of Contents - ' . $bookname . '">Click here for Table of Contents</a></li>');
					} 
			?>	
            <li>152 pages, softcover</li>
            <!--<li>release date: Fall 1996 </li>-->
            <li>ISBN 978-0-945320-49-4</li>
            <li>$12.00</li>
        </ul>
    </section>

    <footer class="clearfix">  
          <?php include('inc/footer.inc'); ?>   
    </footer>  
 </div> <!-- end wrap -->
  
</body>  
</html>
