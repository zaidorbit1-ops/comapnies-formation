(() => {
  const form = document.querySelector("#company-name-check-form");
  const result = document.querySelector("#company-name-check-result");
  if (!form || !result) {
    return;
  }

  const submitButton = form.querySelector('button[type="submit"]');
  const buttonLabel = form.querySelector(".free-check-form__button-label");
  const companyNameInput = form.querySelector("#company-name-input");

  const renderResult = (payload) => {
    result.replaceChildren();
    result.classList.remove("is-error");
    result.hidden = false;

    if (!payload.ok) {
      result.classList.add("is-error");
      const message = document.createElement("p");
      message.textContent = payload.message;
      result.append(message);
      return;
    }

    const heading = document.createElement("h3");
    const matches = Array.isArray(payload.matches) ? payload.matches : [];
    heading.textContent = matches.length === 0
      ? `No matching names were found for “${payload.company_name}”.`
      : `Possible matching names for “${payload.company_name}”.`;
    result.append(heading);

    if (matches.length === 0) {
      const note = document.createElement("p");
      note.textContent = "This search is an initial check only. Final acceptance of a company name is decided by the Companies Registration Office.";
      result.append(note);
      return;
    }

    const list = document.createElement("ul");
    matches.forEach((match) => {
      const item = document.createElement("li");
      const name = document.createElement("strong");
      name.textContent = match.company_name || "Company name unavailable";
      item.append(name);

      const details = [match.company_num, match.address].filter(Boolean).join(" · ");
      if (details) {
        const detail = document.createElement("span");
        detail.textContent = details;
        item.append(detail);
      }
      list.append(item);
    });
    result.append(list);
  };

  form.addEventListener("submit", async (event) => {
    event.preventDefault();
    if (!form.reportValidity()) {
      return;
    }

    submitButton.disabled = true;
    submitButton.setAttribute("aria-busy", "true");
    buttonLabel.textContent = "Checking...";
    result.replaceChildren();
    result.hidden = false;
    result.classList.remove("is-error");
    const loadingMessage = document.createElement("p");
    loadingMessage.textContent = "Checking the CRO register...";
    result.append(loadingMessage);

    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: new FormData(form),
        headers: { Accept: "application/json" },
        credentials: "same-origin",
      });
      const payload = await response.json();
      renderResult(payload);
    } catch {
      result.replaceChildren();
      result.classList.add("is-error");
      result.hidden = false;
      const errorMessage = document.createElement("p");
      errorMessage.textContent = "We could not complete the company name check right now. Please try again later.";
      result.append(errorMessage);
    } finally {
      submitButton.disabled = false;
      submitButton.removeAttribute("aria-busy");
      buttonLabel.textContent = "Check name";
      companyNameInput.focus();
    }
  });
})();
