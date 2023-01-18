
function showTopMovies() {

    fetch("http://localhost/api/movies")
    .then((response) => response.json())
    .then((out) => {
      console.log("output:", out);
let moviesList=document.getElementById("moviesList")
      out.forEach((movie) => {
        
        let movieItem= document.createElement("li");
        let movieTitle = document.createElement("h5");
        
        movieTitle.classList.add("mb-1");
        movieTitle.textContent = movie.title;

        let rank = document.createElement("small");

        let div = document.createElement("div");
        div.classList.add("d-flex", "w-100", "justify-content-between");
        div.appendChild(movieTitle);
        div.appendChild(rank);

        let img = document.createElement("img");
        img.src = "/images/"+movie.image;
        img.width = "50";
        img.height = "75";
        img.alt = movie.title;

        movieItem.appendChild(div);
        movieItem.appendChild(img);
        moviesList.appendChild(movieItem);
      });
    })
    .catch((err) => console.error(err));
   



}
