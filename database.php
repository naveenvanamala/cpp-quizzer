<?php

$mysqli = new mysqli("localhost","root","","quizzer");

if($mysqli->connect_error){
	printf("connecton failed :%s\n",$mysqli->connect_error);
	exit();
}