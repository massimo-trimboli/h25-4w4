<?php
/** 
 * modèle front-page.php permet d'afficher la page d'accueil
 * 
*/
?>

<?php get_header() ?>
<h1 class="hidden">front-page.php</h1>
<!-- ///////////////////// section hero -->
    <?php get_template_part("gabarit/hero") ?>
<!-- ////////////////////////// section populaire -->

    <section class="populaire">
        <div class="boiteflex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (in_category('galerie')){
                the_content();
            } else { ?>         
                <?php get_template_part("gabarit/carte"); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>

<!-- /////////////////////////////////////////////  section destination REST API -->
<?php categories_liste("destination") ?>
<section class="destination global">
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div data-method="categorie" class="destination__list"></div>
</section>


<?php get_footer(); ?>
</body>
</html>