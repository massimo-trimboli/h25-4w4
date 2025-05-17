<?php
/**
 *  index.php est le modèle par défaut
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page
 */
?>
<?php get_header() ?>
<h1 class="hidden">single.php</h1>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
            <?php
                    //permet dafficher la petite image (thumbnail) de larticvle quon appel image mise en avant
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('medium'); 
                        }
                    ?>
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <p>offert par: <?php if(get_field("nom_auteur")){echo the_field("nom_auteur");} else {echo "PHP Airlines";}  ?></p>
                <p> à partir du  <?php if(get_field("date_publication")){echo the_field("date_publication");} else {echo "11 septembre 2001";}  ?></p>
                <div class="populaire__contenu"><?php the_content(); ?></div>
                <p>température maximum: &nbsp<?php echo the_field("temperature_maximum") ?>&#8451;</p>
                <p>température minimum: <?php echo the_field("temperature_minimum") ?>&#8451;</p>
                <div class="carte__contenantBoutons">
                    <?php categorie_par_destination("populaire"); ?>
                </div>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>