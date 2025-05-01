(function(){
    let lesBoutons = document.querySelectorAll(".radio-carousel");
    let lesSlides = document.querySelectorAll(".hero__carousel");

    //définir les animations ici
    let lesAnimations = [
        "spin-anim",
        "slot-machine-anim-y",
        "slot-machine-anim-x"
    ]

    //en allumer un au debut
    for(let uneSlide of lesSlides){
        uneSlide.classList.remove("carouselActif");
    }
    lesBoutons[0].checked = true;
    switchSlide(lesAnimations);

    //automatisation
    let interval = setInterval(function(){autoSwitch(lesAnimations);}, 30000);

    //rajouter le event listner
    for(let bouton of lesBoutons){
        bouton.addEventListener("change", function(){switchSlide(lesAnimations)});
    }


    //pour lanimation du titre lorse quon change de slide
    animationListner(lesAnimations);
})()

//fonction pour switcher automatiquement
function autoSwitch(lesAnimations){
    let lesBoutons = document.querySelectorAll(".radio-carousel");

    //trouver bouton checked
    let id;
    for(let bouton of lesBoutons){
        if(bouton.checked){
            id = bouton.dataset.id
        }
    }
    
    // trouver prochain bouton
    id++
    if(id == lesBoutons.length){
        id = 0;
    }

    //check le prochain bouton
    for(let bouton of lesBoutons){
        bouton.checked = false;
        if(bouton.dataset.id == id){
            bouton.checked = true;
        }
    }

    switchSlide(lesAnimations);
}

//fonction qui switch a la slide correspondant au bouton checked
function switchSlide(lesAnimations){
    let lesBoutons = document.querySelectorAll(".radio-carousel");
    let lesSlides = document.querySelectorAll(".hero__carousel");

    //enlever la classe
    for(let uneSlide of lesSlides){
        uneSlide.classList.remove("carouselActif");
    }

    //trouver le id
    let id;
    for(let bouton of lesBoutons){
        if(bouton.checked){
            id = bouton.dataset.id;
        }
    }

    //doner la classe au slide du carousel
    for(let slide of lesSlides){
        if(slide.dataset.id == id){
            slide.classList.add("carouselActif");
        }
    }

    //faire animer le titre
    animTitre(lesAnimations);
}


//animer le titre
//ajout listner pour enlever la classe animation
function animationListner(lesAnimations){
   let contenuHero = document.querySelector(".hero__contenu");
   let enfants = contenuHero.children;

   for(let child of enfants){
    child.addEventListener("animationend", function(){
        for(uneAnimation of lesAnimations){
            child.classList.remove(uneAnimation);
        }
    })
   }
}
//doner la classe animation
function animTitre(lesAnimations){
    let contenuHero = document.querySelector(".hero__contenu");
    let enfants = contenuHero.children;

    // let lesAnimations = [
    //     "spin-anim",
    //     "slot-machine-anim-y",
    //     "slot-machine-anim-x"
    // ]

    for(let child of enfants){
        child.classList.add(
            lesAnimations[contenuHero.dataset.anim]
        );
    }

    //incrementer animation
    contenuHero.dataset.anim++;
    if(contenuHero.dataset.anim >= lesAnimations.length){
        contenuHero.dataset.anim = 0
    }
}