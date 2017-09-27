
<?php include "partials/head.php"; 
      include "partials/navbar.php" ?>
<body>
  <div  id='main'>
    <?php
         include "partials/header.php";
         createHeader(
           "party",
           "PARTIES",
           "Click an image of a party leader to see details of that party."
         );
    ?>
  <!-- <section class='pageHeader'> 
    <div class='pageHeader__text'>
      <h1> Parties </h1>
      <p> Click a picture to check a detail of parties information </p>
    </div>
  </section> -->
  <main class='partyPageContainer'>
    <div class='partyWrapper'>
      <section class='partyContainer'>
      <article class='partyContainer__item'>
          <img src='img/andrew-scheer.jpg' class='partyContainer__img' data-index=3>
          <div class='partyContainer__img--overlay' id='blue--overlay' data-index=3>
            <h2> Conservative</h2>
          </div>
        </article>
        <article class='partyContainer__item'>
          <img src='img/thomas-mulcair.jpg' class='partyContainer__img' data-index=2>
            <div class='partyContainer__img--overlay' id='orange--overlay' data-index=2>
            <h2> NDP</h2>
            </div><br>
        </article>      
        <article class='partyContainer__item'>
          <img src='img/elizabeth-may.jpg' class='partyContainer__img' data-index=0>
          <div class='partyContainer__img--overlay' id='green--overlay' data-index=0>
            <h2> Green</h2>
          </div>
        </article>
        <article class='partyContainer__item'>
        <img src='img/justin-trudeau.jpg' class='partyContainer__img' data-index=1>
          <div class='partyContainer__img--overlay' id='red--overlay' data-index=1>
            <h2> Liberal</h2>
          </div>
        </article>
      </section>
    </div>
  
  <section class='partyInfo'>
    <div class='partyInfo__logo'><img src='img/fff.png'></div>
    <div class='partyInfo__memberContainer'>
      <h2>Members </h2>
      <article class='partyInfo__member member0 borderedItem'>
        <img src='img/fff.png' alt='an image of'>
        <div class='member__name'>
          <h4>Andrew Scheer</h4>
          <p class='member__title'>Leader of the Official Opposition</p>
        </div>
      </article>
      <article class='partyInfo__member member1 borderedItem'>
        <img src='img/fff.png' alt='an image of'>
        <div class='member__name'>
          <h4>Andrew Scheer</h4>
          <p class='member__title'>Leader of the Official Opposition</p>
        </div>
      </article>
      <article class='partyInfo__member member2 borderedItem'>
        <img src='img/fff.png' alt='an image of'>
        <div class='member__name'>
          <h4>Andrew Scheer</h4>
          <p class='member__title'>Leader of the Official Opposition</p>
        </div>
      </article>
      <article class='partyInfo__member member3 borderedItem'>
        <img src='img/fff.png' alt='an image of'>
        <div class='member__name'>
          <h4>Andrew Scheer</h4>
          <p class='member__title'>Leader of the Official Opposition</p>
        </div>
      </article>
    </div>
    <article class='partyInfo__seatContainer'>
      <h2> Seats </h2>
      <div class='seatContainer__title'>
        <h3> Senate </h3> <p><span id='sen'> 0 </span>/105</p>
      </div>
        <div class='seatContainer__bar'>
          <div class='senate__seats'>

          </div>
        </div>
      <div class='seatContainer__title'>
        <h3> House Of Commons </h3><p><span id='hoc'> 0 </span> /338</p>
      </div>
        <div class='seatContainer__bar'>
          <div class='hoc__seats'>
          </div>
        </div>
      </div>
    </article>
    </section>
    <section class='partyInfo__policies'>
      <h2>Main Policies</h2>

      <article class='partyInfo__policy policy0 borderedItem'>
        <h3></h3>
        <p> </p> 
      </article>
      <article class='partyInfo__policy policy1 borderedItem'>
        <h3></h3>
        <p> </p> 
      </article>
      <article class='partyInfo__policy policy2 borderedItem'>
        <h3></h3>
        <p> </p> 
      </article>
      <article class='partyInfo__policy policy3 borderedItem'>
        <h3></h3>
        <p> </p> 
      </article>
    </section>

    <section class='partyInfo__history'>
      <h2>History </h2>
      <p class='borderedItem'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati excepturi maiores eos delectus quia, sapiente rem nam, natus corrupti iusto corporis illum molestiae rerum hic. Reprehenderit sapiente odit omnis numquam.</p>

    </section>
  </main>
</div>
<?php include "partials/footer.php" ?>