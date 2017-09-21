
<?php include "partials/head.php"; 
      include "partials/navbar.php" ?>
<body>
  <div  id='main'>

    <section class='pageHeader'> 
      <div class='pageHeader__text'>
        <h1> Parties </h1>
        <p> Click a picture to check a detail of parties information </p>
      </div>
    </section>
    <main class='partyPageContainer'>
        <section class='partyContainer'>
        <article class='partyContainer__item'>
            <img src='img/andrew-scheer.jpg' class='partyContainer__img' data-index=1>
            <div class='partyContainer__img--overlay' id='blue' data-index=1>
              <h2> Conservative</h2>
            </div>
          </article>
          <article class='partyContainer__item'>
          <img src='img/justin-trudeau.jpg' class='partyContainer__img' data-index=0>
            <div class='partyContainer__img--overlay' id='red' data-index=0>
              <h2> Liberal</h2>
            </div>
          </article>
        
          <article class='partyContainer__item'>
            <img src='img/elizabeth-may.jpg' class='partyContainer__img' data-index=2>
            <div class='partyContainer__img--overlay' id='green' data-index=2>
              <h2> Green</h2>
            </div>
          </article>
          <article class='partyContainer__item'>
            <img src='img/thomas-mulcair.jpg' class='partyContainer__img' data-index=3>
              <div class='partyContainer__img--overlay' id='orange' data-index=3>
              <h2> NDP</h2>
              </div><br>
          </article>
        </section>
  
      <section class='partyInfo'>

        <article class="partyInfo__item" id='history'>
          <h2>The future of Canada depends on your vote</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sed tenetur harum quis totam excepturi porro qui beatae officia, voluptate unde accusamus delectus, tempore dolore odit laborum facilis quaerat velit? </p>
        
        </article>
        <article class="partyInfo__item" id='policies'>
          <h2>Educate yourself and vote based on what matters to you</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sed tenetur harum quis totam excepturi porro qui beatae officia, voluptate unde accusamus delectus, tempore dolore odit laborum facilis quaerat velit? </p>
        
        </article>
      </section>
  </main>
</div>

<?php include "partials/footer.php" ?>