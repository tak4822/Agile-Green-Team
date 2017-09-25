<div class="footer__stopper"></div>
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


        <div class="fotter__form__field">
          <label for='nameInp'>Email :</label>
          <input type='email' name='email' id='emailInp' class='form-input' placeholder="Fill in your Email">
        </div>


        <input class="footer__forn__btn" type='submit' value='Subscribe'>
      </form>
    </section>

    <section class='footerContainer__contact'>
      <div class="contact__eachWrap">
        <p class="contact__title">Tell</p>
        <a href="tell:+10009998877" class="contact__info">+1 000-999-8877</a>
      </div>
      <div class="contact__eachWrap">
        <p class="contact__title">Email</p>
        <a href="mailto:vanarts@vanarts.com" class="contact__info">vanarts@vanarts.com</a>
      </div>
      <div class="contact__eachWrap">
        <p class="contact__title">Address</p>
        <p class="contact__info__address">570 Dunsmuir St, Suite 600 Vancouver, BC Canada, V6B 1Y1</p>
      </div>
    </section>

  </div>
  <div class="copyRight-wrapper"><p class="copyRight">Vanarts Agile projects By Green Team</p></div>

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
