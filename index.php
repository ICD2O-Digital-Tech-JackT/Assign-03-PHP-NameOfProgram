<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
     <title>Calculating area and perimeter of a hexagon PHP</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Css -->
    <link rel="stylesheet" href="/css/style.css"> 

    <!-- Mdl -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-light_green.min.css" />
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Text -->
    <?php
      echo "<h1>Calculating the area and perimeter of a hexagon in PHP</h1>";
      echo "<br>";
    ?>
    <img src="./images/HexagonImg.png">
    <!-- Action -->
    <form action="./calculations.php" method="post" target="calculations">
      <!-- Labels -->
      <label for=lblBase>SideA (cm):</label>
      <input type="number" step=0.000001 id="side" placeholder="Enter length of side A (cm)" name="side"><br><br>
      <!-- Calculate button -->
      <button value="Calculate Area and perimeter" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Calculate
      </button>
    </form>
    <?php
    echo "<br>"
    ?>
    <!-- Frame to display the results -->
    <iframe id="calculations" name="calculations">
    </iframe>
  </body>
</html>