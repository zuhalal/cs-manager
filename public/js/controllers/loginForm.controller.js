const loginFormValidation = () => {
  const submitButton = document.getElementById("submit-button"),
    passwordField = document.getElementById("password"),
    emailField = document.getElementById("email");

  const submissionEnabler = () => {
    submitButton.disabled =
      passwordField.value && emailField.value ? false : true;

    submitButton.innerHTML = submitButton.disabled
      ? "Fill the credentials"
      : "Sign In";
  };

  emailField.addEventListener("change", submissionEnabler);
  passwordField.addEventListener("change", submissionEnabler);
};

loginFormValidation();
