<?php $hero_author = get_theme_mod('hero_author', 'Default Title'); 
      $hero_background = get_theme_mod('hero_background', 'Default Title');
      $hero_text_color = get_theme_mod('hero_text_color', 'black');
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
                info@cmaisonneuve.qc.ca
            </a>
            <button class="hero__bouton">
                Inscription
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
            <p class="author">Autheur: <?php echo $hero_author ?></p>
        </div>
    </section>