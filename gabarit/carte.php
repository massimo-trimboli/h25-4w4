<?php
    /**
     * gabarit permettant dafficher une carte
     */
?>






<article class="carte carte--grande">
                <figure class="carte__image">
                    <!-- <img src="images/img1.jpg" alt="Image de voyage"> -->
                    <?php
                    //permet dafficher la petite image (thumbnail) de larticvle quon appel image mise en avant
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail'); 
                        }
                    ?>
                </figure>
                <div class="carte__contenu">
                    
                    <h2 class="carte__titre"><?php the_title(); ?></h2>
                    <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
                    <div class="carte__contenantBoutons">
                        <a href="<?php the_permalink() ?>" class="carte__bouton carte__bouton--actif">suite</a>
                        <?php the_category() ?>
                    </div>
                    <p>température maximum: &nbsp<?php echo the_field("temperature_maximum") ?>&#8451;</p>
                    <p>température minimum: <?php echo the_field("temperature_minimum") ?>&#8451;</p>
                </div>
            </article>