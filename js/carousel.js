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
    let interval = setInterval(autoSwitch, 5000);

    //rajouter le event listner
    for(let bouton of lesBoutons){
        bouton.addEventListener("change", switchSlide);
    }
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
}