<!DOCTYPE html>
<!-- ICS2O-Unit5-01-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Random number guess, PHP" />
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
  <title>Random number guess, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Random number guess, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/dice.gif" alt=" GIF of a die with a flag coming out of it." width="250" />
      </div>
      <div class="page-content-php">
        <div id="user-info">

          <?php
          // input
          $randomNumber = random_int(1, 6);
          $userNumber  = intval($_GET["user-number"]);

          echo "Your number was " . $userNumber . ".";
          echo "<br />";
          echo "The right number is " . $randomNumber . ".";
          echo "<br />";

          if ($userNumber === $randomNumber) {
            echo "You guessed the RIGHT number!";
          }

          if ($userNumber !== $randomNumber) {
            echo "You guessed the wrong number.";
          }
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