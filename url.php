<?php

	//	foundSiteName() searches the current URL
	//	to see if a string can be found, and
	//	returns true or false
	//	see: https://stackoverflow.com/questions/6768793/get-the-full-url-in-php
	
	function foundSiteName ( $str ) {
		$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
		$num = strpos( $url, $str );
		$flag = true;
		if( $num == -1 ) { $flag = false; }
		return $num;		
	}	

?><!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
<title>php_widgets</title>
<meta name="Keywords" content="">
<meta name="Description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">			
<link rel="stylesheet" type="text/css" href="./css/default.css">
<!-- CUSTOM CSS FOR THIS PAGE -->
<style>
		
</style>
</head>

<body class="">

	<div id="page">
		<a href="./index.php"><< Home</a><br />
		<h1>url revealer</h1>
		<p>URL is: <?php 
			$needle = 'local';
			print 'searching URL for "' . $needle . '" -> ';
			$flag = foundSiteName( $needle ); 
			if($flag == true) { print 'found'; }
			else { print 'not found'; }
		?>
	</div><!-- end: #page -->	

	<script
		src="https://code.jquery.com/jquery-3.6.4.min.js"
		integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
		crossorigin="anonymous"></script>
	<script src="./js/default.js?t=<?php print $ver; ?>"></script>	
	<script>
	<!-- CUSTOM JS FOR THIS PAGE -->


	</script>	
</body>
</html>