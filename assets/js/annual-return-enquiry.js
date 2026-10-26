const annualReturnForm = document.querySelector("#annual-return-form");

if (annualReturnForm) {
  annualReturnForm.addEventListener("submit", (event) => {
    event.preventDefault();
  });
}
