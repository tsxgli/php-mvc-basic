const deleteButtons = document.querySelectorAll(".btn-danger");

deleteButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    const id = button.dataset.id;
    console.log(id);
    const data = {
        movieId:id,
    };
    // Create an object with the data from the form (title and content)
    fetch("http://localhost/api/movies", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(data),
    })
        .then((response) => response.json())
        .then((out) => {
           updateMovieCards(out);
      })
  });
});

function updateMovieCards(movies) {
  // clear the existing movie cards
  const movieContainer = document.getElementById("containerRow");
  movieContainer.innerHTML = "";
  // loop through the updated movies and create new movie cards
  for (const movie of movies) {
    movieContainer.innerHTML += `
            <div class="col-3">
                <a href="/detail?id=${movie.id}">
                    <div class="card" style="width: 100%; height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title"> ${movie.title}</h5>
                            <div class="card-body">
                                <img src="/images/${movie.image}" alt="${movie.title}" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="float-start">
                                <form method="POST">
                                    <a type="submit" class="btn btn-primary" name="editMovieBtn" href="/admin/editMovie?id=${movie.id}">Edit</a>
                                    <a type="submit" class="btn btn-danger" data-id="${movie.id}"name="deleteMovieBtn">Delete</a>
                                </form>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        `;
  }
}
