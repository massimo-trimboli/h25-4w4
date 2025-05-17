<?php
    function iconesSociaux($svg_color_poundless){
        $nbSvg = get_theme_mod('hero_nb_icone_svg', '3'); 
        for($k=0; $k<$nbSvg; $k++){
            $lien_code_svg[$k] = get_theme_mod('hero_svg' . $k, 'Default Title');
            $lien_svg[$k] = get_theme_mod('hero_svg_link' . $k, 'Default Title');
?>


<a href="<?= $lien_svg[$k]; ?>">
    <img src="<?= $lien_code_svg[$k] ?>&color=<?= $svg_color_poundless ?>" width="20" height="20" style="color: red;">
</a>

<?php } }?>