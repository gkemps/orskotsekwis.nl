<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'secrets.php';
require "connect.php";

if (empty($_POST['teamname'])) {
    header('Location: http://www.orskotsekwis.nl');
    die("post error");
}

$teamcode = $conn->real_escape_string($_POST['teamcode']);
$teamname = $conn->real_escape_string($_POST['teamname']);
$teamcaptain = $conn->real_escape_string($_POST['teamcaptain']);
$teamsize = $conn->real_escape_string(intval($_POST['teamsize']));
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

$message = file_get_contents("email_templates/email_mailchimp_bedankt.html");
$message = str_replace("*|TEAMNAME|*", $teamname, $message);
$message = str_replace("*|TEAMCAPTAIN|*", $teamcaptain, $message);
$message = str_replace("*|CHARITY|*", $charity, $message);
$message = str_replace("*|LOCATION|*", $location, $message);

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'pixel.mxrouting.net';
$mail->SMTPAuth = true;
$mail->Username = 'no-reply@orskotsekwis.nl';
$mail->Password = SMTP_PASSWORD;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

// if (!$conn->query($sql)) {
//     $message = sprintf("Errormessage: %s\n(%s)\n(%s)\n", $conn->error, implode(";", $_REQUEST), $sql);

//     try {
//         $mail->setFrom('no-reply@orskotsekwis.nl', 'Orskôtse Kwis');
//         $mail->addAddress('inschrijven@orskotsekwis.nl');
//         $mail->Subject = "Er ging iets mis met verwerken inschrijving";
//         $mail->Body = $message;

//         $mail->send();
//     } catch(Exception $e) {
//         die("Oeps, er ging iets fout. Probeer het later nog een keer.");
//     }

//     die("Oeps, er ging iets fout. Probeer het later nog een keer.");
// }


try {
    $mail->setFrom('no-reply@orskotsekwis.nl', 'Orskôtse Kwis');
    $mail->addReplyTo('info@orskotsekwis.nl', 'Team Orskôtse Kwis');
    $mail->addAddress($email, $teamcaptain);
    $mail->addBCC('inschrijven@orskotsekwis.nl');
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Bedankt voor je inschrijving';
    $mail->Body = $message;
    $mail->AltBody = 'Bedankt voor je inschrijving, kijk op https://www.orskotsekwis.nl/bedankt.html voor verdere instructies';

    //$mail->send();
} catch (Exception $e) {
    die("Oeps, je inschrijving is goed verwerkt, maar we konden je geen bevestiging sturen. Neem contact op met info@orskotsekwis.nl om te kijken of je inschrijving goed is binnengekomen");
}

$conn->close();

header('Location: http://www.orskotsekwis.nl/bedankt.html');