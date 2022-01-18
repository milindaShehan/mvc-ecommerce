<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="./static/materialize/js/materialize.js"></script>
  <link rel="stylesheet" href="./static/css/base.css">
</head>

<?php 
// sessions

?>

<div class="nav-wrapper" style="height: 100px">
  <nav style="height: 100px;">
    <div class="nav-wrapper grey darken-4">
      <a href="index.php"><img src = "./static/logo.svg" alt="logo" id="logo" class="brand-logo glow-image" height="100"/></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class='login' href="login.php">Login</a></li>
        <li><a class='signup' href="signup.php">Sign Up</a></li>
      </ul>
    </div>
  </nav>
</div>

<script>
  // sticky nav
  $(document).ready(function(){$(window).scroll(function() { if($(window).scrollTop()>150){$('nav').addClass('sticky-nav');}})});

  // underline current page
  var path = window.location.pathname;
  var page = path.split("/").pop().split(".")[0];

  var links = document.getElementsByClassName(page);
  if (links[0] != null) links[0].classList.add("underline");
</script>
</html>