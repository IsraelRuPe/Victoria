<?php

// $servername = "50.6.138.165";
// $database = "victor51_towal";
// $username = "victor51_ad_tatto";
// $password = "sPpUn7zIf34,";

$servername = "localhost";
$database = "victor51_towal";
$username = "root";
$password = "";

 try {
    $conn = mysqli_connect($servername, $username, $password, $database);
 }catch(Exception $e){
echo "Ocuarrio un proble en la conexcion";
 }
