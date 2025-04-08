(function(){
    console.log("vive javascirpt");

    
        //const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
        let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
        const domaine = window.location.href;
        //const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        let apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        
        categorie__ul__li.forEach(li => {
            li.addEventListener("mousedown",function(){
                console.log(li.dataset.id);
                categoryId = li.dataset.id;
                apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;

                videEtFetch(apiUrl);
            })
        });
    
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                data.forEach(article => {
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
                        if (accordeon.classList.contains("isCollapsed")){
                            accordeon.classList.remove("isCollapsed");
                        } else{
                            accordeon.classList.add("isCollapsed");
                        }
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
                        if (accordeon.classList.contains("isCollapsed")){
                            accordeon.classList.remove("isCollapsed");
                        } else{
                            accordeon.classList.add("isCollapsed");
                        }
                    })
                }
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}