<?php

?>

<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo SITE_NAME ?></title>
  <meta name="description" content="">
  <meta name="author" content="<?php echo AUTHOR_NAME ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/style.css?v=1">
  <script src="js/libs/modernizr-1.7.min.js"></script>

</head>
<body id="onepage">
  <div id="backToTop"><a id="top">Back to Top</a></div>
  <div id="container">
    <header id="header">
    	<h1><a href="/"><?php echo SITE_NAME ?></a></h1>
        <nav id="nav">
            <ul>
            	<?php
                    foreach($cid as $id){
                        $page = new Content();
                        $page->load($id['id']);
                ?>
                <li><a href="#<?php echo sanitize($page->title, 'anchor') ?>"><?php echo $page->title ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <div id="main" role="main" class="clear">
        <?php
            foreach($cid as $id){
                $page = new Content();
                $page->load($id['id']);
        ?>
        <section id="<?php echo sanitize($page->title,'anchor') ?>">
            <h2><?php echo $page->title ?></h2>
            <?php echo $page->body ?>
        </section>
        <?php } ?>
    </div>
    <footer id="footer" class="clear">
    	<address id="about">
        	<span class="primary">
            	<strong><a href="/" class="url">Praveen Sewak</a></strong>
                <span class="role">Untitled Design Studio</span>
            </span>
            
            <span class="bio">Some BIO information here.</span>
        </address>
        <p>2005-2011 <a href="http://www.praveensewak.com" target="_blank">Praveen Sewak</a>.</p>
    </footer>
  </div> <!-- eo #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
  
  <script src="js/mylibs/jquery.scrollTo-1.4.2-min.js"></script>
  <script src="js/mylibs/jquery.dimensions.min.js"></script>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->


<?php if(!GOOGLE_ANALYTICS == ''): ?>
  <script>
    var _gaq=[["_setAccount","UA-<?php print GOOGLE_ANALYTICS ?>"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID 
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>
<?php endif; ?>
</body>
</html>