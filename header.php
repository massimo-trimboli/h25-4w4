<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php bloginfo('normalize.css'); ?>
  <?php bloginfo('style.css'); ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="entete">
      <figure class="entete__logo">
        <img src="images/logo3.jpg" alt="logo" class="entete__logo__img">
      </figure>
      <label for="chk__burger" class="burger">
        <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
      </label>
      <input type="checkbox" class="chk__burger" id="chk__burger">
      <div class="entete__nav">
        <nav class="entete__menu">
          <ul class="menu">
            <li class="menu__li">
              <a class="menu__a" href="#">Aventure</a>
            </li>
            <li class="menu__li">
              <a class="menu__a" href="#">Sportive</a>
            </li>
            <li class="menu__li">
              <a class="menu__a" href="#">Culturel</a>
            </li>
            <li class="menu__li">
              <a class="menu__a" href="#">Zen</a>
            </li>
          </ul>
        </nav>
        <div class="entete__recherche">
          <form action="" class="recherche">
            <input type="text" placeholder="Recherche..." class="recherche__input">
            <img src="https://s2.svgbox.net/materialui.svg?ic=search&color=000" width="20" height="20" class="recherche__img"> 
          </form>
        </div>
      </div>
    </div>
  </header>