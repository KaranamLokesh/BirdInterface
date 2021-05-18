<?php
include_once("dbconfig.php");
include_once("dbconnection.php");

$sql = "SELECT latitude,longitude,imageName FROM locations";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $latitude =[];
  $longitude =[];
  $imageName =[];
  while($row = mysqli_fetch_assoc($result)) {
    array_push($latitude,$row['latitude']);
    array_push($longitude,$row['longitude']);
    array_push($imageName,$row['imageName']);


  }
} else {
  echo "0 results";
}


?>


<!DOCTYPE html>
<html>
<head>
<script src="https://maps.googleapis.com/maps/api/js?key=<your API key>" ></script>
<script type="text/javascript">
var latitude = <?php echo json_encode($latitude); ?>;
var longitude = <?php echo json_encode($longitude); ?>;
var imageName = <?php echo json_encode($imageName); ?>;
console.log(longitude);
        var overlay;

        SchipholOverlay.prototype = new google.maps.OverlayView();

        function initialize()
        {
            var mapProp = { //set map properties
                    center:new google.maps.LatLng(39.302952944444,-93.32649125),
                    zoom:16,
                    mapTypeId:google.maps.MapTypeId.HYBRID
                    };

            //create map variable with properties       
            var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

            for(i=0;i<latitude.length;i++){
            var lat = parseFloat(latitude[i]);
            var lon = parseFloat(longitude[i]);
            var srcImage = (imageName[i]);
            


            var swBound = new google.maps.LatLng(lat-0.0004,lon-0.0004);
            var neBound = new google.maps.LatLng(lat+0.0004,lon+0.0004);
            console.log(swBound,neBound);
            var bounds = new google.maps.LatLngBounds(swBound, neBound);
            console.log(srcImage);

            // Insert overlay image here
            

            var overlays =[]
            overlays.push(new SchipholOverlay(bounds, srcImage, map));
            
              }
        }

        function SchipholOverlay(bounds, image, map) {

        // Now initialize all properties.
        this.bounds_ = bounds;
        this.image_ = image;
        this.map_ = map;

        // We define a property to hold the image's
        // div. We'll actually create this div
        // upon receipt of the add() method so we'll
        // leave it null for now.
        this.div_ = null;

        // Explicitly call setMap() on this overlay
        this.setMap(map);
        }


        SchipholOverlay.prototype.onAdd = function() {

          // Note: an overlay's receipt of onAdd() indicates that
          // the map's panes are now available for attaching
          // the overlay to the map via the DOM.

          // Create the DIV and set some basic attributes.
          var div = document.createElement('div');
          div.style.borderStyle = 'none';
          div.style.borderWidth = '0px';
          div.style.position = 'absolute';

          // Create an IMG element and attach it to the DIV.
          var img = document.createElement('img');
          img.src = this.image_;
          img.style.width = '65%';
          img.style.height = '65%';
          img.style.position = 'absolute';
          div.appendChild(img);

          // Set the overlay's div_ property to this DIV
          this.div_ = div;

          // We add an overlay to a map via one of the map's panes.
          // We'll add this overlay to the overlayLayer pane.
          var panes = this.getPanes();
          panes.overlayLayer.appendChild(div);
        }

        SchipholOverlay.prototype.draw = function() {

          // Size and position the overlay. We use a southwest and northeast
          // position of the overlay to peg it to the correct position and size.
          // We need to retrieve the projection from this overlay to do this.
          var overlayProjection = this.getProjection();

          // Retrieve the southwest and northeast coordinates of this overlay
          // in latlngs and convert them to pixels coordinates.
          // We'll use these coordinates to resize the DIV.
          var sw = overlayProjection.fromLatLngToDivPixel(this.bounds_.getSouthWest());
          var ne = overlayProjection.fromLatLngToDivPixel(this.bounds_.getNorthEast());

          // Resize the image's DIV to fit the indicated dimensions.
          var div = this.div_;
          div.style.left = sw.x + 'px';
          div.style.top = ne.y + 'px';
          div.style.width = (ne.x - sw.x) + 'px';
          div.style.height = (sw.y - ne.y) + 'px';
        }

        SchipholOverlay.prototype.onRemove = function() {
            this.div_.parentNode.removeChild(this.div_);
            //this.div_ = null;
            }

        SchipholOverlay.prototype.hide = function() {
            if (this.div_) {
                this.div_.style.visibility = "hidden";
                }
            }

        SchipholOverlay.prototype.show = function() {
            if (this.div_) {
                this.div_.style.visibility = "visible";
                }
            }

        SchipholOverlay.prototype.toggle = function() {
            if (this.div_) {
                if (this.div_.style.visibility == 'hidden') {
                    this.show();
                } else {
                    this.hide();
                }
            }
        }

        //initialize the map
        google.maps.event.addDomListener(window, 'load', initialize);
      </script>


  <link rel="stylesheet" href="style.css">

</head> 
<body onload="initialize()">

<div class="topnav">
  <a  href="index.php">Home</a>
  <a class ="active "href="#">View Overlays</a>
  <a href="search_overlays.php">Search Overlays</a>
  <a href="view_overlays_range.php">View Overlay Range</a>
</div>
     
    <div class="map" id="googleMap" style="width:1600px;height:800px;"></div>
    
    </body>
    </html>
