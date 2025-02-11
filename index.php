<?php 
/**
 * index.php est le modele par defaut
 * si aucun modele ne peut satisfaire la requete http, cest index qui affichera la page
 */
?>



<?php get_header(); ?>
<h1>index</h1>
  <section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="populaire__article">
            <h2 class="populaire__titre"><?php the_title(); ?></h2>
            <div class="populaire__contenu"><?php echo wp_trim_words(get_the_excerpt(), 20, "..."); ?></div>
          </article>
        <?php endwhile; endif; ?>
    </div>
  </section>
  
  <?php get_footer(); ?>