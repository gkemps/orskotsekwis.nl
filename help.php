<?php
$servername = "localhost";
$username = "orskotsekwis";
$password = "";
$dbname = "";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//if (!$conn->set_charset("utf8")) {
//    printf("Error loading character set utf8: %s\n", $conn->error);
//    exit();
//}

$message = implode($_POST, ";");

$headers = 'From: no-reply@orskotsekwis.nl' . "\r\n" .
    'Reply-To: no-reply@orskotsekwis.nl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail("info@orskotsekwis.nl", "Ik wil graag helpen", $message, $headers);

die('stop');

header('Location: bedankt_helpen.html');