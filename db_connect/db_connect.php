<?php

$host = ${DB_HOST};
$username = ${DB_USERNAME}
$password = ${DB_PASSWORD}
$database = ${DB_NAME}

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
