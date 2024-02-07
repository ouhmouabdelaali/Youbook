document.addEventListener('DOMContentLoaded', function () {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordRegex = /^(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z\d]{8,}$/;

    var form = document.getElementById('loginForm');

    form.addEventListener('submit', function (event) {
        var emailInput = document.getElementById("email").value;
        var passwordInput = document.getElementById("password").value;

        var errorMessage = "";

        if (!emailRegex.test(emailInput)) {
            errorMessage += "Invalid email address. ";
        }

        if (!passwordRegex.test(passwordInput)) {
            errorMessage += "Invalid password. It must be at least 8 characters long and include at least one letter and one digit.";
        }

        if (errorMessage !== "") {
            event.preventDefault(); // Prevent the form from submitting
            document.getElementById("error-message").textContent = errorMessage;
        }
    });
});
