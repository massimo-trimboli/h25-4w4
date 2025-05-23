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
       <!-- champs ACF -->
       <p>
            Conférencier: <?= the_field("conferencier"); ?>
            <br>
            lieu de l'évenemetn:  <?= the_field("lieu"); ?>
            <br>
            date de l'évenemetn: <?= the_field("date"); ?>
        </p>
        <?php the_content(); ?>
        <?php endif; ?>
    </div>
</section> 

<?php
    $color = "#adffad";
    vague2("white", $color); 
?>

<section class="destination pays" style="background-color: <?= $color ?>;">
    <?php //categories_liste("destination") ?>
    <?php pays_liste(); ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div data-method="search" class="destination__list"></div>
</section>

<?php get_footer() ?>