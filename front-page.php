<?php 
/**
 * index.php est le modele par defaut
 * si aucun modele ne peut satisfaire la requete http, cest index qui affichera la page
 */
?>



<?php get_header(); ?>

  <section class="hero">
    <div class="hero__contenu global">
      <h1 class="hero__titre">Voyagez Autrement avec PFK Voyages</h1>
      <p class="hero__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus sed saepe cupiditate sit nam repellendus facilis eos porro, praesentium tenetur rerum assumenda eligendi numquam alias, officiis enim, corrupti ad voluptate? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum error, doloribus dolor magni at tempore amet. Unde eligendi ipsum, nemo optio, maiores quasi ipsa adipisci praesentium voluptatum, amet a repellendus.</p>
      <a href="" class="hero__courriel">
        info@maisonneuve.qc.ca
      </a>
      <button class="hero__bouton">
        inscriptions
      </button>
      <div class="hero__icone-apps">
        <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="32" height="32">
        <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000000" width="32" height="32">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=000000" width="32" height="32">
      </div>
    </div>
    </section>

  <section class="galerie">
    <figure class="galerie__fig">
      <img src="" alt="">
    </figure>
  </section>

  <section class="promotion">
    <div class="carte carte--grande">
      <figure class="carte__image">
        <img src="images/voyage.jpg" alt="Image de voyage">
      </figure>
      <div class="carte__contenu">
        <h2 class="carte__titre">Destination de rêve</h2>
        <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
        <button class="carte__bouton carte__bouton--actif">Réserver</button>
      </div>
    </div>
  </section>

  <section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="populaire__article">
            <h2 class="populaire__titre"><?php the_title(); ?></h2>
            <div class="populaire__contenu"><?php echo wp_trim_words(get_the_excerpt(), 10, "..."); ?></div>
          </article>
        <?php endwhile; endif; ?>
    </div>
  </section>
  
  <?php get_footer(); ?>