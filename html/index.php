<?php
    $csvFile = file('csv/worstbirds.csv');
    $data = [];
    foreach ($csvFile as $line) {
        $data[] = str_getcsv($line, "\n");
    }
    $birds = [];
    foreach ($data as $value) {
        $birds[] = str_getcsv($value[0], ";");
    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Worstbird</title>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?thirdparty=1&always=1&noGeoIp=1&refreshPage=1&top=1&showNoConsent=1&hideDetailsBtn=1&showPolicyLink=1&blocking=1&privacyPage=cookies.php"></script>
  <?php
  if ($_COOKIE['cookiebar'] == "CookieAllowed") {
      // The user has allowed cookies, let's load our external services
  echo '
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>';
  }
  ?>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <div id="worstbird">
    <div class="jumbotron" style="margin-bottom:0">
    <div class="page-header">
      <h1>WORSTBIRD</h1>
    </div>
    <h5>Der schlechteste Vogel des Internets<sup><a href="#imprint">*</a></sup></h5>
  </div>

    <div class="row">

      <div class="col"></div>

      <div class="col-12 col-sm-8 col-md-6 col-lg-6">
        <div class="card">
          <img class="card-img-top" src="<?php echo $birds[0][1]; ?>" alt="Ein richtig schlechter Vogel">
          <div class="card-body">
            <h2 class="card-title"><?php echo $birds[0][0]; ?></h2>
            <span class="badge badge-secondary"><span class="badge badge-light"><?php echo $birds[0][4]; ?></span> Views am <?php echo $birds[0][3]; ?></span>
            <p class="card-text"><?php echo $birds[0][2]; ?></p>
            <a href="<?php echo $birds[0][5]; ?>" class="card-link">Wiki</a>
            <a href="<?php echo $birds[0][6]; ?>" class="card-link">Bildquelle</a><br>
          </div>
        </div>
      </div>

      <div class="col"></div>

    </div>
  </div>

  <div id="history">

    <div class="jumbotron text-center col-12" style="margin-bottom:0">
      <h1>Letzte Worstbirds</h1>
    </div>

    <div class="row">

      <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="card h-100">
          <img class="card-img-top" src="<?php echo $birds[1][1]; ?>" alt="Ein richtig schlechter Vogel">
          <div class="card-body">
            <h2 class="card-title"><?php echo $birds[1][0]; ?></h2>
            <span class="badge badge-secondary"><span class="badge badge-light"><?php echo $birds[1][4]; ?></span> Views am <?php echo $birds[1][3]; ?></span>
            <p class="card-text"><?php echo $birds[1][2]; ?></p>
            <a href="<?php echo $birds[1][5]; ?>" class="card-link">Wiki</a>
            <a href="<?php echo $birds[1][6]; ?>" class="card-link">Bildquelle</a><br>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="card h-100">
          <img class="card-img-top" src="<?php echo $birds[2][1]; ?>" alt="Ein richtig schlechter Vogel">
          <div class="card-body">
            <h2 class="card-title"><?php echo $birds[2][0]; ?></h2>
            <span class="badge badge-secondary"><span class="badge badge-light"><?php echo $birds[2][4]; ?></span> Views am <?php echo $birds[2][3]; ?></span>
            <p class="card-text"><?php echo $birds[2][2]; ?></p>
            <a href="<?php echo $birds[2][5]; ?>" class="card-link">Wiki</a>
            <a href="<?php echo $birds[2][6]; ?>" class="card-link">Bildquelle</a><br>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="card h-100">
          <img class="card-img-top" src="<?php echo $birds[3][1]; ?>" alt="Ein richtig schlechter Vogel">
          <div class="card-body">
            <h2 class="card-title"><?php echo $birds[3][0]; ?></h2>
            <span class="badge badge-secondary"><span class="badge badge-light"><?php echo $birds[3][4]; ?></span> Views am <?php echo $birds[3][3]; ?></span>
            <p class="card-text"><?php echo $birds[3][2]; ?></p>
            <a href="<?php echo $birds[3][5]; ?>" class="card-link">Wiki</a>
            <a href="<?php echo $birds[3][6]; ?>" class="card-link">Bildquelle</a><br>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="card h-100">
          <img class="card-img-top" src="<?php echo $birds[4][1]; ?>" alt="Ein richtig schlechter Vogel">
          <div class="card-body">
            <h2 class="card-title"><?php echo $birds[4][0]; ?></h2>
            <span class="badge badge-secondary"><span class="badge badge-light"><?php echo $birds[4][4]; ?></span> Views am <?php echo $birds[4][3]; ?></span>
            <p class="card-text"><?php echo $birds[4][2]; ?></p>
            <a href="<?php echo $birds[4][5]; ?>" class="card-link">Wiki</a>
            <a href="<?php echo $birds[4][6]; ?>" class="card-link">Bildquelle</a><br>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div id="imprint">
    <div class="jumbotron text-center col-12" style="margin-bottom:0">
      <p>Der <a href="https://podcast-ufo.fail/?p=886">Worstbird</a> des Tages ist der jeweils am wenigsten aufgerufenene
        Vogel aus der Kategorie
        <a href="https://de.wikipedia.org/wiki/Kategorie:Vogel_des_Jahres_(Deutschland)">
          "Vogel des Jahres (Deutschland)"</a> der
        <a href="https://de.wikipedia.org/wiki/Wikipedia:Hauptseite">deutschen Wikipedia</a>.
        Dies passiert über die
        <a href="https://www.mediawiki.org/wiki/API:Main_page/de">Mediawiki-API.</a>
      </p>
      <p>Quelle für Texte und Bilder:
      <ul>
      <?php
      for ($i=0; $i < 5; $i++) {
        echo "<li>" . $birds[$i][0] . " - Text: <a href=\"" . $birds[$i][5] . "\">" . $birds[$i][5] . "</a> Bild: <a href=\"" . $birds[$i][6] . "\">" . $birds[$i][6] . "</a></li>";
      }
      ?>
      </ul>
      </p>
      <p>Created for <a href="https://podcast-ufo.fail">🛸</a> by <a href="mailto:niko@worstbird.at">niko</a></p>
      <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This page is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.<br>
      <a href="cookies.php">Informationen zu Cookies</a>
    </div>
  </div>
</body>


</html>
