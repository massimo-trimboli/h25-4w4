<?php
/** 
 * modèle front-page.php permet d'afficher la page d'accueil
 * 
*/
?>

<?php get_header() ?>
<h1 class="hidden">404.php</h1>
    
<?php //$hero_author = get_theme_mod('hero_author', 'Default Title'); 
      //$hero_email = get_theme_mod('hero_email', 'email@email.com'); 
      //$hero_phone = get_theme_mod('hero_phone', '123-456-7890'); 
      //$hero_adress = get_theme_mod('hero_adress', '123 rue adresse ville'); 
      
      //$hero_background = get_theme_mod('hero_background', 'Default Title');
      $p404_background = get_theme_mod('p404_background', 'Default Title');

      $p404_title = get_theme_mod('p404_title', 'Default Title');
      $p404_subtitle = get_theme_mod('p404_subtitle', 'Default Title');
      
      $p404_text_color = get_theme_mod('p404_text_color', 'black');
      //$hero_text_color = get_theme_mod('hero_text_color', 'black');
      //$hero_svg_color = get_theme_mod('hero_svg_color', '000000');
      //$svg_color_poundless = substr($hero_svg_color, 1);
?>
<section class="hero e404" style="background-image: url(<?= $p404_background ?>); background-repeat: no-repeat; background-position: center; color: <?= $p404_text_color ?>;">
        <div class="hero__contenu e404 global">
            <h1 class="hero__titre">
                <?= $p404_title ?>
            </h1>
            <p class="hero__description">
            <?= $p404_subtitle ?>
            </p>

            <a href="<?= site_url() ?>" class="retour">
                <button class="hero__bouton retour" style="background-color: <?= $p404_text_color ?>; border:none; border-radius: 3px;">Retour à l'aceuil</button>
            </a>

            <?php wp_nav_menu(array(
          'menu' => 'menu404',
          'container' => 'div',
          'container_class' => 'retour'
        )); ?>

                <div class="e404 recherche">
                    <?php get_search_form() ?>
                </div>
        <style>
            .hero__contenu.e404 .retour .menu li{
                font-size: 1rem;
                padding: 13px;
                color: aqua;
                background-color: <?= $p404_text_color ?>;
                margin: 15px;

                transition: filter .5s;
            }
            .e404.recherche .recherche__bouton{
                display: none;
            }
            .e404.recherche input.recherche__input{
                border: none;
                border-bottom: 5px solid <?= $p404_text_color ?>;
                width: auto;
                height: 2.2rem;
                background-color: rgba(0, 0, 0, 0);
            }
            .e404.recherche input.recherche__input::placeholder{
                color: <?= $p404_text_color ?>;
                opacity: 1;
                font-size: 1.6rem;
            }
        </style>
        </div>
    </section>

<?php get_footer(); ?>
</body>
</html>