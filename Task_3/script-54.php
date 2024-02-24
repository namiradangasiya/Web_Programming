<?php

 $a=array(
       
	   array('id'=>123,'Firstname'=>"Dangasiya",
	   'Lastname'=>"Namira"),
	   array('id'=>456,'Firstname'=>"Sarvaiya",
	   'Lastname'=>"Priya"),
	   array('id'=>123,'Firstname'=>"Patel",
	   'Lastname'=>"Riya"),
	 );
	 
	 $Last_name=array_column($a,'Lastname');
	 print_r($Last_name);
?>
	 