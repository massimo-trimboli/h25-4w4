<?php
/**
 *  index.php est le modèle pour afficher resultats de recherche
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page
 */
?>
<?php get_header() ?>
<h1 class="hidden">search.php</h1>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <p class="populaire__contenu"><?php echo wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
                <a href="<?php the_permalink() ?>" class="carte__bouton carte__bouton--actif">suite</a>
            </article>
            <?php endwhile; endif; ?> 
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>