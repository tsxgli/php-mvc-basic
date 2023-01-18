function deleteItem(event) {
    event.preventDefault();
    let id = this.getAttribute("href").split("=")[1];  // Extract the ID from the button's href
    fetch(`/admin/deleteMovie?id=${id}`, { method: 'DELETE' })
      .then(response => {
        if (response.ok) {
          // Remove the item from the page
          let item = this.parentNode.parentNode.parentNode;
          item.parentNode.removeChild(item);
        } else {
          console.log("Error deleting item");
        }
      });
    }