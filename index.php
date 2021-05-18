<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
.container { 
  height: 200px;
  position: relative;
  border: 3px solid green; 
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="view_overlays.php">View Overlays</a>
  <a href="search_overlays.php">Search Overlays</a>
  <a href="view_overlays_range.php">View Overlay Range</a>
</div>
 <div class="container">
  <div class="center">
<form method="post" enctype="multipart/form-data"  action="upload.php">  
    <input type="file" name="files[]" id="files" multiple />  
    <br /><br />
     
   
   <button type="submit" name="upload">Upload selected files</button> 

</form>
  </div>
</div>
</body>
</html>