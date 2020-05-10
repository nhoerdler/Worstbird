<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Worstbird - Cookies</title>
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
    <div class="jumbotron" style="margin-bottom:0">
      <div class="page-header">
        <h1>WORSTBIRD</h1>
      </div>
      <h5>Cookies</h5>
    </div>
    <div class="container">
      <p><a href="/">Zurück zu Worstbird</a></p>
      <p>Um die Seite worstbird.at schöner aussehen zu lassen, benutzt sie bestimmte Bibliotheken, die <a href="https://www.cookiesandyou.com/">Cookies</a> verwenden:</p>
      <p>
        <a href="https://www.bootstrapcdn.com/privacy-policy/">Bootstrap CDN</a><br>
        <a href="https://www.cloudflare.com/cookie-policy/">Cloudflare</a><br>
        <a href="https://developers.google.com/speed/libraries/terms">Google Hosted Libraries</a>
      </p>
      <p><a href="." onclick="document.cookie='cookiebar=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/'; setupCookieBar(); return false;">Wenn du das nicht mehr willst, dann drücke hier.</a></p>
      <p>Bei Fragen zu Cookies melde dich einfach unter <a href="mailto:niko@worstbird.at?subject=Cookies">niko@worstbird.at</a>
    </div>
</body>
