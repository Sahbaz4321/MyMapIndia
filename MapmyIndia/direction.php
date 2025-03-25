<html>
 <head>
    <title>MapmyIndia Plugin - Search Plugin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desciption" content="Mapmyindia Search Plugin">
    <script src="https://apis.mapmyindia.com/advancedmaps/v1/a77d78c7-c7ea-433c-9436-efe816f13544/map_load?v=1.5"></script> 
    <script src="https://apis.mapmyindia.com/advancedmaps/api/a77d78c7-c7ea-433c-9436-efe816f13544/map_sdk_plugins"></script>
    <style>
        body{margin: 0}
        #map{
            width: 100%; height: 80vh;margin:0;padding: 0;
        }
        .infoCls_map{margin-top: 160px !important;
            min-width: 300px}
        #direction{
            color: #000;
            max-width: 99%;
            width:300px;
            /* position:absolute; */
            /* z-index: 999; */
            font-size: 15px;
            padding:10px;
            border: 1px solid #ddd;
            outline: none !important;
            /* top:55px; */
            border-radius:10px;
            margin:2px 4px;
        }
    </style>
    </head>
    <body>
        <div id="map"></div>
        <div id="direction"></div>
        <script>
         /*Map Initialization*/
          var map = new MapmyIndia.Map('map', {center: [28.09, 78.3], zoom: 5, search: false});
          
          /*direction plugin initialization*/
            var direction_option={
                map:map,
                end:{label:'India Gate, Delhi',geoposition:"1T182A"},
		callback:function(data){console.log(data);}
            }
            var direction_plugin=MapmyIndia.direction(direction_option);  
            //direction_plugin.remove(); 
       </script>
    </body>
</html>
             