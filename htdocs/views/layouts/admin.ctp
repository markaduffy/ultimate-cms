<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Ultimate CMS:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array(
			'/bootstrap/css/bootstrap.min',
			'admin'
		));
		echo $javascript->link(array(
			'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js',
			'/bootstrap/js/bootstrap.min',
			'tinymce/tiny_mce',
			'init_admin'
		));
		echo $scripts_for_layout;
	?>
</head>
<body>

	<div class="container">
		<div class="row">
            <div class="span12">
            	<div id="header">
					<h1>ponddigital - CMS</h1>
					<?php echo $this->element('admin_nav') ?>
				</div>
            </div>
        </div>
        <div class="row">
            <div class="span12">
            	<div id="header">
					<?php echo $this->Session->flash(); ?>
					<?php echo $content_for_layout; ?>
				</div>
            </div>
        </div>
	</div>
	
</body>
</html>