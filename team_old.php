<?php

include "connect.php";

$query = "SELECT id, teamcode, teamname, teamcaptain FROM orskotsekwis.orskotsekwis_history order by teamcode ASC";

$result = $conn->query($query);

echo <<< EOT
<p>Jullie hebben vorig jaar al meegespeeld met de Kwis. Of op zijn minst met het deel van het team. Kies hieronder in de lijst
je team van vorig jaar. Je speelt dan ieder jaar mee onder hetzelfde teamnummer, wel zo makkelijk. Je teamnaam, 
captain en andere gegevens kun je aanpassen in een volgend scherm. Toch liever geheel opnieuw inschrijven? Klik dan hier</p>

<form id="my-old-team-form" action="help.php" method="post">
    <div class="form-group">
        <div class="form-group row">
            <div class="col-sm-12">
                <select class="form-control" name="my-old-team" id="my-old-team">
EOT;
while ($row = $result->fetch_object()){
    print "<option value=\"{$row->id}\">T".$row->teamcode." - ".$row->teamname." - ".$row->teamcaptain."</option>";
}
echo <<< EOT
                  </select>
            </div>
            <div class="col-sm-12">
                <button id="my-old-team-button" type="button" class="btn btn-default">Dit is mijn team van vorig jaar!</button>
            </div>
            <script type="text/javascript">
                $('#my-old-team-button').click(function()
                {
                    $.ajax
                    ({
                        url: 'signup.php',
                        data: "my-old-team=" + $("#my-old-team").val(),
                        type: 'post',
                        success: function (response) {
                            $('#step1_body').html(response);
                        }
                    });
                });
            </script>
        </div>
    </div>
</form>
EOT;
