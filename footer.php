<?php 
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_text_color = get_theme_mod('footer_text_color', 'black');

    $footer_svg_color = get_theme_mod('footer_svg_color', '000000');
    $svg_color_poundless = substr($footer_svg_color, 1);

    //meme info que section hero
    $hero_email = get_theme_mod('hero_email', 'email@email.com'); 
    $hero_phone = get_theme_mod('hero_phone', '123-456-7890'); 
    $hero_adress = get_theme_mod('hero_adress', '123 rue adresse ville'); 
?>

<footer>
    <div class="piedpage global" style="color:<?= $footer_text_color ?>;">
        <section class="piedpage__s1">

                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>

                <style>
                    #menu-externe a{
                        color: <?= $footer_text_color ?>;
                    }
                </style>

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <ul>
                        <li><a href="https://www.google.com/maps/place/<?= $hero_adress ?>" 
                                target="_blank" rel="noreferrer noopener" style="color: <?= $footer_text_color ?>;">
                                    <?= $hero_adress ?>
                        </a></li>
                        <li><a href="" style="color: <?= $footer_text_color ?>;"><?= $hero_email ?></a></li>
                        <li><a href="" style="color: <?= $footer_text_color ?>;"><?= $hero_phone ?></a></li>
                    </ul>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form() ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <?= $footer_mission ?>
            </div>
        </section>
        <section class="piedpage__s2">
            <?php wp_nav_menu(array(
                'menu' => 'principal',
                'container' => 'nav',
                'container_class' => 'menu'
             )); ?>

             <style>
                footer #menu-principal-1 a{
                    color: <?= $footer_text_color ?>
                }   
             </style>
        </section>
        <section class="piedpage__s3">
        <div class="piedpage__s3__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $svg_color_poundless ?>" width="20" height="20" style="color: red;">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?= $svg_color_poundless ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=<?= $svg_color_poundless ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=<?= $svg_color_poundless ?>" width="20" height="20">
            </div>
        </section>


    </div>
</footer>
<?php wp_footer() ?>