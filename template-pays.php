<?php
/*
Template Name: Template pays
*/
    get_header()
?>

<section class="pays">
    <div class="global">
        <?php if(have_posts()): ?>
       <h1><?php the_title(); ?></h1>
       <h3>Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de <span class="gras">destinations incroyables</span>, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.</h3>
        <?php the_content(); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer() ?>