<html>
        <head>
          <title>Default Map</title>
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
             <script src="https://apis.mappls.com/advancedmaps/api/cfcc23b63bca838204411bf8bd87037f/map_sdk?layer=vector&v=3.0&callback=initMap1" defer async></script>
            </head>
        <body>

                    <div id="map"></div>
                        <script>
        var map,marker1,marker2,marker3,marker4,infoWin1,map_circle;
        function initMap1() {
            map = new mappls.Map('map', {center:[22,77],zoom:4,zoomControl:true,draggable:true,location:true});
	    map.on('contextmenu', function(e) {console.log(e);alert("context"); });
        Marker1=new mappls.Marker({
            map:map,
            position:{"lat":28.65,"lng":77.22},
            fitbounds:false,
            popupHtml:'<div>New Delhi</div>',
            icon_url:'https://apis.mapmyindia.com/map_v3/1.png',
            
        })
       infoWin1=new mappls.InfoWindow({
        map:map,
        content:"New Delhi Capptal of India",
        position:{"lat":28.65,"lng":77.22},
       })
        Marker2=new mappls.Marker({
            map:map,
            position:{"lat":18.81,"lng":72.96},
            fitbounds:false,
            popupHtml:'<div>Mumbai</div>'
            // icon_url:'https://apis.mapmyindia.com/map_v3/1.png',
            
        })
        Marker3=new mappls.Marker({
            map:map,
            position:{"lat":22.47,"lng":88.43},
            fitbounds:false,
            popupHtml:'<div>Kolkata</div>'
            // icon_url:'https://apis.mapmyindia.com/map_v3/1.png',
            
        })
        Marker4=new mappls.Marker({
            map:map,
            position:{"lat":12.22,"lng":80.34},
            fitbounds:false,
            popupHtml:'<div>Chenai</div>'
            // icon_url:'https://apis.mapmyindia.com/map_v3/1.png',
            
        })
        var mappls_circle = new mappls.Circle({
                map: map,
                center: {"lat": 28.61,"lng": 77.23 },
                radius: 50000
            });
        map1.addListener('click',function(e){
            let divID=getElementByID("show-result")
            divID.style.dispaly="block"
            divID.innerHTML='You Clicked at : ${e.lnglat}'
        })
        }
    </script>
        </body>
      </html>