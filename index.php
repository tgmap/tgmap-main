<!DOCTYPE html>
<html>
<head>
	
	<title>Quick Start - Leaflet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<script src="semantic/dist/semantic.min.js"></script>
</head>
<body>
<style>
	html.ios {
		overflow-x: hidden;
		-webkit-overflow-scrolling: touch;
		}
		html.ios,
		html.ios body {
		height: initial !important;
  box-sizing: border-box;
		}
	body {
		margin: 0;
		padding: 0;
		color: #000000a6;
		box-sizing
	}
	.hamburger-menu-trigger .bars{
		font-size: 18px;
		color: #000000a6;
		margin-right: 0px;
	}
	.hamburger-menu-trigger .bars{
		font-size: 18px;
		color: white;
		margin-right: 0px;
	}
	.hamburger-menu-trigger{
		cursor: pointer;
		z-index:10000;
		position: fixed;
		top: 12px;
		left: 12px;
		height: 36px;
		width: 36px;
		display: flex;
		background-color: rgba(255, 255, 255, 0.75);
		justify-content: center;
		border-radius: 5px;
		align-items: center;
	}
	.leaflet-bar a, .leaflet-bar a:hover{
		width:28px;
		height:28px;
		background-color: rgba(255, 255, 255, 0.75)!important;
		color: #000000a6;
	}
	.leaflet-bar{
		box-shadow: 0 0 0 0;
	}
	.leaflet-left{
		right:10px!important;
		left:unset!important;
	}
	.leaflet-left .leaflet-control{
		margin-right:15px;
	}
	
	.mobile-vertical-sidebar-container{
		background: white;
		
	}
	.mobile-vertical-sidebar-sub-container{
		padding: 40px;
		left: 0px;
	}
	.sidebar-element{
		cursor: pointer;
		margin-bottom: 10px;
	}
	</style>
	<div class="visible ui sidebar mobile-vertical-sidebar-container">
		<div class="mobile-vertical-sidebar-sub-container" style="left: 0px;">
				<div onClick="window.location.href =window.location.origin" class="sidebar-element">Map</div>
				<div onClick="window.location.href =window.location.origin + '/news/'" class="sidebar-element">News</div>
			</div>
	</div>
	<div class='pusher main-body'>
		<div class="hamburger-menu-trigger">
			<i class="bars icon"></i>
		</div>
		<div>
			<?php
			// Grabs the URI and breaks it apart in case we have querystring stuff
			$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

			// Route it up!
			switch ($request_uri[0]) {
				// Home page
				case '/':
					require './views/home.php';
					break;
				// About page
				case '/about':
					require './views/about.php';
					break;
				case '/news':
					require './views/news.php';
					break;
				// Everything else
				default:
					require './views/home.php';
					// header('HTTP/1.0 404 Not Found');
					// require '../views/404.php';
					break;
			}?>
		</div>
	</div>
</body>

<script>
	$('.ui.sidebar').sidebar( 'attach events', '.hamburger-menu-trigger').sidebar('hide');
</script>


</html>
