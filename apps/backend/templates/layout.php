<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
	  <div class="header">
		  <h1>Beacon</h1>
	  </div>
	  <div class="container">
		<?php echo $sf_content ?>
		  <div class="clear_all"></div>
	  </div>
	  <div class="footer">
		  <span><?php echo link_to('Conferences', 'conference/index'); ?> | <?php echo link_to('Log Out', '@sf_guard_signout'); ?> | <?php echo link_to('View Public Site', sfConfig::get('app_frontend_url')); ?></span>
	  </div>
  </body>
</html>
