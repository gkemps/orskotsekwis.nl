<?php
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

$teamname = $conn->real_escape_string($_POST['teamname']);
$teamcaptain = $conn->real_escape_string($_POST['teamcaptain']);
$teamsize = $conn->real_escape_string($_POST['teamsize']);
$email = $conn->real_escape_string($_POST['email']);
$telephone = $conn->real_escape_string($_POST['telephone']);
$charity = $conn->real_escape_string($_POST['charity']);
$location = $conn->real_escape_string($_POST['location']);

if (isset($_POST['pincode'])) {
    $sql = "UPDATE orskotsekwis_registration
SET teamname = '{$teamname}', teamcaptain = '{$teamcaptain}', teamsize = '{$teamsize}', email = '{$email}',
 telephone = '{$telephone}', charity = '{$charity}', location = '{$location}'
WHERE pincode = '{$_POST['pincode']}'";

    $subject = "Inschrijving update";
} else {
    $sql = "INSERT INTO orskotsekwis_registration (teamname, teamcaptain, teamsize, email, telephone, charity, location)
VALUES ('{$teamname}', '{$teamcaptain}', '{$teamsize}', '{$email}', '{$telephone}', '{$charity}', '{$location}')";

    $subject = "Nieuwe inschrijving";
}

$message = implode($_POST, ";");

mail("info@orskotsekwis.nl", $subject, $message);

if (!$conn->query($sql)) {
    printf("Errormessage: %s\n", $conn->error);
    die();
}
$conn->close();

header('Location: http://www.orskotsekwis.nl/bedankt.html');