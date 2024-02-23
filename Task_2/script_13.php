<html>
<body>
   <form method="post">
   celsius:<input type="number" name="number" />
           <input type="submit" name="submit" />
   </form>
</body>
</html>

<?php
$ce=$_REQUEST['celsius'];

$fa=($ce*9 / 5) + 32;

echo "Farenhit: $fa";

?>