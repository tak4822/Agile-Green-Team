<?php include "partials/head.php";
    include "partials/navbar.php"; ?>
<div class="overlay">
  <div class="chartmodal">
    <div class="modal-title-wrap">
      <p class="modal-title">Your Result</p>
      <p class="modal-title-small">You voted  <span class="num-of-vote"></span>/9</p>
    </div>

    <div class="chart">
      <canvas id="myChart"></canvas>
    </div>
    <div class="result-content">
      <div class="result-top">
        <p>Leberal: <span id="result-leberal" class="result-num">0</span>/9</p>
        <p>Conservative: <span id="result-con" class="result-num">0</span>/9</p>
        <p>NDP: <span id="result-ndp" class="result-num">0</span>/9</p>
        <p>Green: <span id="result-green" class="result-num">0</span>/9</p>
      </div>

      <p class="picked-party-text">Your party is <span id="picked-party" >Liberal</span></p>
      <a class="yourparty-link" href="">Check your party's website</a>
    </div>


  </div>
</div>
<body id='comparePage'>
  <?php
    include "partials/header.php";
    createHeader(
      "compare",
      "COMPARE",
      "Click the policy which you like, and see your preference.<br> Use filter so that you could compare parties that you consider."
    );
  ?>

  <main id='main'>
    <div class="result-button">
      <p class="result-text">Result</p>
    </div>
    <!-- FILTER -->
    <div class="compare__filter__wrap">
      <section class='compare__filter'>
          <div class="compare__filter__bigTitle">
            <img src="img/filter.svg" alt="compare parties filter icon">
            <h3>Filter</h2>
          </div>
          <!-- filter party -->
          <div class="filter__bgWhite">
            <h4 class="filter__title">Which <span class="green-strong">parties</span> would you like to compare? </h4>
            <div class="filter__party">
              <!--CONSERVATIVE -->
              <label class="filter__checkWrap">
                <input type="checkbox" name="party[]" value="blue" class="filter__input" checked>
                <span class="filter__parts">Conservative</span>
              </label>
              <!-- GREEN PARTY -->
              <label class="filter__checkWrap">
                <input type="checkbox" name="party[]" value="green" class="filter__input" checked>
                <span class="filter__parts">Green</span>
              </label>
              <!--LIBERAL PARTY -->
              <label class="filter__checkWrap">
                <input type="checkbox" name="party[]" value="red" class="filter__input" checked>
                <span class="filter__parts">Liberal</span>
              </label>
              <!--NDP PARTY -->
              <label class="filter__checkWrap">
                <input type="checkbox" name="party[]" value="orange" class="filter__input" checked>
                <span class="filter__parts">NDP</span>
              </label>
            </div>

            <!--POLICY FILTER -->
            <h4 class="filter__title"> Which <span class="green-strong">policies</span> would you like to compare? </h4>
            <div class="filter__policies">
              <!--YOUTH-->
              <label class="filter__checkWrap">
                <input type="checkbox" name="policies[]" value="youth" class="filter__input" checked>
                <span class="filter__parts">Youth</span>
              </label>

              <!--MARIJUANA-->
              <label class="filter__checkWrap">
                <input type="checkbox" name="policies[]" value="marijuana" class="filter__input" checked>
                <span class="filter__parts">Marijuana</span>
              </label>

              <!--FIRST NATIONS-->
              <label class="filter__checkWrap">
                <input type="checkbox" name="policies[]" value="firstnations" class="filter__input" checked>
                <span class="filter__parts">First Nations</span>
              </label>

              <!--HOUSING-->
              <label class="filter__checkWrap">
                <input type="checkbox" name="policies[]" value="housing" class="filter__input" checked>
                <span class="filter__parts">Housing</span>
              </label>

              <!--HEALTH-->
              <label class="filter__checkWrap">
                <input type="checkbox" name="policies[]" value="health" class="filter__input" checked>
                <span class="filter__parts">Health</span>
              </label>

              <!--ENVIRONMENT-->
              <label class="filter__checkWrap">
                <input type="checkbox" name="policies[]" value="environment" class="filter__input" checked>
                <span class="filter__parts">Enviroment</span>
              </label>

              <!--PRIVACY-->
              <label class="filter__checkWrap">
                <input type="checkbox" name="policies[]" value="privacy" class="filter__input" checked>
                <span class="filter__parts">Privacy</span>
              </label>

              <!--VETERAN-->
              <label class="filter__checkWrap">
                <input type="checkbox" name="policies[]" value="veteran" class="filter__input" checked>
                <span class="filter__parts">Veteran</span>
              </label>

              <!--PIPELINE -->
              <label class="filter__checkWrap">
                <input type="checkbox" name="policies[]" value="pipeline" class="filter__input" checked>
                <span class="filter__parts">Pipeline</span>
            </label>
          </div>

          </div>

      </section>
    </div>



    <section class='compare__policies'>
      <h2 class='youth'>Youth</h2>
      <div class='compare__policies--youth'>

      </div>
      <h2 class='marijuana'>Marijuana</h2>

      <div class='compare__policies--marijuana'>


        </div>
      <h2 class='firstnations'>First Nations </h2>
      <div class='compare__policies--firstnations'>
        </div>
      <h2 class='housing'>Housing </h2>
      <div class='compare__policies--housing'>

        </div>
      <h2 class='environment'>Environment </h2>
      <div class='compare__policies--environment'>

      </div>
      <h2 class='privacy'>Privacy </h2>
      <div class='compare__policies--privacy'>

      </div>

      <h2 class='health'>Health</h2>
      <div class='compare__policies--health'>

      </div>
      <h2 class='veteran'>Veterans</h2>
      <div class='compare__policies--veteran'>

      </div>
      <h2 class='pipeline'>Pipeline</h2>
      <div class='compare__policies--pipeline'>

      </div>

    </section>

  </main>



<?php include "partials/footer.php" ?>
