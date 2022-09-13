<?php

//declare database
$serverName ="localhost";
$dBUserName ="root";
$dBPassword ="";
$dBName ="RIAproject_data";

//connection to database
$conn = mysqli_connect($serverName,$dBUserName,$dBPassword,$dBName);

//if cannot connect, thrown an error
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}