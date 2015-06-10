<?php
	$home = '/SITES/niklassletteland.com/new/';
	//$home = '/';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="author" content="Niklas Sletteland"/>
	<link rel="shortcut icon" href="<?php echo($home); ?>/favicon.ico" />
	
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<script>window.jQuery || document.write('<script src="<?php echo($home); ?>js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$( '#fade_wrapper' ).fadeIn(850);		
		});	
	</script>
	
	<style type="text/css">
		#fade_wrapper {
			display:none;	
		}
	</style>		
	
	<link rel="stylesheet" href="<?php echo($home); ?>css/old_style.css" type="text/css" />