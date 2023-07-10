<?php
ini_set('error_reporting', 'E_ALL ^ E_NOTICE');
session_start();
//set-variable=max_connections=250
//time zone for india
//online
//$hostname="localhost";	$user="icds";	$pass="icds@123";
//$conn = mysqli_connect($hostname,$user,$pass) or die("Server connection could not be established.");

//mysqli_select_db($conn,"aws_candidatedb")  or die("Database connection could not be established.");
//$hostname="localhost";	$user="icds";	$pass="icds@123";
//$conn = mysqli_connect($hostname,$user,$pass) or die("Server connection could not be established.");

//mysqli_select_db($conn,"aws_candidatedb")  or die("Database connection could not be established.");
/* */
$hostname="localhost";	$user="root";	$pass="";
$conn = mysqli_connect($hostname,$user,$pass) or die("Server connection could not be established.");

mysqli_select_db($conn,"project1")  or die("Database connection could not be established.");




?>
