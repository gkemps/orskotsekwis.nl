<?php /**  */
 const START_OF_SUBSCRIPTION = 1671231601;   //zaterdag 17 december 00:00:01 CET
 const END_OF_SUBSCRIPTION   = 1678057201;   //maandag 6 maart 00:00:01 CET
 
 $nextDeadline = START_OF_SUBSCRIPTION > time() ? START_OF_SUBSCRIPTION : END_OF_SUBSCRIPTION;
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
	<!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <title>Orskôtse Kwis</title>
    <meta name="description" content="Orskotse Kwis. De dorps quiz van Oirschot.">
    <meta name="author" content="Geert Kemps. Quizis.nl">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
    <link href="plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
    <link href="plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <link href="plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="plugins/hover/hover-min.css" rel="stylesheet">	
	<link href="plugins/jquery.countdown/css/jquery.countdown.css" rel="stylesheet">	
    
    <!-- The Project's core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="css/style.css" rel="stylesheet" >
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="css/typography-default.css" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="css/skins/green.css" rel="stylesheet">

    <!-- Custom css --> 
    <link href="css/custom.css" rel="stylesheet">
    
  </head>

  <!-- body classes:  -->
  <!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
  <!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
  <!-- "transparent-header": makes the header transparent and pulls the banner to top -->
  <!-- "gradient-background-header": applies gradient background to header -->
  <!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
  <body class="front-page ">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
      <!-- header-container start -->
      <div id="header" class="header-container">
        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ --> 
        <header class="header pv-20  clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <!-- header-first start -->
                <!-- ================ -->
                <div class="header-first clearfix">

                  <!-- logo -->
                  <div id="logo" class="logo d-flex justify-content-center justify-content-md-start">
                    <a href="index.php"><img id="logo_img" src="images/logo_kwis.png" alt="Orskotse Kwis"></a>
                  </div>

                  <!-- name-and-slogan -->
                  <!-- <div class="site-slogan text-center-xs">
                    Multipurpose HTML5 Template
                  </div> -->

                </div>
                <!-- header-first end -->
              </div>
              <div class="col-md-8">
                <ul class="social-links colored text-md-right text-center-xs animated-effect-1 circle small clearfix">
                  <li class="facebook"><a target="_blank" href="http://www.facebook.com/orskotse.kwis/"><i class="fa fa-facebook"></i></a></li>
				  <li class="instagram"><a target="_blank" href="http://www.instagram.com/orskotsekwis/"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </header>
        <!-- header end -->
      </div>
      <!-- header-container end -->
      <!-- banner start -->
      <!-- ================ -->
      <div id="banner" class="banner dark-translucent-bg padding-bottom-clear" style="background-image:url('images/oirschot.png');">
        <!-- section start -->
        <!-- ================ -->
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8 text-center space-bottom">
              <div class="title large_white"><b>Orskôtse Kwis</b></div>
              <div class="separator"></div>
                <p class="text-center lead">Volgende editie: 18 maart 2023</p>
            </div>
          </div>
          <!-- countdown start -->
            <div class="countdown clearfix"></div>
          <!-- countdown end -->
        </div>
        <!-- section end -->
        <!-- section start -->
        <!-- ================ -->
        <div class="pv-40 dark-translucent-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="call-to-action text-center">
                  <div class="row">
                    <?php if (time() < END_OF_SUBSCRIPTION): ?>
                      <div <?php if (time() > START_OF_SUBSCRIPTION && time() < END_OF_SUBSCRIPTION): ?>class="col-md-8"<?php else: ?>class="col-md-12"<?php endif ?><!
                        <h1 class="title">Inschrijven - nog <?php $dagen = ceil(($nextDeadline - time()) / (60 * 60 * 24)); echo ($dagen > 1) ? "{$dagen} dagen" : "{$dagen} dag" ?></h1>
                        <?php if (time() > START_OF_SUBSCRIPTION): ?>
                          <p>Schrijf jouw team in via de button hiernaast. Lees eerst: <a href="#" data-toggle="modal" data-target="#myModal">goed om te weten als teamcaptain</a></p>
                        <?php else: ?>
                          <p>Inschrijving opent zaterdag 17 december. Lees eerst: <a href="#" data-toggle="modal" data-target="#myModal">goed om te weten als teamcaptain</a></p>
                        <?php endif ?>
                      </div>
                        <?php if (time() > START_OF_SUBSCRIPTION && time() < END_OF_SUBSCRIPTION): ?>
                          <div class="col-md-4">
                            <br>
                            <p>
                                <button data-toggle="modal" data-target="#myStep1Modal" class="btn btn-lg btn-default btn-animated">Inschrijven<i class="fa fa-pencil pl-20"></i></button>
                            </p>
                          </div>
                        <?php endif ?>
                    <?php else: ?>
                    <div class="col-md-12">
                        De inschrijving is gesloten
<!--                        <h2>De <a href="download/UitslagOrskotseKwis2019.pptx" style="color: #22B573">uitslag</a> is bekend! Download hier het boekje inclusief <a href="download/kwis_2019_antwoorden_boek.pdf" style="color: #22B573">antwoorden</a>.</h2>-->
<!--                        <h3>Antwoorden <a href="download/foto_associatie.zip" style="color: #22B573">foto ronde</a> los te downloaden</h3>-->
                    </div>
                    <?php endif ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- section end -->
      </div>
      <!-- banner end -->

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Goed om te weten als teamcaptain</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <p>Voor tijdens de kwis:</p>
              <ul class="list-icons">
                <li><i class="fa fa-clock-o"></i>Kwis is zaterdag 18 maart vanaf 19:00uur</li>
                <li><i class="fa fa-home"></i>Je werkt met je team vanaf een eigen locatie</li>
                <li><i class="fa fa-venus-mars"></i>Stel je team gevarieerd samen qua leeftijd en interesses</li>
                <li><i class="fa fa-group"></i>Advies: minimaal 10 personen</li>
                <li><i class="fa fa-desktop"></i>Zorg voor snelle internetverbinding</li>
                <li><i class="fa fa-bicycle"></i>Wees voorbereid op opdrachten buitenshuis</li>
              </ul>
              <p>Inschrijven:</p>
              <ul class="list-icons">
                <li><i class="fa fa-flag-checkered"></i>Inschrijf deadline op 5 maart 23:59u</li>
                <li><i class="fa fa-file-text-o"></i>Lees voor inschrijving ons <a href="reglement.pdf" target="_blank">reglement</a></li>
                <li><i class="fa fa-eur"></i>Inschrijving kost 15 euro per team</li>
                <li><i class="fa fa-trophy"></i>Winnaars steunen een zelf gekozen goed doel dat maatschappelijk relevant is voor de Oirschotse gemeenschap</li>
              </ul>
              <p>Toch nog vragen? Mail ze naar <a href="mailto:info@orskotsekwis.nl">info@orskotsekwis.nl</a></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

        <!-- Modal -->
<!--        <div class="modal fade" id="myFirstAssigmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<!--            <div class="modal-dialog" role="document">-->
<!--                <div class="modal-content">-->
<!--                    <div class="modal-header">-->
<!--                        <h4 class="modal-title" id="myModalLabel">Opwarm opdracht 2019</h4>-->
<!--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
<!--                    </div>-->
<!--                    <div class="modal-body">-->
<!--                        <p>Belangrijk:</p>-->
<!--                        <ul class="list-icons">-->
<!--                            <li><i class="fa fa-check"></i>Maak een raamdecoratie (minimaal A3 formaat)</li>-->
<!--                            <li><i class="fa fa-check"></i>Gebruik ons logo in je decoratie</li>-->
<!--                            <li><i class="fa fa-check"></i>Laat je teamnaam zien</li>-->
<!--                            <li><i class="fa fa-check"></i>Maak foto's en stuur deze naar raam@orskotsekwis.nl</li>-->
<!--                            <li><i class="fa fa-check"></i>Vermeld bij iedere foto je teamnaam en adres</li>-->
<!--                            <li><i class="fa fa-check"></i>Laat je raamdecoratie hangen tot en met 16 maart</li>-->
<!--                        </ul>-->
<!--                        <p>Bonus punten:</p>-->
<!--                        <ul class="list-icons">-->
<!--                            <li><i class="fa fa-thumbs-up"></i>Hoe groter, hoe beter</li>-->
<!--                            <li><i class="fa fa-thumbs-up"></i>Meerdere ramen op verschillende locaties</li>-->
<!--                            <li><i class="fa fa-thumbs-up"></i>Creativiteit wordt altijd beloond</li>-->
<!--                        </ul>-->
<!--                        <p>Toch nog vragen? Mail ze naar <a href="mailto:info@orskotsekwis.nl">info@orskotsekwis.nl</a></p>-->
<!--                    </div>-->
<!--                    <div class="modal-footer">-->
<!--                        <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

      <?php
        $fields = [];
        if (isset($_GET['id'])) {
            include "team.php";
        }
      ?>
      <!-- Form Modal -->
      <div class="modal fade" id="myFormModal" tabindex="-1" role="dialog" aria-labelledby="myFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myFormModalLabel">Inschrijven Orskôtse Kwis</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form action="registration.php" method="post">
                <div class="form-group row">
                  <label for="teamnaam" class="col-sm-2 col-form-label">Teamnaam</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="teamname" id="teamnaam" placeholder="(Voorlopige) teamnaam, later nog aan te passen" <?php echo isset($fields['teamname']) ? "value=\"{$fields['teamname']}\"" : "" ?> required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="teamcaptain" class="col-sm-2 col-form-label">Teamcaptain</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="teamcaptain" id="teamcaptain" placeholder="Naam teamcaptain" <?php echo isset($fields['teamcaptain']) ? "value=\"{$fields['teamcaptain']}\"" : "" ?> required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Emailadres teamcaptain" <?php echo isset($fields['email']) ? "value=\"{$fields['email']}\"" : "" ?> required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telephone" class="col-sm-2 col-form-label">Telefoonnummer</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telefoonnummer teamcaptain"  <?php echo isset($fields['telephone']) ? "value=\"{$fields['telephone']}\"" : "" ?> required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="teamsize" class="col-sm-2 col-form-label">Team grootte</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="teamsize" id="teamsize" placeholder="Verwacht aantal teamgenoten"  <?php echo isset($fields['teamsize']) ? "value=\"{$fields['teamsize']}\"" : "" ?> required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telephone" class="col-sm-2 col-form-label">Goed doel *</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="charity" id="charity" placeholder="Jullie goede doel"  <?php echo isset($fields['charity']) ? "value=\"{$fields['charity']}\"" : "" ?> required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telephone" class="col-sm-2 col-form-label">Locatie</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="location" id="location" placeholder="Adres speellocatie"  <?php echo isset($fields['location']) ? "value=\"{$fields['location']}\"" : "" ?> required>
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
                    <?php if (isset($fields['pincode'])): ?>
                        <input type="hidden" name="pincode" value="<?php echo $fields['pincode'] ?? ''; ?>"/>
                    <?php endif ?>
                    <button type="submit" class="btn btn-default">Inschrijven</button><br/><br />
                    * Goed doel is maatschappelijk relevant voor de Oirschotse gemeenschap. Sport- en buurtverenigingen zijn niet toegestaan.
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

        <!-- Form Modal -->
        <div class="modal fade" id="myStep1Modal" tabindex="-1" role="dialog" aria-labelledby="myStep1ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myStep1ModalLabel">Inschrijven Orskôtse Kwis</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body"id="step1_body">
                        <p>Leuk dat jullie je willen inschrijven voor de 4e editie van de Orskôtse Kwis! Heb jij en je team (of een gedeelte daarvan) in een van de voorgaande edities
                            ook al meegedaan? Druk dan op de linker knop. Nog niet eerder meegedaan? Druk dan op de rechter button.</p>
                        <p style="text-align: center">
                            <button type="button" id="button-team-old" class="btn btn-default">Wij deden al eerder mee!</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" id="button-team-new" class="btn btn-default">Wij doen voor het eerst mee!</button>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Afsluiten</button>
                    </div>
                </div>
            </div>
        </div>

      <!-- Form Modal -->
      <div class="modal fade" id="myHelpModal" tabindex="-1" role="dialog" aria-labelledby="myHelpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myFormModalLabel">Ik wil graag helpen met de Kwis 2024</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <form action="help.php" method="post">
                <div class="form-group">
                  <label for="name" class="col-sm-2 col-form-label">Naam</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Voor- en achternaam" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Emailadres" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="age" class="col-sm-2 col-form-label">Leeftijd</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="age" id="age" placeholder="Leeftijd" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="profession" class="col-sm-2 col-form-label">Beroep</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="profession" id="profession" placeholder="Beroep" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="hobby" class="col-sm-2 col-form-label">Hobby's</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hobby" id="hobby" placeholder="Hobby's" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="graphic" class="col-sm-12 col-form-label">Heb je ervaring als (web)designer, DTP-er of grafisch vormgever? Zo ja, welke?</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="graphic" id="graphic" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="creative" class="col-sm-12 col-form-label">Heb je ervaring in muziek, dans, theater of andere creatieve (podium) kunsten? Zo ja, welke?</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="creative" id="creative" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="reason" class="col-sm-12 col-form-label">Wat denk jij toe te kunnen voegen aan Team Orskôtse Kwis?</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="reason" id="reason" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-default">Insturen</button><br/><br />
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!-- main-container start -->
      <!-- ================ -->
      <section class="main-container">

        <div class="container">
          <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">
              <div class="row">
                <div class="col-lg-6">
                  <img src="images/section-image-kwis-1-rounded.png" alt="">   
                </div>
                <div class="col-lg-6">
                  <h2 class="mt-4">Het belangrijkste</h2>
                  <div class="media">
                    <div class="d-flex pr-4">
                      <a href="#">
                        <span class="icon circle small default-bg"><i class="fa fa-question"></i> </span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">De kwis: 18 maart 2023</h4>
<!--                      Race tegen de klok start om 19:00u-->
                        Houd onze socials in de gaten voor meer nieuws
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex pr-4">
                      <a href="#">
                        <span class="icon circle small default-bg"><i class="icon-trophy"></i> </span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Prijsuitreiking: 25 maart 2023</h4>
                      Wie is het slimste team van Oirschot?
                    </div>
                  </div>
                    <div class="media">
                        <div class="d-flex pr-4">
                            <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-pencil"></i> </span>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Inschrijving geopend: 17 december 2022</h4>
                            Informeer je vrienden/familie en stel je team samen!
                        </div>
                    </div>
                    <div class="media">
                        <div class="d-flex pr-4">
                            <a href="#">
                                <span class="icon circle small default-bg"><i class="fa fa fa-flag-checkered"></i> </span>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Deadline inschrijven: 5 maart 2023</h4>
                            Inschrijving hierna niet meer mogelijk
                        </div>
                    </div>
                    <div class="media">
                        <div class="d-flex pr-4">
                            <a href="#">
                                <span class="icon circle small default-bg"><i class="fa fa-thumbs-up"></i> </span>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Dankzij jullie feedback: moeilijkheidsgraad bijgesteld</h4>
                            Meer vragen en opdrachten die goed te doen zijn, maar zeker nog voldoende uitdaging!
                        </div>
                    </div>
				  <div class="media">
                    <div class="d-flex pr-4">
                      <a href="#">
                        <span class="icon circle small default-bg"><i class="fa fa-comments-o"></i> </span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Volg ons op socal media</h4>
                        Like, share & tag je teamgenoten:
						<ul class="social-links circle">
                        <li class="facebook"><a target="_blank" href="http://www.facebook.com/orskotse.kwis/"><i class="fa fa-facebook"></i></a></li>
				        <li class="instagram"><a target="_blank" href="http://www.instagram.com/orskotsekwis/"><i class="fa fa-instagram"></i></a></li>
</ul>
						
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-6 order-lg-2">
                  <img class="pv-30" src="images/section-image-kwis-2-rounded.png" alt="">   
                </div>
                <div class="col-lg-6 order-lg-1">
                  <h2 class="mt-4">Over de kwis</h2>
                  <p>Oirschotse weetjes en plaatjes. Over sport, muziek en nog veel meer. Diverse Oirschotse en niet Oirschotse onderwerpen komen langs in deze originele en spannende kenniskwis. Deelnemers mogen in maart alle middelen inzetten om de vragen te beantwoorden, terwijl de klok onverbiddelijk verder tikt. Wie wordt het slimste team van Oirschot?</p>
                  <ul class="list-icons">
				    <li><i class="icon-check-1"></i> Kennis & Doe vragen</li>
					<li><i class="icon-check-1"></i> Veel Oirschotse onderwerpen</li>
                    <li><i class="icon-check-1"></i> Teams zonder maximum aantal personen</li>
                    <li><i class="icon-check-1"></i> Teamcaptain is minimaal 18 jaar & woonachtig in Oirschot</li>
                    <li><i class="icon-check-1"></i> Kosten bedragen €15 euro per team</li>
                    <li><i class="icon-check-1"></i> Winnaars steunen zelf gekozen goed doel, maatschappelijk relevant voor Oirschotse gemeenschap</li>
                    <li><i class="icon-check-1"></i> Lees de rest in ons <a href="reglement.pdf">reglement</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- main end -->

          </div>
        </div>
      </section>
      <!-- main-container end -->


    

        <div class="container">
		  <div class="row justify-content-lg-center">
			  <div class="col-lg-8 text-center pv-10">
				<h2 class="text-center">Hoofdsponsoren</h2>
				<div class="separator"></div>
			  </div>
		  </div>
        </div>

<div class="container">
  <div class="clients-container">
    <div class="clients">
        <div class="client-image object-non-visible" data-animation-effect="fadeIn" height="1000" data-effect-delay="200">
            <a href="https://www.japak.nl/" target="_blank"><img src="images/sponsors/japak.jpg" alt=""></a>
        </div>
        <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
            <a href="https://de-burgemeester.nl/" target="_blank"><img src="images/sponsors/Burgemeester-2.png" alt=""></a>
        </div>
    </div>
  </div>
</div>

      <div class="container">
          <div class="row justify-content-lg-center">
              <div class="col-lg-8 text-center pv-10">
                  <h2 class="text-center">Sponsoren</h2>
                  <div class="separator"></div>
              </div>
          </div>
      </div>

  <div class="container">
      <div class="clients-container">
          <div class="clients">
                 
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                      <a href="" target="_blank"><img src="images/sponsors/dvk.jpg" alt=""></a>
                  </div>
                  <div class="client-image-large object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.tavolino.nl/" target="_blank"><img src="images/sponsors/Logo-tavolino2.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                    <a href="https://www.campingdebocht.nl/" target="_blank"><img src="images/sponsors/camping_de_bocht.jpg" alt=""></a>
                  </div>
                  <div class="client-image-large object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.verspaandonk-herenmode.nl/" target="_blank"><img src="images/sponsors/logo-verspaandonk.svg" alt=""></a>
                  </div>
                  <div class="client-image-large object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                      <a href="https://www.desterkaasculinair.nl/" target="_blank"><img src="images/sponsors/Logo-deSterScherp.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.fotooetelaar.nl/" target="_blank"><img src="images/sponsors/Logo-Oetelaar.jpg" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://destomerijoirschot.nl/" target="_blank"><img src="images/sponsors/Logo-STomerij.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.facebook.com/cafezaaltvrijthof" target="_blank"><img src="images/sponsors/Logo-Vrijthof.jpg" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.brasserietof.nl/" target="_blank"><img src="images/sponsors/Logo-BRASSERIE-TOF.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.gelagkamer.nl/" target="_blank"><img src="images/sponsors/Logo-GELAGKAMER.jpg" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://sntzl.nl/" target="_blank"><img src="images/sponsors/Logo-SNTZL-De zwaan-licht.jpg" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="http://www.oudbrabant.nl/" target="_blank"><img src="images/sponsors/Logo-Oud-Brabant.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.lafleurie.nl/" target="_blank"><img src="images/sponsors/Logo-Fleurie-BZ.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.debeurs-oirschot.nl/" target="_blank"><img src="images/sponsors/Logo-de_beurs.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://jasminegardenoirschot.nl/" target="_blank"><img src="images/sponsors/Logo-Jasmine-Garden.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="" target="_blank"><img src="images/sponsors/wilbert.jpg" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.facebook.com/profile.php?id=100043338206065" target="_blank"><img src="images/sponsors/Voorzijde pand.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.facebook.com/profile.php?id=100054649201226" target="_blank"><img src="images/sponsors/Logo-De-Woudgalm.png" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://www.facebook.com/jumbooirschot" target="_blank"><img src="images/sponsors/Logo-jumbo-oirschot.jpg" alt=""></a>
                  </div>
                  <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                      <a href="https://primera-oirschot.nl/" target="_blank"><img src="images/sponsors/Logo-primera.jpg" alt=""></a>
                  </div>
          </div>
      </div>
  </div>     



<!--            <div class="container">-->
<!--                <div class="row justify-content-lg-center">-->
<!--                    <div class="col-lg-8 text-center pv-10">-->
<!--                        <h2 class="text-center">Mede mogelijk gemaakt door</h2>-->
<!--                        <div class="separator"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        <div class="container">-->
<!--            <div class="clients-container">-->
<!--                <div class="clients">-->
<!--                     <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                            <a href="http://www.quizis.nl" target="_blank"><img src="images/sponsors/quizis.png" alt=""></a>
                        </div>-->
<!--                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">-->
<!--                        <a href="" target="_blank"><img src="images/sponsors/logo_tip_oirschot.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">-->
<!--                      <a href="" target="_blank"><img src="images/sponsors/laser_oirschot.jpg" alt="" style="margin-top: 10px"></a>-->
<!--                    </div>-->
<!--                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">-->
<!--                        <a href="" target="_blank"><img src="images/sponsors/weekjournaal.png" alt="" style="margin-top: 30px"></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
      <!-- section end -->

      <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
      <!-- ================ -->
      <footer id="footer" class="clearfix ">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
          <div class="container">
            <div class="footer-inner">
              <div class="row justify-content-lg-center">
                <div class="col-lg-6">
                  <div class="footer-content text-center padding-ver-clear">
                    <ul class="list-inline mb-20">
                      <li class="list-inline-item"><i class="text-default fa fa-map-marker pr-1"></i>Oirschot</li>
                      <li class="list-inline-item"><a href="mailto:info@orskotsekwis.nl" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-1"></i>info@orskotsekwis.nl</a></li>
                    </ul>
                    <!-- <a href="#header" class="btn btn-default-transparent btn-lg btn-hvr hvr-sweep-to-top smooth-scroll">Schrijf nu in</a> -->
                    <div class="separator"></div>
                    <p class="text-center margin-clear">© <?php echo date('Y'); ?> Orskôtse Kwis</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .footer end -->

      </footer>
      <!-- footer end -->
    </div>
    <!-- page-wrapper end -->

    <!-- JavaScript files placed at the end of the document so the pages load faster -->
    <!-- ================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <script type="text/javascript" src="plugins/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Modernizr javascript -->
    <script type="text/javascript" src="plugins/modernizr.js"></script>
    <!-- jQuery Revolution Slider  -->
    <script type="text/javascript" src="plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script type="text/javascript" src="plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <!-- Isotope javascript -->
    <script type="text/javascript" src="plugins/isotope/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup javascript -->
    <script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Appear javascript -->
    <script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="plugins/waypoints/sticky.min.js"></script>
    <!-- Count To javascript -->
    <script type="text/javascript" src="plugins/jquery.countTo.js"></script>
    <!-- Parallax javascript -->
    <script src="plugins/jquery.parallax-1.1.3.js"></script>
    <!-- Contact form -->
    <script src="plugins/jquery.validate.js"></script>
    <!-- Owl carousel javascript -->
    <script type="text/javascript" src="plugins/owlcarousel2/owl.carousel.min.js"></script>
    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="js/template.js"></script>
	<!-- Count Down javascript -->
    <script type="text/javascript" src="plugins/jquery.countdown/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="plugins/jquery.countdown/js/jquery.countdown.js"></script>
	<script type="text/javascript" src="plugins/jquery.countdown/js/jquery.countdown-nl.js"></script>
    <script type="text/javascript" src="js/coming.soon.config.js"></script>
    <!-- Custom Scripts -->
    <script type="text/javascript" src="js/custom.js"></script>

    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-73901233-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-73901233-2');
    </script>
    <?php if (isset($_GET['id']) && isset($fields['pincode'])): ?>
      <script type="text/javascript">
        $(window).on('load',function(){
          $('#myFormModal').modal('show');
        });
      </script>
    <?php endif ?>
    <script type="text/javascript">
        $('#button-team-old').click(function()
        {
            $.ajax
            ({
                url: 'team_old.php',
                type: 'post',
                success: function (response) {
                    $('#step1_body').html(response);
                }
            });
        });

        $('#button-team-new').click(function()
        {
            $.ajax
            ({
                url: 'signup.php',
                type: 'post',
                success: function (response) {
                    $('#step1_body').html(response);
                }
            });
        });
    </script>
<!--    --><?php //if (isset($_REQUEST['ik-wil-graag-helpen'])): ?>
<!--      <script type="text/javascript">-->
<!--        $(window).on('load',function(){-->
<!--          $('#myHelpModal').modal('show');-->
<!--        });-->
<!--      </script>-->
<!--    --><?php //endif ?>
  </body>
</html>
