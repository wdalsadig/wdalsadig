<?php


$dbPassword = "12345678";
$dbUserName = "gaaror";
$dbServer = "localhost";
$dbName = "controlpanel";
$movement = "forward";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database connection failed. reason: " . $connection->connect_error);
}

$query = "INSERT INTO `moves`(`move`)VALUES(\"$movement\")";

//$query = "UPDATE `directions` SET `movement` = \'forward\' WHERE `directions`.`ID` = 5";
$connection->query($query);

$connection->close();
echo "$movement";