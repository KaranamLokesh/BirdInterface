<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

</head>
<div class="topnav">
  <a href="index.php">Home</a>
  <a href="view_overlays.php">View Overlays</a>
  <a class = "active" href="#">Search Overlays</a>
  <a href="view_overlays_range.php">View Overlay Range</a>
</div>


<div class="container">
<form method="post" enctype="multipart/form-data"  action="view_overlays_range.php">
<p>Search on a Date:</p>
<input type="date" name="date_0">
<button type="submit" name="submit">Submit</button>

</form>
</div>

<div class="container">
<form method="post" enctype="multipart/form-data"  action="view_overlays_range.php">
<p>Search on a Date Range:</p>
<input type="date" name="date_0">  to <input type="date" name="date_1">
<button type="submit" name="submit_range">Submit</button>


</div>
</form>

</html>