<?php
    function categorie_par_destination($cat_a_retirer){
        //the_category();
        //print_r(get_categories("link_category"));
        //echo get_term_link($cat_a_retirer->id);
        
        // foreach(get_categories() as $cat){
        //     if($cat->slug == $cat_a_retirer)
        //     print_r($cat);
        // }
 ?>

    <ul class="post-categories">
        <?php foreach(get_categories() as $cat): ?>
        <?php if(in_category($cat->slug) && $cat->slug != $cat_a_retirer): ?>
        <li>
            <?php
                $lien = get_site_url();
                $lien = $lien . "/category/$cat->slug/";
            ?>
            <a href="<?= $lien ?>" rel="category tag" class="carte__bouton carte__bouton--actif">
                <?php echo $cat->slug; ?>
            </a>
        </li>
        <?php endif; endforeach; ?>
    </ul>
<?php } ?>