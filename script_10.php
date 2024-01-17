<html>
<body>
  <form method="post">
    Width<input type="number" name="width">
	Length<input type="number" name="length">
	
	       <input type="submit" name="submit">
  </form>
</body>
</html>
<?php

$wid=$_REQUEST['width'];
$len=$_REQUEST['length'];

$area=$wid * $len;

echo "Area of rectangle is: $area";
?>
