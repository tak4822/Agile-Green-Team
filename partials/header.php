<?php
function createHeader($pagename,$pageTitle,$pageDescription){
  //pagename = [party,mp, compare] for bg color
  echo '<div class="header__container '.$pagename.'">';
    echo '<div class="logo__container">';
      echo '<img src="" alt="make you vote logo">';
    echo '</div>';
    include "partials/navbar.php";
    echo '<h2 class="pagetitle">'.$pageTitle.'</h2>';
    echo '<p class="page-desc">'.$pageDescription.'</p>';
  echo '</div>';
}
?>
