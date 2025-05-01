(function(){
    let lesBoutons = document.querySelectorAll(".radio-carousel");
    let lesSlides = document.querySelectorAll(".hero__carousel");

    //définir les animations ici
    let lesAnimations = [
        //"spin-anim",
        "slot-machine-anim-y",
        "slot-machine-anim-x",
        "shimmy-swivel-anim",
        "stretch-anim"
    ]

    //en allumer un au debut
    for(let uneSlide of lesSlides){
        uneSlide.classList.remove("carouselActif");
    }
    lesBoutons[0].checked = true;
    switchSlide(lesAnimations);

    //automatisation
    let interval = setInterval(function(){autoSwitch(lesAnimations, interval);}, 30000);
    //rajouter le event listner
    for(let bouton of lesBoutons){
        bouton.addEventListener("change", function(){switchSlide(lesAnimations)});
    }


    //pour lanimation du titre lorse quon change de slide
    animationListner(lesAnimations);
})()

//fonction pour switcher automatiquement
function autoSwitch(lesAnimations, interval){
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

    switchSlide(lesAnimations, interval);
}

//fonction qui switch a la slide correspondant au bouton checked
function switchSlide(lesAnimations){
    let lesBoutons = document.querySelectorAll(".radio-carousel");
    let lesSlides = document.querySelectorAll(".hero__carousel");

    //jouer une animation avant de changer la slide acive
    //les slides changeront entre 2 animations
    for(let uneSlide of lesSlides){
        uneSlide.classList.remove("clip-anim-reverse");
        uneSlide.classList.add("clip-anim");
    }
    //changer la slide acive à la fin de l'animation qui dure 2s
    setTimeout(function(){
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

        //jouer une animation avant de changer la slide acive
        //les slides changeront entre 2 animations
        for(let uneSlide of lesSlides){
            uneSlide.classList.remove("clip-anim");
            uneSlide.classList.add("clip-anim-reverse");
        }
    }, 2000)
    

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
        //neleve toute les animations
        for(uneAnimation of lesAnimations){
            child.classList.remove(uneAnimation);
        }
    })
   }
}

//doner la classe animation
function animTitre(lesAnimations){
    //contenuHero contient l'index de l'animation à jouer
    //et on joue les animations sur chaque enfant de contenuHero
    let contenuHero = document.querySelector(".hero__contenu");
    let enfants = contenuHero.children;

    //effets specifiques à certaines animations
    //sinon tout animer en meme temps
    if(lesAnimations[contenuHero.dataset.anim] == "stretch-anim"){
        let delay = 0;
        let increment = 250;

        for(let child of enfants){
            setTimeout(function(){
                child.classList.add("stretch-anim");
            }, delay);
            delay+= increment;
        }
    } else if(lesAnimations[contenuHero.dataset.anim] == "shimmy-swivel-anim"){
        let delay = 0;
        let increment = 250;

        for(let child of enfants){
            setTimeout(function(){
                child.classList.add("shimmy-swivel-anim");
            }, delay);
            delay+= increment;
        }
    } else{
        for(let child of enfants){
            child.classList.add(
                lesAnimations[contenuHero.dataset.anim]
            );
        }
    }

    //incrementer animation
    contenuHero.dataset.anim++;
    if(contenuHero.dataset.anim >= lesAnimations.length){
        contenuHero.dataset.anim = 0
    }
}