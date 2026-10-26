const taxRegistrationForm = document.querySelector("#tax-registration-form");

if (taxRegistrationForm) {
  taxRegistrationForm.addEventListener("submit", (event) => {
    event.preventDefault();
  });
}
