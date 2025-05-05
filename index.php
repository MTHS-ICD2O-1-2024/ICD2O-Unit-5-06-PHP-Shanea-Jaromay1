<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8" />
  <meta name="description" content="Multiply Numbers, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-yellow.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Multiply Numbers, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Multiply Numbers, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/multiplication table.jpg" alt="Multiplication table image" width="500" />
      </div>
      <br />
      <div class="page-content-guide">Please enter two numbers. </div>
      <div class="page-content">
        <form action="./answer.php" method="GET">
          <label>Number: </label>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="number-one" />
            <label class="mdl-textfield__label" for="number-one">First number here...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <label> X </label>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="number-two" />
            <label class="mdl-textfield__label" for="number-two">First number here...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
      </div>
      <br />
      <!-- Accent-colored raised button with ripple -->
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
        type="submit">
        Check
      </button>
      </form>
  </div>
  </main>
  </div>
</body>


</html>