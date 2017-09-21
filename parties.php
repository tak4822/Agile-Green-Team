
<?php include "partials/head.php"; 
      include "partials/navbar.php" ?>
<body>
  <div  id='main'>
    <!-- <?php include "partials/header.php";
         createHeader(
          "parties",
          "Parties",
          "Click a picture to check a detail of parties information"
         );

    ?> -->

    <section class='pageHeader'> 
      <div class='pageHeader__text'>
        <h1> Parties </h1>
        <p> Click a picture to check a detail of parties information </p>
      </div>
    </section>
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
        <div class='partyInfo__memberContainer'>
          <h2> Main Members </h2>
          <article class='partyInfo__member member0'>
            <img src='img/fff.png' alt='an image of'>
            <div class='member__name'>
              <h4>Andrew Scheer</h4>
              <p class='member__title'>Leader of the Official Opposition</p>
            </div>
          </article>
          <article class='partyInfo__member member1'>
            <img src='img/fff.png' alt='an image of'>
            <div class='member__name'>
              <h4>Andrew Scheer</h4>
              <p class='member__title'>Leader of the Official Opposition</p>
            </div>
          </article>
          <article class='partyInfo__member member2'>
            <img src='img/fff.png' alt='an image of'>
            <div class='member__name'>
              <h4>Andrew Scheer</h4>
              <p class='member__title'>Leader of the Official Opposition</p>
            </div>
          </article>
          <article class='partyInfo__member member3'>
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
            <h3> Senate </h3>
            <div class='seatContainer__bar'>
              <div class='senate__seats'>

              </div>
            </div>
          </div>

          <div class='seatContainer__title'>
          <h3> House Of Commons </h3>
            <div class='seatContainer__bar'>
              <div class='hoc__seats'>


              </div>
            </div>
          </div>
        </article>




        <section class='partyInfo__policies'>
          <h2>Main Policies</h2>
          <!-- <article class='partyInfo__member member4'>
            <img src='img/fff.png' alt='an image of'>
            <div class='member__name'>
              <h4>Andrew Scheer</h4>
              <p class='member__title'>Leader of the Official Opposition</p>
            </div>
          </article> -->

        </section>

          




          <!-- <h3 class='partyInfo__leader'>Andrew Scheer</h3>
          <p class='partyInfo__title'>Leader of the Official Opposition </p>
        </div>
        
        <h2 class='partyInfo__policies'> Policies </h2> 

        <article class='policyItem'>
          <h3> Education </h3>
          <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam earum ipsum, eveniet praesentium itaque ad amet tempore, nemo maiores perspiciatis ipsa animi ducimus. Iure, dolorem debitis voluptatibus repellat itaque suscipit.</p>
        </article> -->



        <!-- <article class="partyInfo__item" id='history'>
          <h2>The future of Canada depends on your vote</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sed tenetur harum quis totam excepturi porro qui beatae officia, voluptate unde accusamus delectus, tempore dolore odit laborum facilis quaerat velit? </p>
        
        </article> -->
        <!-- <article class="partyInfo__item" id='policies'>
          <h2>Educate yourself and vote based on what matters to you</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sed tenetur harum quis totam excepturi porro qui beatae officia, voluptate unde accusamus delectus, tempore dolore odit laborum facilis quaerat velit? </p>
        
        </article> -->
      </section>
  </main>
</div>

<?php include "partials/footer.php" ?>