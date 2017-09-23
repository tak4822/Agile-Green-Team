<?php include "partials/head.php"; ?>

<body>
  <?php
    include "partials/header.php";
    createHeader(
      "mp",
      "MP's",
      "Choose provinces to see MPs. Check MP’s in your province."
    );
  ?>
  <div class="mpMap__provNav__mobile">
    <select id="mpMap__provNav__select">
      <option class="mpMap__prov__option" value="BC">British Columbia</option>
      <option class="mpMap__prov__option" value="alberta">Alberta</option>
      <option class="mpMap__prov__option" value="saskatchewan">Saskatchewan</option>
      <option class="mpMap__prov__option" value="manitoba">Manitoba</option>
      <option class="mpMap__prov__option" value="ontario">Ontario</option>
      <option class="mpMap__prov__option" value="quebec">Quebec</option>
      <option class="mpMap__prov__option" value="newBrunswick">New Brunswick</option>
      <option class="mpMap__prov__option" value="novaScotia">Nova Scotia</option>
      <option class="mpMap__prov__option" value="princeEdward">Prince Edward Island</option>
      <option class="mpMap__prov__option" value="newfoundland">Newfoudland and Labrador</option>
      <option class="mpMap__prov__option" value="yukon">Yukon</option>
      <option class="mpMap__prov__option" value="northwest">Northwest Territories</option>
      <option class="mpMap__prov__option" value="nunavut">Nunavut</option>
    </select>
  </div>


  <div class="mpMap__container">
    <div class="mpMap__provNav">
      <ul>
        <li class="mpMap__provNav__list" data-prov="BC">British Columbia</li>
        <li class="mpMap__provNav__list" data-prov="alberta">Alberta</li>
        <li class="mpMap__provNav__list" data-prov="saskatchewan">Saskatchewan</li>
        <li class="mpMap__provNav__list" data-prov="manitoba">Manitoba</li>
        <li class="mpMap__provNav__list" data-prov="ontario">Ontario</li>
        <li class="mpMap__provNav__list" data-prov="quebec">Quebec</li>
        <li class="mpMap__provNav__list" data-prov="newBrunswick">New Brunswick</li>
        <li class="mpMap__provNav__list" data-prov="novaScotia">Nova Scotia</li>
        <li class="mpMap__provNav__list" data-prov="princeEdward">Prince Edward Island</li>
        <li class="mpMap__provNav__list" data-prov="newfoundland">Newfoudland and Labrador</li>
        <li class="mpMap__provNav__list" data-prov="yukon">Yukon</li>
        <li class="mpMap__provNav__list" data-prov="northwest">Northwest Territories</li>
        <li class="mpMap__provNav__list" data-prov="nunavut">Nunavut</li>
      </ul>
    </div>
    <?php include "partials/svg.php"; ?>
    <div class="mpMap__islands__container">
      <?php include "partials/sm-svg.php"; ?>
    </div>
  </div>
  <div class="mpList__container">

    <div class="mpList__party liberal">
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
