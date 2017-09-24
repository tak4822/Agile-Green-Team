<footer class='footerContainer'>
  <section class='footerContainer__form'>
      <h3> Keep up to date, Subscribe to our newsletter </h3>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method='POST'>
        <label for='nameInp'> Full Name 
        <input type='text' name='fullName' id='nameInp' class='form-input'>
        </label>
        <label for='nameInp'> Email Address
        <input type='email' name='email' id='emailInp' class='form-input'>
        </label>
        <input type='submit' value='Subscribe'>
      </form>
  </section> 
  <section class='footerContainer__links'>
    <h3> Contact Us </h3>
    <p> vanarts@vanarts.com </p>
    <p> 604-509-2093 </p>

    <div class='footerContainer__nav'>
         <a href="index.php" id='home'>Home
        </a>
        <a href="parties.php" id='parties'>Parties
        </a>
          <a href="services.php"  id='mp'>Who's My MP</a>
          <a href="rates.php"  id='compare'>Comparing Parties</a>

    </div>
   </section>
  
</footer>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="js/party.js"></script>
  <script src="js/mp.js"></script>
  <script src="js/compare.js"></script>
  <script src='js/main.js'></script>
</body>
</html>
