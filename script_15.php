<html>
<body>
   <form method="post">
     Enter No1:<input type="number" name="val1" />
	 Enter No2:<input type="number" name="val2" />
	 Enter No3:<input type="number" name="val3" />
	           <input type="submit" name="submit" />
   </form>
</body>
</html>
<?php
$num1=$_REQUEST['val1'];
$num2=$_REQUEST['val2'];
$num3=$_REQUEST['val3'];

echo "$num1,$num2,$num3<br>";

if ($num1>$num2 && $num1>$num3)
{
	echo "$num1 is largest number";
}
else if ($num2>$num1 && $num2>$num3)
{
	echo "$num2 is largest number";
}
else
{
	echo "$num3 is largest number";
}
?>