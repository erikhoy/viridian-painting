<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Viridian Painting');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title; ?>
	</title>
	
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	
	<?php //echo $this->Html->meta('description', $description); ?>
	<meta name="viewport" content="width=device-width, intitial-scale=1 maximum-scale=1">
	<meta name="keywords" content="Denver, Colorado, House Painting, Painters, Assemblers, Assembling, Aurora, Commerce City, Littleton">
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<?php
		echo $this->Html->meta('favicon.ico', '/img/favicon.ico', array('type' => 'icon'));
		echo $this->fetch('meta');
	?>
	<?php
		
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('main_test');
		echo $this->Html->css('jquery.timepicker');
		echo $this->fetch('css');
	?>
	<link href="https://fonts.googleapis.com/css?family=Satisfy|Federo" rel="stylesheet">
	<!--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<?php 
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('jquery.timepicker.min');
		echo $this->fetch('script');
	?>
	
	<!-- Bootstrap -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	
    <script>
		$( function() { $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }); } );
		</script>
		<script>
		$( function() { $( ".timepicker" ).timepicker({'minTime':'8:00am', 'maxTime':'9:00pm', 'step':'60', 'timeFormat':'H:i A'}); } );
	</script>
	<script>
		$(document).ready(function(){
    $('.other-cost').change(function(){
        if(this.checked)
            $('.costs').fadeIn('slow');
        else
            $('.costs').fadeOut('slow');

    });
});
  	</script>
	<script>
  		$( function() {
    		$( ".accordion" ).accordion({ collapsible: true, heightStyle: "content" });
    		$( ".tabs" ).tabs();

  		} );
  	</script>
  	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89267801-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>
	<div id="container">
		<div id="header">
			<?php 
				if (AuthComponent::user('role') === 'admin') {
            		$nav = 'admin';
            		if (AuthComponent::user('id') == 12) {
            			$nav = 'test';
            		}
            		$el = $nav.'_nav';
            		echo $this->element($el);
            	} else {
            		echo $this->element('nav');
            	}
        	?>
		</div>
		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
