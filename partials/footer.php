<div class="footer__stopper"></div>
<footer class="footerContainer">
  <div class="footer__wrapper">
    <section class="footerContainer__nav">
      <a class="footerNav__list" href="index.php">Home</a>
      <a class="footerNav__list" href="parties.php">Parties</a>
      <a class="footerNav__list" href="services.php">Who's My MP</a>
      <a class="footerNav__list" href="rates.php">Comparing Parties</a>
    </section>
    <section class="footerContainer__form">
      <h3 class="footer__form__title">NewsLetter</h3>
      <p class="footer__form__desc">Keep up to date, Subscribe to our newsletter </p>
      <form action="partials/mail/mail.php" method="POST">
        <div class="fotter__form__field">
          <label for="nameInp">Name :</label>
          <input type="text" name="fullName" id="nameInp" class="form-input" placeholder="Fill in your full name">
        </div>

        <div class="fotter__form__field">
          <label for="nameInp">Email :</label>
          <input type="email" name="email" id="emailInp" class="form-input" placeholder="Fill in your Email">
        </div>
        <input type="hidden" name="name_2">

        <input class="footer__forn__btn" type="submit" value="Subscribe">
      </form>
    </section>

    <section class="footerContainer__contact">
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
  <script src="js/main.js"></script>
</body>
</html>
