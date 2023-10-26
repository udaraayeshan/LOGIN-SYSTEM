<?php

$dbServerName ="localhost";
$dbUserName ="root";
$dbPassword="";
$dbName="cmb_login";

$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);



if (!$conn){
    die("Connection failed : " .mysqli_connect_error());      //Database eka check karanawa connect welada balanna
} else{

   echo 'Its working ';
     
}



?>

