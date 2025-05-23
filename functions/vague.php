<?php
    //traitement des images svg
    function vague($couleur){

?>



<section class="wave">
    <svg
        class="wave--svg"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320">
            <path fill="<?= $couleur ?>"
            fill-opacity="1"
            d="M0,128L40,144C80,160,160,192,240,186.7C320,181,400,139,480,122.7C560,107,640,117,720,133.3C800,149,880,171,960,181.3C1040,192,1120,192,1200,192C1280,192,1360,192,1400,192L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
</section>


<?php } ?>


<?php 
    //nouvelle fonction vague pour exam- page template pays
    function vague2($couleur_haut, $couleur_bas){
?>

<section class="wave">
    <svg
        class="wave--svg"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320">
            <path fill="<?= $couleur_haut ?>"
            fill-opacity="1"
            d="M0,128L40,144C80,160,160,192,240,186.7C320,181,400,139,480,122.7C560,107,640,117,720,133.3C800,149,880,171,960,181.3C1040,192,1120,192,1200,192C1280,192,1360,192,1400,192L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
</section>

<?php } ?>