<html>
<head>
		<title>
		<?PHP echo $title; ?>
		</title>
		<link rel="shortcut icon" href="include/img/favicon.ico" />
		<meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1">
		
		<!-- CSS -->
		<link rel="stylesheet" media="(min-width: 750px)" type="text/css" href="include/css/style.css" />
		<link rel="stylesheet" media="(max-width: 750px)" type="text/css" href="include/css/mobile.css" />
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400' rel='stylesheet' type='text/css'>
		
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="include/js/jquery.wookmark.js"></script>
		<script type="text/javascript">
				$(function(){  // $(document).ready shorthand
					$('.intro-pu-wrapper').hide().fadeIn('slow');
				});
		</script>
		<script src="include/js/jquery.wookmark.start.js"></script>
	<script type="text/javascript">
				$(document).ready(function () {
					$('#nav li').hover(
						function () {
							//mostra sottomenu
							$('ul', this).stop(true, true).delay(50).slideDown(100);
 
						}, 
						function () {
							//nascondi sottomenu
							$('ul', this).stop(true, true).slideUp(200);        
						}
					);
				});
				$(document).ready(function () {
					$('#nav-mobile li').hover(
						function () {
							//mostra sottomenu
							$('ul', this).stop(true, true).delay(50).slideDown(100);
 
						}, 
						function () {
							//nascondi sottomenu
							$('ul', this).stop(true, true).slideUp(200);        
						}
					);
				});
	</script>
	<script language="javascript" type="text/javascript"> 
		function showhide(id){ 
			if (document.getElementById){ 
			obj = document.getElementById(id); 
				if (obj.style.display == "none"){ 
				obj.style.display = ""; 
				} else { 
				obj.style.display = "none"; 
				} 
			} 
		} 
	</script>
	</head>
	<body>