<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title>Mapbox</title>
        
        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />
    </head>
    <body>
        
        <div id='map' style='width: 100%; height: 800px;'></div>
        
        <script>	
            mapboxgl.accessToken = 'pk.eyJ1IjoiemFpZDE5ODIiLCJhIjoiY2psaTNjY2xyMWpyZDNqbmozeWRxeWpybyJ9.dIefeBZk4j6bkvqi_sQbFw';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v10',
                zoom: 17,
                center: [101.652962, 2.911878]
            });
            
            map.on('load', function() {
                map.setPaintProperty('building', 'fill-color', [
                    "interpolate",
                    ["exponential", 0.5],
                    ["zoom"],
                    15,
                    "#e2714b",
                    22,
                    "#eee695"
                ]);

                map.setPaintProperty('building', 'fill-opacity', [
                    "interpolate",
                    ["exponential", 0.5],
                    ["zoom"],
                    15,
                    0,
                    22,
                    1
                ]);
            });
        </script>
    </body>
</html>
