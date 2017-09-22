<?php include "partials/head.php"; ?>

<body>
  <?php
    include "partials/header.php";
    createHeader(
      "mp",
      "MP's",
      "Click the map to see MPs. Check MP’s in your province."
    );
  ?>
  <div class="mpMap__provNav">
    <ul>
      <li class="mpMap__provNav__list">British Columbia</li>
      <li class="mpMap__provNav__list">Alberta</li>
      <li class="mpMap__provNav__list">Saskatchewan</li>
      <li class="mpMap__provNav__list">Manitoba</li>
      <li class="mpMap__provNav__list">Ontario</li>
      <li class="mpMap__provNav__list">Quebec</li>
      <li class="mpMap__provNav__list">New Brunswick</li>
      <li class="mpMap__provNav__list">Nova Scotia</li>
      <li class="mpMap__provNav__list">Prince Edward Island</li>
      <li class="mpMap__provNav__list">Newfoudland and Labrador</li>
      <li class="mpMap__provNav__list">Yukon</li>
      <li class="mpMap__provNav__list">Northwest Territories</li>
      <li class="mpMap__provNav__list">Nunavut</li>
    </ul>
  </div>
  <div class="mpMap__container">
    <?php include "partials/svg.php"; ?>
    <div class="mpMap__islands__container">
      <?php include "partials/sm-svg.php"; ?>
    </div>
  </div>
  <div class="mpList__container">

    <div class="mpList__party leberal">
      <h3 class="mpList__head">Liberal</h3>
      <ul class="mpList__list">
        <!-- put mps's name here  -->
      </ul>
    </div>

    <div class="mpList__party conservative">
      <h3 class="mpList__head">Concervative</h3>
      <ul class="mpList__list">
        <!-- put mps's name here  -->
      </ul>
    </div>

    <div class="mpList__party ndp">
      <h3 class="mpList__head">NDP</h3>
      <ul class="mpList__list">
        <!-- put mps's name here  -->
      </ul>
    </div>

    <div class="mpList__party green">
      <h3 class="mpList__head">Green</h3>
      <ul class="mpList__list">
        <!-- put mps's name here  -->
      </ul>
    </div>
  </div>

</body>

<?php include "partials/footer.php" ?>
