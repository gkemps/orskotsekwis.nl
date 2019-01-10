<?php


include "connect.php";

if (isset($_REQUEST['my-old-team'])) {
    $id = $conn->real_escape_string($_REQUEST['my-old-team']);
    $query = "SELECT * FROM orskotsekwis_history WHERE id = {$id}";

    $result = $conn->query($query);
    $row = $result->fetch_assoc();
}

$teamname = $row['teamname'] ?? "";
$teamcaptain = $row['teamcaptain'] ?? "";
$email = $row['email'] ?? "";
$telephone = $row['telephone'] ?? "";
$teamsize = $row['teamsize'] ?? "";
$charity = $row['charity'] ?? "";
$location = $row['location'] ?? "";
$teamcode = $row['teamcode'] ?? "";

echo <<< EOT
<form action="registration.php" method="post">
<input type="hidden" name="teamcode" value="{$teamcode}" />
<div class="form-group row">
  <label for="teamnaam" class="col-sm-2 col-form-label">Teamnaam</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="teamname" id="teamnaam" value="{$teamname}" placeholder="(Voorlopige) teamnaam, later nog aan te passen" required>
  </div>
</div>
<div class="form-group row">
  <label for="teamcaptain" class="col-sm-2 col-form-label">Teamcaptain</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="teamcaptain" id="teamcaptain" value="{$teamcaptain}" placeholder="Naam teamcaptain" required>
  </div>
</div>
<div class="form-group row">
  <label for="email" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="email" class="form-control" name="email" id="email" value="{$email}" placeholder="Emailadres teamcaptain" required>
  </div>
</div>
<div class="form-group row">
  <label for="telephone" class="col-sm-2 col-form-label">Telefoonnummer</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="telephone" id="telephone" value="{$telephone}" placeholder="Telefoonnummer teamcaptain" required>
  </div>
</div>
<div class="form-group row">
  <label for="teamsize" class="col-sm-2 col-form-label">Team grootte</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="teamsize" id="teamsize" value="{$teamsize}" placeholder="Verwacht aantal teamgenoten" required>
  </div>
</div>
<div class="form-group row">
  <label for="telephone" class="col-sm-2 col-form-label">Goed doel *</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="charity" id="charity" value="{$charity}" placeholder="Jullie goede doel" required>
  </div>
</div>
<div class="form-group row">
  <label for="telephone" class="col-sm-2 col-form-label">Locatie</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="location" id="location" value="{$location}" placeholder="Adres speellocatie" required>
  </div>
</div>
<div class="form-group">
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" required> Ik ga akkoord met het <a href="reglement.pdf" target="_blank">reglement</a> en daarmee dat de teamcaptain 18 jaar of ouder is en woonachtig in de gemeente Oirschot
    </label>
  </div>
</div>
<div class="form-group row">
  <div class="col-sm-12">
    <button type="submit" class="btn btn-default">Inschrijven</button><br/><br />
    * Goed doel is maatschappelijk relevant voor de Oirschotse gemeenschap. Sport- en buurtverenigingen zijn niet toegestaan.
  </div>
</div>
</form>
EOT;
