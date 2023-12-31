<!DOCTYPE html>
<html>
<head>
    <title>Suburb Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstarp -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="index.js"></script>
</head>
<body>

    <br>
    <br>
    <main role="main" class="container-fluid">
    <div class="container-fluid position-static">
        <div class="form-row">
            <div class="form-group col-md-5">
                <h5 class="text p-0">Suburb Search</h5>
            </div>
            <div class="form-group col-md-5">
                <h5 class="text p-0">Origin Address Search</h5>
            </div>
        </div>
        
           
                
            <div class="form-row">
                <div class="form-group col-md-5">
                    <div class="input-group">
                        <input class="form-control py-2 border-right-0 border" type="searchaddress" id="suburb" name="#" placeholder="Search suburb here...">
                        <span class="input-group-append">
                            <div class="input-group-text bg-transparent">
                                <i class="fa fa-search"></i>
                            </div>
                        </span>
                    </div>
                </div>
            

                    <div class="form-group col-md-5">
                        <!-- number input for the distance -->
                        <div class="input-group">
                            <input class="form-control py-2 border-right-0 border" type="searchaddress" id="origin" name="#" placeholder="Search origin address...">
                            <span class="input-group-append">
                                <div class="input-group-text bg-transparent">
                                    <i class="fa fa-search"></i>
                                </div>
                            </span>
                        </div>
                    </div>

                <div class="form-group col-md-2">
                    <button type="submit" id="search" class="btn btn-primary btn-block">Search</button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <h5 class="text p-0">Radius (km):</h5>
                </div>
                <div class="form-group col-md-4">
                    <!-- number input for the distance -->
                    <div class="input-group">
                        <input class="form-control py-2 border-right-0 border" type="range" id="radius" name="radius" min="1" max="150" value="50" oninput="updateRadiusValue(this.value)">
                        <span class="input-group-append">
                            
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <h5 class="text p-0" id="radius_value">5 km</h5>
                </div>

                <div class="form-group col-md-2">
                    <input type="button" id="clear_button" class="btn btn-primary btn-block" value="Clear"></input>
                </div>

        
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="col" style="width: 90vw; height: 50vh;">
                <!-- Add your map here -->
                <div id="map" style="height: 100%;"></div>
            </div>
        </div>
    </div>

    <br>

    <div class="container-fluid position-static">
        <div class="form-row">
            <div class="form-group col-md-2">
                <input type="button" id="export_csv" class="btn btn-primary btn-block" value="Export to CSV"></input>
            </div>
        </div>
    </div>


    <div class="row">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Suburb</th>
                    <th scope="col">Postcode</th>
                    <th scope="col">Distance (km)</th>
                    <th scope="col">Travel Time (mins)</th>
                </tr>
            </thead>
            <tbody id="results_table">
            </tbody>
        </table>
    </div>

    <?php
        // get the google maps api key from the .env file
        $env = parse_ini_file('.env');
        $google_maps_api = $env["GOOGLE_MAPS_API"];

        // add the google maps api script
        echo "<script src='https://maps.googleapis.com/maps/api/js?key=".$google_maps_api."&callback=initMap&v=beta&region=AU&libraries=places' async defer>";
        echo "</script>";

    ?>

    </main>

</body>
</html>