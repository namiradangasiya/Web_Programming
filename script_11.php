<html>
<body>
   <form method="post">
     Number:<input type="number" name="number" />
	        <input type="submit" name="submit" />
   </form>
</body>
</html>
<?php
$no=$_REQUEST['number'];

if ($no%2==0)
{
   echo "Number is even";
}
else
{
   echo "Number is odd";
}
?>