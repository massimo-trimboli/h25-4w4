(function(){
    let lesBoutons = document.querySelectorAll(".radio-carousel");
    let lesSlides = document.querySelectorAll(".hero__carousel");
    //en allumer un au debut
    for(let uneSlide of lesSlides){
        uneSlide.classList.remove("carouselActif");
    }
    lesBoutons[0].checked = true;
    switchSlide();

    //automatisation
    let interval = setInterval(autoSwitch, 30000);

    //rajouter le event listner
    for(let bouton of lesBoutons){
        bouton.addEventListener("change", switchSlide);
    }


    //pour lanimation du titre lorse quon change de slide
    animationListner();
})()

//fonction pour switcher automatiquement
function autoSwitch(){
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

    switchSlide();
}

//fonction qui switch a la slide correspondant au bouton checked
function switchSlide(){
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
    animTitre();
}


//animer le titre
//ajout listner pour enlever la classe animation
function animationListner(){
    
    // let titre = document.querySelector(".hero__titre");

    // titre.addEventListener("animationend", function(){
    //     titre.classList.remove("spin-anim");
    // })
    

   let contenuHero = document.querySelector(".hero__contenu");
   let enfants = contenuHero.children;

   for(let child of enfants){
    child.addEventListener("animationend", function(){
        child.classList.remove("spin-anim");
        child.classList.remove("slot-machine-anim-y");
        child.classList.remove("slot-machine-anim-x");
    })
   }
}
//doner la classe animation
function animTitre(){
    
    // let titre = document.querySelector(".hero__titre");
    // if(titre!=null){
    //     titre.classList.add("spin-anim");
    // }
    


    let contenuHero = document.querySelector(".hero__contenu");
    let enfants = contenuHero.children;

    if(contenuHero.dataset.anim == 0){
        for(let child of enfants){
            child.classList.add("spin-anim");

            contenuHero.dataset.anim = 1;
        }
    } else if(contenuHero.dataset.anim == 1){
        for(let child of enfants){
            child.classList.add("slot-machine-anim-y");

            contenuHero.dataset.anim = 2;
        }
    } else if(contenuHero.dataset.anim == 2){
        for(let child of enfants){
            child.classList.add("slot-machine-anim-x");

            contenuHero.dataset.anim = 0;
        }
    }
}