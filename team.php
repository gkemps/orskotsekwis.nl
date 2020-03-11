<?php
mb_internal_encoding("UTF-8");

include "connect.php";

$pincode = $conn->real_escape_string($_GET['id'] ?? 999999);

$sql = "SELECT * FROM orskotsekwis_registration WHERE pincode = ".$pincode;

$result = $conn->query($sql);

if (!$result) {
    printf("Errormessage: %s\n", $conn->error);
    die();
}

$fields = $result->fetch_assoc();

$conn->close();
