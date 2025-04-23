<!DOCTYPE html>
<!-- ICS2O-Unit5-01-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a sphere, PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Volume of a sphere, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a sphere, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/dice.gif" alt=" GIF of a die witha flag coming out of it." width="250" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $radiusOfSphere = $_GET["radius-of-sphere"];

          // process
          $volumeOfSphere = (4 / 3) * M_PI * $radiusOfSphere ** 3;

          // output
          echo "If the radius is " . $radiusOfSphere . " cm";
          echo "<br />";
          echo "Then the volume of the sphere will be " . $volumeOfSphere . " cm³.";
          ?>
        </div>
        <br />
        <div class="page-content-answer">
          <a href="./index.php">Return ...</a>
        </div>
    </main>
  </div>
</body>


</html>