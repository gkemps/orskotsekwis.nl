<?php
include "connect.php";

if (!isset($_POST['teamname'])) {
    header('Location: http://www.orskotsekwis.nl');
}

$teamcode = $conn->real_escape_string($_POST['teamcode']);
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
    $sql = "INSERT INTO orskotsekwis_registration (teamcode, teamname, teamcaptain, teamsize, email, telephone, charity, location)
VALUES ('{$teamcode}', '{$teamname}', '{$teamcaptain}', '{$teamsize}', '{$email}', '{$telephone}', '{$charity}', '{$location}')";

    $subject = "Nieuwe inschrijving";
}

$message = implode($_POST, ";");

mail("info@orskotsekwis.nl", $subject, $message);

if (!$conn->query($sql)) {
    $message = sprintf("Errormessage: %s\n(%s)\n(%s)\n", $conn->error, implode(";", $_REQUEST), $sql);
    mail('info@orskotsekwis.nl', "oeps!", $message);
    die("Oeps, er ging iets fout. Probeer het later nog een keer.");
}
$conn->close();

header('Location: http://www.orskotsekwis.nl/bedankt.html');