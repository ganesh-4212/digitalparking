<?php
	$SERVER="localhost";
	$USER="root";
	$PASSWORD="";
	$DBNAME="parkdb";
	$con=new mysqli($SERVER,$USER,$PASSWORD,$DBNAME);
	if($con->connect_error){
		dir("connection error ".$con->connect_error);
	}
?>