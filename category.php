<?php
/**
 *  index.php est le modèle par défaut
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page
 */
?>
<?php get_header() ?>
<h1 class="hidden">category.php</h1>

<section class="populaire">
        <div class="boiteflex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>       
                <?php get_template_part("gabarit/carte"); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>

<?php get_footer(); ?>
</body>
</html>