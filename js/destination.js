(function(){
    //console.log("vive javascirpt");

    
        //const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
        let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
        const domaine = window.location.href;
        //const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        let apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        
        categorie__ul__li.forEach(li => {
            li.addEventListener("mousedown",function(){
                //console.log(li.dataset.id);
                //ajouter classe
                setActive(categorie__ul__li, li.dataset.id);
                //generer les destinations
                categoryId = li.dataset.id;
                apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;

                videEtFetch(apiUrl);
            })
            //ajouter la classe
            setActive(categorie__ul__li, categoryId);
        });
    
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                data.forEach(article => {
                    //on vet pas generer la galerie
                    if(article.title.rendered == "Galerie"){
                        return;
                    }
                    const articleElement = document.createElement('article');
                    articleElement.innerHTML = `
                    <div>
                        <h3 >${article.title.rendered}</h>
                        <div class="accordeon isCollapsed">
                            <div>${article.excerpt.rendered}</div>
                            <a href="${article.link}">Lire plus</a>
                        </div>
                    </div>
                    `;
                    destinationList .appendChild(articleElement);
                });
                //toggle les classes pour faire fonctioner l'accordeon
                let accordeons = document.querySelectorAll(".accordeon");
                for(let accordeon of accordeons){
                    papa = accordeon.parentElement;
                    papa.addEventListener("mousedown", function(){
                        accordeon.classList.toggle("isCollapsed");
                    })
                }
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));


})()

function viderListe(){
    let divListe = document.querySelector("div.destination__list");
    divListe.innerHTML = "";
}

function videEtFetch(url){
    viderListe();
    fetch(url)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                data.forEach(article => {
                    //on vet pas generer la galerie
                    if(article.title.rendered == "Galerie"){
                        return;
                    }
                    const articleElement = document.createElement('article');
                    articleElement.innerHTML = `
                <div>
                    <h3 >${article.title.rendered}</h>
                    <div class="accordeon isCollapsed">
                        <div>${article.excerpt.rendered}</div>
                        <a href="${article.link}">Lire plus</a>
                    </div>
                </div>
                    `;
                    destinationList .appendChild(articleElement);
                });
                //toggle les classes pour faire fonctioner l'accordeon
                let accordeons = document.querySelectorAll(".accordeon");
                for(let accordeon of accordeons){
                    papa = accordeon.parentElement;
                    papa.addEventListener("mousedown", function(){
                        accordeon.classList.toggle("isCollapsed");
                    })
                }
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}

function setActive(array, id){
    for(let elm of array){
        elm.classList.remove("actif");
        if(elm.dataset.id == id){
            elm.classList.add("actif");
        }
    }
}