<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>
  <body>
  	<ul>
  		<li><?php echo link_to('Garages', 'garage/index'); ?></li>
  		<li><?php echo link_to('Marques', 'marque/index'); ?></li>
  		<li><?php echo link_to('Modeles', 'modele/index'); ?></li>
		<li><?php echo link_to('Employes', 'employe/index'); ?></li>
  	</ul>
    <?php echo $sf_content ?>
  </body>
</html>
