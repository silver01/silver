<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >


<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->Html->charset(); ?>
	<title>
		Silveraid
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('normalize','foundation','cake'));
		echo $this->Html->script(array('modernizr','jquery.js','foundation.min'));
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		    cabeçalho
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			rodape
		</div>
	</div>
	
</body>
</html>
