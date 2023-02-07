<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="practica1";
	
	$conn=new mysqli($servername,$username,$password,$dbname) 
			or die("No ha sido posible conectarse. ".mysql_error()) ;

?>