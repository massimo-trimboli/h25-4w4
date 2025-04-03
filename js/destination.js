(function(){
    console.log("vive javascirpt");

    
        //const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
        let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
        const domaine = window.location.href;
        //const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        let apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        
        categorie__ul__li.forEach(li => {
            li.addEventListener("click",function(){
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
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <div>${article.excerpt.rendered}</div>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList .appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
})()

function viderListe(){
    let divListe = document.querySelector("div.destination__list");
    divListe.innerHTML = "";
}

function videEtFetch(url){
    fetch(url)
            .then(response => response.json())
            .then(data => {
                viderListe();
                const destinationList = document.querySelector('.destination__list');
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <div>${article.excerpt.rendered}</div>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList .appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
}