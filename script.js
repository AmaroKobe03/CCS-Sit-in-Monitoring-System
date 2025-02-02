const registerButton = document.getElementById('registerBtn');
const logInFormButton = document.getElementById('logInFormBtn');
const signInForm = document.getElementById("signUpForm");
const logInForm = document.getElementById("logInForm");

registerButton.addEventListener("click", function() {
    logInForm.style.display = "none";
    signInForm.style.display = "block";
});

logInFormButton.addEventListener("click", function() {
    signInForm.style.display = "none";
    logInForm.style.display = "block";
});
