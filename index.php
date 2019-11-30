<!DOCTYPE html>
<html>
<head>
	<style>
	html.ios {
		overflow-x: hidden;
		-webkit-overflow-scrolling: touch;
		}
		html.ios,
		html.ios body {
		height: initial !important;
		}
	body {
		margin: 0;
		padding: 0;
	}
	.hamburger-menu-trigger{
		position: fixed;
		top:12px;
		left:12px;
		height:60px;
		width:60px;
		background-color: rgba(255, 255, 255, 0.5);
	}
	</style>
	<title>Quick Start - Leaflet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <script src="https://d3js.org/d3.v5.min.js"></script>
		<script src="leaflet-heat.js"></script>
	<script src="loadScripts.js"></script>
	
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<script src="semantic/dist/semantic.min.js"></script>
</head>
<body>
	<style>
		.mobile-vertical-sidebar-sub-container{
			padding: 40px;
			left: 0px;
		}
		</style>
		<div class="mobile-vertical-sidebar-container">

			<div class="mobile-vertical-sidebar-sub-container hor-pad-40 ver-pad-40" style="left: 0px;">
					
					
					<div class="color-light-grey-1 border-bottom-1px-ebedf0">語言設定</div>
					<div class="englishLang color-222222 hover-underline-black font-weight-4 cursor-pointer">ENG</div>
					<div class="cantoneseLang color-222222 hover-underline-black font-weight-4 cursor-pointer">中(港)</div>
					<div class="taiwaneseLang color-222222 hover-underline-black font-weight-4 cursor-pointer">中(台)</div>
				</div>
		</div>
		<div class='main-body'>
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
						require '../views/home.php';
						break;
					// About page
					case '/about':
						require '../views/about.php';
						break;
					case '/news':
						require '../views/news.php';
						break;
					// Everything else
					default:
						require '../views/home.php';
						// header('HTTP/1.0 404 Not Found');
						// require '../views/404.php';
						break;
				}?>
			</div>
		</div>
</body>

<script>
	$('.mobile-vertical-sidebar-container').sidebar('attach events', '.hamburger-menu-trigger', 'toggle');
</script>


</html>
