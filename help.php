<?php
$message = implode($_POST, ";");

$headers = 'From: no-reply@orskotsekwis.nl' . "\r\n" .
    'Reply-To: no-reply@orskotsekwis.nl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail("info@orskotsekwis.nl", "Ik wil graag helpen", $message, $headers);

header('Location: bedankt_helpen.html');