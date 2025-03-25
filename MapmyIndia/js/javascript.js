 /*Map Initialization*/
 var sloc,endloc;
 var place1,place2
  var map = new MapmyIndia.Map('map', { center: [22, 77], zoom: 4, search: false });
/*Search plugin initialization*/
var optional_config={
    location:[28.61, 77.23],
    distance:true
   /* pod:'City',
    bridge:true,
    tokenizeAddress:true,*
    filter:'cop:9QGXAM',
    distance:true,
    width:300,
    height:300*/
};
new MapmyIndia.search(document.getElementById("from"),optional_config,callback);
new MapmyIndia.search(document.getElementById("to"),optional_config,callback1);
// var marker;
            function callback(data) { 
                if(data)
                {
                    if(data.error)
                    {
                        if(data.error.indexOf('responsecode:401')!==-1){
                        /*TOKEN EXPIRED, set new Token ie. 
                         * MapmyIndia.setToken(newToken);
                         */
                        }
                        console.warn(data.error);
                        
                    }
                    else
                    {
                            var dt=data[0];
                            if(!dt) return false;
                            var eloc=dt.eLoc;
                            var lat=dt.latitude,lng=dt.longitude;
                            sloc=eloc;
                        
                            
                             place1=dt.placeName+(dt.placeAddress?", "+dt.placeAddress:"");
                            
                            /*Use elocMarker Plugin to add marker*/
                            // if(marker) marker.remove();
                            // if(eloc) marker=new MapmyIndia.elocMarker({map:map,eloc:lat?lat+","+lng:eloc,popupHtml:place,popupOptions:{openPopup:true}});
                    }
                }
              }
              function callback1(data) { 
                if(data)
                {
                    if(data.error)
                    {
                        if(data.error.indexOf('responsecode:401')!==-1){
                        /*TOKEN EXPIRED, set new Token ie. 
                         * MapmyIndia.setToken(newToken);
                         */
                        }
                        console.warn(data.error);
                        
                    }
                    else
                    {
                            var dt=data[0];
                            if(!dt) return false;
                            var eloc=dt.eLoc;
                            var lat=dt.latitude,lng=dt.longitude;
                            
                            endloc=eloc;
                            
                             place2=dt.placeName+(dt.placeAddress?", "+dt.placeAddress:"");
                            /*Use elocMarker Plugin to add marker*/
                            // if(marker) marker.remove();
                            // if(eloc) marker=new MapmyIndia.elocMarker({map:map,eloc:lat?lat+","+lng:eloc,popupHtml:place,popupOptions:{openPopup:true}});
                    }
                }
              }
              
function calcRoute()
{
    /*direction plugin initialization*/
    var direction_option={
        map:map,
        start:{label:place1,geoposition:sloc},
        end:{label:place2,geoposition:endloc},
        divId:'output',
        divWidth:500,
        stepPopup:true,
        alongTheRoute: {
            options: { "page": 1, "buffer": 1000, "sort": false },
            category: [
                { catCode: 'FINATM', icon: "img/atm.png", width: '30px', height: '30px',label:'ATM' },
                { catCode: 'HOTALL', icon: "img/hotel.png", width: '30px', height: '30px',label:'Hotels' },
                { catCode: 'PETROL', icon: "img/petrol-pump.png", width: '30px', height: '30px',label:'Petrol Pump' }
            ],
            poicallback: function (data) { console.log(data); }
        },
        // end:{label:'India Gate, Delhi',geoposition:"1T182A"},
    callback:function(data)
    {
        console.log(data);
        
    }
            }
    var direction_plugin=MapmyIndia.direction(direction_option); 
    
    //direction_plugin.remove(); 


   
}
