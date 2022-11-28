<?php

$server = "localhost";
$servername = "root";
$serverpass = "";
$nameDB = "wpa3";

$conn = new mysqli($server, $servername, $serverpass, $nameDB);
if($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
}