<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "ccs_db";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Failed to Connect" . $conn->connect_error); // Use die() to stop execution on error
}

