<html>
        <head>
          <title>Simple InfoWindow</title>
          <meta name="viewport" content="initial-scale=1.0">
          <meta charset="utf-8">
          <style>
          html,
          body,
          #map {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
          }
          </style>
             <script src="https://apis.mappls.com/advancedmaps/api/cfcc23b63bca838204411bf8bd87037f/map_sdk?layer=vector&v=3.0&callback=initMap1" defer async></script>
            </head>
        <body>

                    <div id="map"></div>
                    <script>
    var map;
    function initMap1() {
        map = new mappls.Map('map', {
            center: [22, 77],
            zoomControl: true,
            location: true,
            zoom:4.6
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