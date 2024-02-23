<html>
<body>
   <form method="post">
       Number:<input type="number" name="number">
              <input type="submit" name="submit" > 
 </form>
 </body>
</html>

<?php

$n=$_REQUEST['number'];
s
$num = (string) $n;
$revstr = strrev($num);


if($num==$revstr)
{
   echo "This is palindrome number";
}
else
{
  echo "This is not palindrome number";
}  
   
?>