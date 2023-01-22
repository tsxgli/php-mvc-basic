document
  .getElementById("passwordToggleButton")
  .addEventListener("click", function () {
    var passwordInput = document.getElementById("password");
    var passwordToggleButton = this;

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passwordToggleButton.innerHTML = "Hide password";
    } else {
      passwordInput.type = "password";
      passwordToggleButton.innerHTML = "Show password";
    }
  });
