<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default-MapMyIndia</title>
    <script src="https://apis.mappls.com/advancedmaps/api/20bafebabc3ee9bb09e9ebc634b9aba3/map_sdk?layer=vector&v=3.0&callback=initMap1" defer async></script>
        
    </script>
    <style>
        html,body{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
        }
        #map{
            width: 100%;
            height: 80vh;
        }
        .marker{
            white-space: nowrap;
            font-weight: bolder;
            font-size: 15px;
            padding-left: 15px;
            color: #d93025;
            
        }
        </style>
</head>
<body>
    <div id="map"></div>
    <script>
    var map;
    var marker1,marker2,marker3,marker4,geoData;
        function initMap1() {
            map = new mappls.Map('map', {center:[28,77],
                zoomControl:true,
                draggable:true,
                scrollwheel:true,
                zoom:3.3
            });
            
           
	    map.on('contextmenu', function(e)
         {
            console.log(e);
            alert("MyMapIndia");
            
         });
         marker1=new mappls.Marker({
            map:map,
            position:{
                "lat":28.65,
                "lng":77.22
            },
            fitbounds:false,
            draggable:true,
            icon_url:'https://apis.mapmyindia.com/map_v3/1.png'
         });
         marker1=new mappls.Marker({
            map:map,
            position:{
                "lat":18.81,
                "lng":72.96
            },
            fitbounds:false,
            draggable:true,
            html:'<div class="marker">MARKER</div>'
         });
         map.addListener('load',function(){
            geoData={
                "type":"FeatureCollection",
                "Feature":[{
                    "type":"Feature",
                    "properties":{
                        "htmlPopup":"Kolkata"
                    },
                    "geometery":{
                        "type":"Point",
                        "coordinates":[22.47,88.43]
                    }
                },
                {
                    "type":"Feature",
                    "properties":{
                        "htmlPopup":"Chenai"
                    },
                    "geometery":{
                        "type":"Point",
                        "coordinates":[12.22,80.34]
                    }
                }]
            }
         });
         marker3=new mappls.Marker({
            map:map,
            position:geoData,
            icon_url:'https://apis.mapmyindia.com/map_v3/1.png',
            fitbounds:false,
            clusters:true
            
         });
         var window = new mappls.InfoWindow({
            map: map,
            content: "MapmyIndia",
            position: { lat: 28.61,lng: 77.23 },
            fitbounds:true
        });
         
        }
    </script>
</body>
</html>