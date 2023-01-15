function passwordToggleButton(){
        var passwordInput = document.getElementById('passwordInput');
        var passwordToggleButton =  document.getElementById('passwordToggleButton');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggleButton.innerHTML = 'Hide password';
        } else {
            passwordInput.type = 'password';
            passwordToggleButton.innerHTML = 'Show password';
        }
}
