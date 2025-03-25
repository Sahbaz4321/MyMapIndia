<html>
        <head>
          <title>Get City</title>
          <meta name="viewport" content="initial-scale=1.0">
          <meta charset="utf-8">
          <style>
          html,
          body,
          #map {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 80vh;
          }
          </style>
             <script src="https://apis.mappls.com/advancedmaps/api/cfcc23b63bca838204411bf8bd87037f/map_sdk?layer=vector&v=3.0&callback=initMap1&libraries=geoanalytics" defer async></script>
            </head>
        <body>

                    <div id="map"></div>
                        
<script>
        var map;

        function initMap1() {
            map = new mappls.Map('map', {
            
            });
            map.on('load',function(){
                    geoParams = {
                        "AccessToken":cfcc23b63bca838204411bf8bd87037f,
                        "GeoBoundType": "stt_nme",
                        "GeoBound": [
                            "himachal pradesh", 
                            "punjab"
                        ],
                        "Attribute": "t_p",
                        "Query": ">0",
                        "Style": {
                            BorderColor: "000000",
                            BorderWidth: 0,
                            FillColor: "78909c",
                            Geometry: "polygon",
                            Opacity: 0.5,
                        },
                        "SpatialLayer": "geoAnalyticsCity",
                        "SpatialLayer1": "city"
                    };
        
                    map.addSource('wms-test-source', {
                    'type': 'raster',
                    'tiles': [geoAnalytics.getCity(geoParams)],
                    'tileSize': 256
                    });

                    map.addLayer(
                        {
                        'id': 'wms-test-layer',
                        'type': 'raster',
                        'source': 'wms-test-source',
                        'paint': {}
                        }
                    );

                    map.fitBounds(geoAnalytics.getBounds('city',geoParams));
                })
            }
    </script>
        </body>
      </html>