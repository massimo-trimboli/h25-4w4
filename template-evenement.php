<?php
/*
Template Name: Template Événement
*/
?>
<?php get_header(); ?>
<h1>Page Événement</h1>
<p>Contenu spécifique à votre événement.</p>

<section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <p class="populaire__contenu"><?php the_content(); ?></p>
                <h2>titre: <?= the_field("titre_evenement") ?></h2>
                <p><?= the_field("description_evenement") ?></p>
                <p>Le conférencier: <?= the_field("conferencier_evenement") ?></p>
                <p>Lieu: <?= the_field("lieu_evenement") ?></p>
                <p>Date: <?= the_field("date_evenement") ?></p>
            </article>
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