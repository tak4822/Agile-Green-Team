<?php include "partials/head.php";
    include "partials/navbar.php"; ?>

<body id='comparePage'>
  <?php
    include "partials/header.php";
    createHeader(
      "compare",
      "COMPARE",
      "Click the policy which you like, and see your preference.<br> Use filter so that you could compare parties that you consider."
    );
  ?>
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
    <h2>Youth</h2>
      <div class='compare__policies--youth'>

      </div>
      <h2>Marijuana</h2>

      <div class='compare__policies--marijuana'>


        </div>
      <h2>First Nations </h2>
      <div class='compare__policies--firstnations'>
        </div>
      <h2>Housing </h2>
      <div class='compare__policies--housing'>

        </div>
      <h2>Environment </h2>
      <div class='compare__policies--environment'>

      </div>
      <h2>Privacy </h2>
      <div class='compare__policies--privacy'>

      </div>
      <h2>Veterans</h2>
      <div class='compare__policies--veteran'>

      </div>
      <h2>Pipeline</h2>
      <div class='compare__policies--veteran'>

      </div>

    </section>





<?php include "partials/footer.php" ?>
