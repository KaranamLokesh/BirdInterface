<?php
include_once("dbconfig.php");
include_once("dbconnection.php");
include "getGps.php";

if(isset($_POST['upload'])){

$path = "imageuploads/";
     for($i=0; $i<count($_FILES['files']['name']); $i++){
     $extension = explode('.', basename( $_FILES['files']['name'][$i]));
     $path = $path . md5(uniqid()) . "." . $extension[count($extension)-1]; 
     $handle = realpath($_FILES["files"]["tmp_name"][$i]);
     $exif = exif_read_data($handle);
     $gim = $exif['MakerNote'];
     $latitude = gps($exif["GPSLatitude"], $exif['GPSLatitudeRef']);
     $longitude = gps($exif["GPSLongitude"], $exif['GPSLongitudeRef']);
     $orientation = $exif['Orientation'];
     $exif_date = $exif['DateTime'];
       $sql = "INSERT INTO locations (latitude, longitude,imageName,orientation,date_of_upload) VALUES ('$latitude', '$longitude','$path','$orientation','$exif_date')";
          mysqli_query($mysqli, $sql);
      if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $path )) {
      //insert query 
       
         echo $gim[];
         echo $gim;
          } else{
        echo "Error in Upload";
       }
   }
 }
   ?>

   <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

</head>



</html>


