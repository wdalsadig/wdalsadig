<?php


$dbPassword = "12345678";
$dbUserName = "gaaror";
$dbServer = "localhost";
$dbName = "controlpanel";
$movement = "backward";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno) {
    exit("Database connection failed. reason: " . $connection->connect_error);
}
$query = "INSERT INTO `moves`(`move`)VALUES(\"$movement\")";

$connection->query($query);
$connection->close();
echo "$movement";