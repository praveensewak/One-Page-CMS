<?php
session_start();

if(isset($_SESSION['ONEPAGECMS_ADMIN_ID']) && $_SESSION['ONEPAGECMS_ADMIN_ID'] !== ''){
    define('LOGGED_IN', true);
}else
    define('LOGGED_IN', false);
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
  <link rel="shortcut icon" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/style.css?v=1">
  <script src="js/libs/modernizr-1.7.min.js"></script>

</head>
<body id="onepage" class="<?php if(LOGGED_IN): ?>admin<?php endif; ?>">
    <?php include('html/admin-bar.tpl.php'); ?>
    <div id="backToTop"><a id="top">Back to Top</a></div>
    <div id="container">
    <header id="header">
        <div id="logo"><a href="/"><img src="<?php echo SITE_LOGO ?>" alt="<?php echo SITE_NAME ?>" /></a></div>
        <h1><a href="/"><?php echo SITE_NAME ?></a></h1>
    </header>
    <nav id="nav" class="clear">
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
    <div id="main" role="main" class="clear">
        <?php
            foreach($cid as $id){
                $page = new Content();
                $page->load($id['id']);
        ?>
        <section id="<?php echo sanitize($page->title,'anchor') ?>">
            <?php if(LOGGED_IN): ?>
            <div class="admin_edit_link">
                <a href="#modal_edit_page" rel="leanModal">Edit Content</a>
            </div>
            <?php endif; ?>
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
        <p>
            2005-2011 <a href="http://www.praveensewak.com" target="_blank">Praveen Sewak</a>. 
            <?php if(!LOGGED_IN): ?><a href="#modal_login" rel="leanModal">Admin</a> <?php endif; ?>
        </p>
    </footer>
    
      <?php if(!LOGGED_IN): ?>
      <div id="modal_login" class="modal_window">
          <h3>Administrator Login</h3>
          <div class="modal_content">
              <form id="form_login" class="form" action="" method="post">
                  <p>Please login below: </p>
                  <div class="row">
                      <label for="tb_username">Username: </label>
                      <input type="text" name="tb_username" id="tb_username" />
                  </div>
                  <div class="row">
                      <label for="tb_password">Password: </label>
                      <input type="password" name="tb_password" id="tb_password" />
                  </div>
                  <div class="buttons">
                      <input type="submit" name="btn_login" value="Login" />
                  </div>
              </form>
          </div>
      </div>
      <?php else: ?>
        <div id="modal_edit_page" class="modal_window width_1000">
            <h3>Edit Content</h3>
            <div class="modal_content">
                <form id="form_login" class="form" action="" method="post">
                    <p>Make sure to save the changes.</p>
                    <div class="row">
                        <label for="tb_content_title">Title: </label>
                        <input type="text" name="tb_content_title" id="tb_content_title" />
                    </div>
                    <div class="row">
                        <label for="tb_content_body">Content: </label>
                        <textarea class="editor" id="tb_content_body" name="tb_content_body"></textarea>
                    </div>
                    <div class="buttons">
                      <input type="submit" name="btn_save" value="Save Changes" />
                  </div>
                </form>
            </div>
        </div>
      <?php endif; ?>
      
  </div> <!-- eo #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
  
  <script src="js/libs/jquery.leanModal.min.js"></script>
  <script src="js/mylibs/jquery.scrollTo-1.4.2-min.js"></script>
  <script src="js/mylibs/jquery.dimensions.min.js"></script>
  
  <?php if(LOGGED_IN): ?>
  <script src="js/libs/ckeditor/ckeditor.js"></script>
  <script src="js/libs/ckeditor/adapters/jquery.js"></script>
  <?php endif; ?>

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