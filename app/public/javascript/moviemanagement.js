const deleteButtons = document.querySelectorAll('.btn-danger');

deleteButtons.forEach(button => {
  button.addEventListener('click', event => {
    event.preventDefault();
    const id = button.dataset.id; 
    console.log(id);
    fetch(`/admin/deleteMovie?id=${id}`, {
      method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
      if (data.message) {
        // remove the movie card from the DOM
        button.closest('.col-3').remove();
        alert(data.message);
        //location.reload();

      } else {
        alert(data.error);
      }
    })
    .catch(error => console.error(error));
  });
});

function updateMovieCards(movies) {
    // clear the existing movie cards
    const movieContainer = document.querySelector('.container .row');
    movieContainer.innerHTML = '';
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
                                    <a type="submit" class="btn btn-danger" name="deleteMovieBtn" href="/admin/deleteMovie?id=${movie.id}">Delete</a>
                                </form>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        `;
    }
}

