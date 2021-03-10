const fetchData = async () => {
    let response = await fetch("http://newsapi.org/v2/top-headlines?country=co&category=business&apiKey=f666b1a15c8940dc9df48ce0596933fa");
    let dataJson = await response.json();
    return dataJson.articles;
}
const renderData = async () => {
    const articles = await fetchData();
    let container = document.getElementById("articles");
    let urlImageNotFound = "https://programacion.net/files/article/20160819020822_image-not-found.png";
    // conticion ? instrucción : intrcción
    articles.forEach((article) => {
        let alertTemplate = `<div class="col-12 col-sm-12 col-md-6 col-lg-4">
        <div class="card" style="width: 18rem;">
            <img src="${article.urlToImage == null ? urlImageNotFound : article.urlToImage}"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">${article.title}</h5>
              <p class="card-text">${article.description == null ? "Descripción no disponible" : article.description}</p>
            </div>
          </div>
        </div>`;
        container.innerHTML += alertTemplate;
    });
}
renderData();

