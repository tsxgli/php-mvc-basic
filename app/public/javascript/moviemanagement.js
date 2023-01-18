let deleteBtn = document.getElementById("deleteBtn");
deleteBtn.addEventListener("click", deleteItem);


  function deleteItem(event) {
    event.preventDefault();
    let id = this.getAttribute("href").split("=")[1];  // Extract the ID from the button's href
    let xhr = new XMLHttpRequest();
    xhr.open("DELETE", `/admin/deleteMovie?id=${id}`);
    xhr.onload = function() {
      if (xhr.status === 204) {
        // Remove the item from the page
        let item = this.parentNode.parentNode.parentNode;
        item.parentNode.removeChild(item);
      } else {
        console.log("Error deleting item");
      }
    }
    xhr.send();
  }
  