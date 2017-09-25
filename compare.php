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
    <section class='compare__filter'>
        <!-- FILTER -->
        <h2> Which parties would you like to compare? </h2>
        <!--CONSERVATIVE -->
        <label for='check--blue' class='party__label' id='blue'>Conservative</label>
        <input type='checkbox' class='party__input' name='party' value='Conservative' id='check--blue'>
        <!-- GREEN PARTY -->
        <label for='check--green' class='party__label' id='green'>Liberal</label>
        <input type='checkbox' class='party__input' name='party_input' value='Green' id='check--green'>
        <!--LIBERAL PARTY -->
        <label for='check--red' class='party__label' id='red'>Green</label>
        <input type='checkbox' class='party__input' name='party_input' value='Liberal' id='check--red'>
        <!--NDP PARTY -->
        <label for='check--orange' class='party__label' id='orange'>NDP</label>
        <input type='checkbox' class='party__input' name='party_input' value='NDP' id='check--orange'>  <br>

        <!--POLICY FILTER -->
        <h2> Which policies would you like to compare? </h2>
        <!--YOUTH-->
        <label for='youth__input' class='policy__label' id='youth__label'>Youth </label>
        <input type='checkbox' class='policy__input' name='policy' value='Youth' id='youth__input'>
        <!--MARIJUANA-->
        <label for='marijuana__input' class='policy__label' id='marijuana__label'>Marijuana </label>
        <input type='checkbox' class='policy__input' name='policy' value='Marijuana' id='marijuana__input'>
        <!--FIRST NATIONS-->
        <label for='first_nations__input' class='policy__label' id='first_nations__label'>First Nations</label>
        <input type='checkbox' class='policy__input' name='policy' value='First Nations' id='first_nations__input'>
        <!--HOUSING-->
        <label for='housing__input' class='policy__label' id='housing__label'>Housing</label>
        <input type='checkbox' class='policy__input' name='policy' value='Housing' id='housing__input'>
        <!--HEALTH-->
        <label for='health__input' class='policy__label' id='health__label'>Health</label>
        <input type='checkbox' class='policy__input' name='policy' value='Health' id='health__input'>
        <!--ENVIRONMENT-->
        <label for='environment__input' class='policy__label' id='environment__label'>Environment</label>
        <input type='checkbox' class='policy__input' name='policy' value='Environment' id='environment__input'>
        <!--PRIVACY-->
        <label for='privacy__input' class='policy__label' id='privacy__label'>First Nations</label>
        <input type='checkbox' class='policy__input' name='policy' value='privacy' id='privacy__input'>
        <!--VETERAN-->
        <label for='veteran__input' class='policy__label' id='veteran__label'>Veteran</label>
        <input type='checkbox' class='policy__input' name='policy' value='Veteran' id='veteran__input'>
        <!--PIPELINE -->
        <label for='pipeline__input' class='policy__label' id='pipeline__label'>Pipeline</label>
        <input type='checkbox' class='policy__input' name='policy' value='Pipeline' id='pipeline__input'>
    </section>

    <section class='compare__policies'>
        <article class='compare__policies--red'></article>
        <article class='compare__policies--blue'></article>
        <article class='compare__policies--orange'></article>
        <article class='compare__policies--green'></article>

    </section>





<?php include "partials/footer.php" ?>
