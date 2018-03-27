<?php
mb_internal_encoding("UTF-8");

$servername = "localhost";
$username = "orskotsekwis";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}

$pincode = $conn->real_escape_string($_GET['id'] ?? 999999);

$sql = "SELECT * FROM orskotsekwis_registration WHERE pincode = ".$pincode;

$result = $conn->query($sql);

if (!$result) {
    printf("Errormessage: %s\n", $conn->error);
    die();
}

$fields = $result->fetch_assoc();

$conn->close();
