
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script src="https://d3js.org/d3.v5.min.js"></script>
<script src="leaflet-heat.js"></script>
<script src="loadScripts.js"></script>
<style>
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
</style>
<div id="mapid" style="width: 100vw; height: 100vh;"></div>
