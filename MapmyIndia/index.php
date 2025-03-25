<!--index.php-->
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags 
-->
 <title>Distance btw Cities App</title>
 <!-- Bootstrap -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

 <link href="css/style.css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Arvo'rel='stylesheet' type='text/css'>
 <script src="https://apis.mapmyindia.com/advancedmaps/v1/175d3627-9f41-4109-a747-64773b861041/map_load?v=1.5"></script> 
    <script src="https://apis.mapmyindia.com/advancedmaps/api/175d3627-9f41-4109-a747-64773b861041/map_sdk_plugins"></script>
 </head>
 <body>
 
    
        <div class="container">
            <div class="main">
                <h1>Distance between cities App.</h1>
                <p>Our app will help you calculate travelling distances.</p>
                <form >
                <div class="row">
                    <div class="col">
                        <input type="text" id="from" class="form-control" placeholder="Origin" aria-label="Origin">
                    </div>
                    <div class="col">
                        <input type="text" id="to" class="form-control" placeholder="Destination" aria-label="Destination">
                    </div>
                </div>
                </form>
        
                <div class="block mt-2 ">
                    <button class="btn btn-danger btn-lg" onclick="calcRoute();">Find Route</button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        <div id="output"></div>
        <div id="map">
        
        </div>
        
        
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript     plugins) -->
    
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="js/javascript.js"></script>
 </body>
</html