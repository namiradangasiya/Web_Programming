<?php

 function myfunction($d1,$d2)
 {
	 return $d1 . "-" . $d2;
 }
 
 $a=array("Namira","Priya","Riya");
 print_r(array_reduce($a,"myfunction"));
 
?>