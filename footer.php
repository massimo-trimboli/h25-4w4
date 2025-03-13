<?php 
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_text_color = get_theme_mod('footer_text_color', 'black');
?>

<footer>
    <div class="piedpage global" style="color:<?= $footer_text_color ?>;">
        <section class="piedpage__s1">

                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere porro veniam vitae, tempore corporis omnis nam 
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <style>
                        #menu-externe a{
                            color: <?= $footer_text_color ?>;
                    }
                    </style>
                    <?php get_search_form() ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <?= $footer_mission ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>


    </div>
</footer>
<?php wp_footer() ?>