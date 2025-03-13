<?php $hero_author = get_theme_mod('hero_author', 'Default Title'); 
      $hero_background = get_theme_mod('hero_background', 'Default Title');
      $hero_email = get_theme_mod('hero_email', 'email@email.com'); 
      $hero_phone = get_theme_mod('hero_phone', '123-456-7890'); 
      $hero_adress = get_theme_mod('hero_adress', '123 rue adresse ville'); 
      
      $hero_text_color = get_theme_mod('hero_text_color', 'black');
      $hero_svg_color = get_theme_mod('hero_svg_color', '000000');
      $svg_color_poundless = substr($hero_svg_color, 1);
?>
<section class="hero" style="background-image: url(<?= $hero_background ?>); background-repeat: no-repeat; color: <?= $hero_text_color ?>;">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                <?php  bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
            <?php  bloginfo('description'); ?>
            </p>
            <a href="" class="hero__courriel">
                <?= $hero_email ?>
            </a>
            <a href="" class="hero__phone">
                <?= $hero_phone ?>
            </a>
            <a href="https://www.google.com/maps/place/<?= $hero_adress ?>" target="_blank" rel="noreferrer noopener" class="hero__adress">
                <?= $hero_adress ?>
            </a>
            <button class="hero__bouton">
                Inscription
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $svg_color_poundless ?>" width="20" height="20" style="color: red;">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?= $svg_color_poundless ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=<?= $svg_color_poundless ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=<?= $svg_color_poundless ?>" width="20" height="20">
            </div>
            <p class="author">Autheur: <?= $hero_author ?></p>
        </div>
    </section>