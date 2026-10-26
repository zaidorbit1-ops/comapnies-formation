(() => {
  const forms = Array.from(document.querySelectorAll("[data-ajax-form]"));
  if (forms.length === 0) {
    return;
  }

  const rboForm = document.querySelector("[data-rbo-wizard]");
  const rboDialog = document.querySelector("#rbo-form-dialog");
  const rboOpenButton = document.querySelector("#rbo-open-form");
  const rboSteps = rboForm ? Array.from(rboForm.querySelectorAll("[data-rbo-step]")) : [];
  const rboStepLabel = rboDialog?.querySelector("[data-rbo-step-label]");
  const rboStepCount = rboDialog?.querySelector("[data-rbo-step-count]");
  const rboProgressBar = rboDialog?.querySelector("[data-rbo-progress-bar]");
  let currentRboStep = 0;

  const dialog = document.createElement("dialog");
  dialog.className = "form-submit-dialog";
  dialog.setAttribute("aria-labelledby", "form-submit-title");
  const panel = document.createElement("div");
  panel.className = "form-submit-dialog__panel";
  const icon = document.createElement("span");
  icon.className = "form-submit-dialog__icon material-symbols-outlined";
  icon.setAttribute("aria-hidden", "true");
  const title = document.createElement("h2");
  title.id = "form-submit-title";
  const message = document.createElement("p");
  message.setAttribute("aria-live", "polite");
  const closeButton = document.createElement("button");
  closeButton.className = "theme-button theme-button-primary form-submit-dialog__close";
  closeButton.type = "button";
  closeButton.textContent = "Close";
  panel.append(icon, title, message, closeButton);
  dialog.append(panel);
  document.body.append(dialog);

  let sending = false;
  let activeForm = null;

  const closeDialog = () => {
    if (dialog.open && !sending) {
      dialog.close();
      activeForm?.querySelector("button[type='submit']")?.focus();
    }
  };

  closeButton.addEventListener("click", closeDialog);
  dialog.addEventListener("cancel", (event) => {
    if (sending) {
      event.preventDefault();
    }
  });
  dialog.addEventListener("click", (event) => {
    if (event.target === dialog) {
      closeDialog();
    }
  });

  const showDialog = (state, heading, text) => {
    dialog.dataset.state = state;
    icon.textContent = state === "sending" ? "progress_activity" : state === "success" ? "check_circle" : "error";
    title.textContent = heading;
    message.textContent = text;
    closeButton.hidden = state === "sending";
    if (!dialog.open) {
      dialog.showModal();
    }
  };

  const feedbackFor = (form) => {
    let feedback = form.parentElement.querySelector("[data-form-feedback]");
    if (!feedback) {
      feedback = document.createElement("div");
      feedback.className = "form-feedback";
      feedback.dataset.formFeedback = "";
      feedback.setAttribute("role", "status");
      feedback.setAttribute("aria-live", "polite");
      form.before(feedback);
    }
    return feedback;
  };

  const setFeedback = (form, type, text) => {
    const feedback = feedbackFor(form);
    feedback.className = `form-feedback form-feedback--${type}`;
    feedback.textContent = text;
    feedback.hidden = false;
  };

  const clearInvalidFields = (form) => {
    form.querySelectorAll("[aria-invalid='true']").forEach((field) => {
      field.removeAttribute("aria-invalid");
      field.closest(".contact-page__field, .rbo-form__field, .rbo-form__choice-group, .rbo-form__privacy-consent")
        ?.removeAttribute("aria-invalid");
    });
  };

  const markInvalidField = (field) => {
    field.setAttribute("aria-invalid", "true");
    const fieldGroup = field.closest(".contact-page__field, .rbo-form__field, .rbo-form__choice-group, .rbo-form__privacy-consent");
    fieldGroup?.setAttribute("aria-invalid", "true");
  };

  const clearInvalidField = (field) => {
    field.removeAttribute("aria-invalid");
    const fieldGroup = field.closest(".contact-page__field, .rbo-form__field, .rbo-form__choice-group, .rbo-form__privacy-consent");
    fieldGroup?.removeAttribute("aria-invalid");
  };

  const checkShareholder = (form, number, required) => {
    const shareholder = form.querySelector(`.rbo-shareholder[data-shareholder="${number}"]`);
    if (!shareholder) {
      return true;
    }

    const fields = Array.from(shareholder.querySelectorAll("input, textarea"));
    const hasDetails = fields.some((field) => field.type === "checkbox" || field.type === "radio"
      ? field.checked
      : field.value.trim() !== "");
    if (!required && !hasDetails) {
      return true;
    }

    const requiredNames = [
      `shareholder_${number}_name`,
      `shareholder_${number}_pps`,
      `shareholder_${number}_address_1`,
      `shareholder_${number}_percentage`,
      `shareholder_${number}_appointed`,
    ];
    let valid = true;
    requiredNames.forEach((name) => {
      const field = form.elements.namedItem(name);
      if (field instanceof HTMLInputElement && (field.value.trim() === "" || !field.validity.valid)) {
        markInvalidField(field);
        valid = false;
      }
    });

    const interestFields = shareholder.querySelectorAll("input[type='radio']");
    if (!Array.from(interestFields).some((field) => field.checked)) {
      if (interestFields[0]) {
        markInvalidField(interestFields[0]);
      }
      valid = false;
    }
    const ownershipFields = shareholder.querySelectorAll("input[type='checkbox']");
    if (!Array.from(ownershipFields).some((field) => field.checked)) {
      if (ownershipFields[0]) {
        markInvalidField(ownershipFields[0]);
      }
      valid = false;
    }
    return valid;
  };

  const setRboStep = (stepIndex, focusFirst = true) => {
    if (rboSteps.length === 0) {
      return;
    }
    currentRboStep = Math.max(0, Math.min(stepIndex, rboSteps.length - 1));
    rboSteps.forEach((step, index) => {
      step.hidden = index !== currentRboStep;
    });
    if (rboStepLabel) {
      rboStepLabel.textContent = rboSteps[currentRboStep].dataset.stepTitle ?? "Registration details";
    }
    if (rboStepCount) {
      rboStepCount.textContent = `Step ${currentRboStep + 1} of ${rboSteps.length}`;
    }
    if (rboProgressBar) {
      rboProgressBar.style.width = `${((currentRboStep + 1) / rboSteps.length) * 100}%`;
    }
    const feedback = rboForm?.querySelector("[data-form-feedback]");
    if (feedback) {
      feedback.hidden = true;
    }
    if (focusFirst) {
      requestAnimationFrame(() => {
        rboSteps[currentRboStep].querySelector("input:not([type='hidden']), textarea, select")?.focus();
      });
    }
  };

  if (rboDialog instanceof HTMLDialogElement && rboOpenButton instanceof HTMLButtonElement) {
    rboOpenButton.addEventListener("click", () => {
      setRboStep(0);
      rboDialog.showModal();
    });
    rboDialog.querySelector("[data-rbo-close]")?.addEventListener("click", () => rboDialog.close());
    rboDialog.addEventListener("click", (event) => {
      if (event.target === rboDialog) {
        rboDialog.close();
      }
    });
    rboSteps.forEach((step, stepIndex) => {
      step.querySelector("[data-rbo-next]")?.addEventListener("click", () => {
        clearInvalidFields(rboForm);
        const invalidFields = Array.from(step.querySelectorAll("input, textarea, select"))
          .filter((field) => field.willValidate && !field.checkValidity());
        let valid = invalidFields.length === 0;
        invalidFields.forEach(markInvalidField);
        if (stepIndex === 1) {
          valid = checkShareholder(rboForm, 1, true) && valid;
        } else if (stepIndex === 2) {
          valid = checkShareholder(rboForm, 2, false) && valid;
        }
        if (!valid) {
          const firstInvalid = step.querySelector(":invalid, [aria-invalid='true']");
          if (firstInvalid instanceof HTMLElement) {
            markInvalidField(firstInvalid);
            firstInvalid.focus();
          }
          setFeedback(rboForm, "error", "Please complete the required fields in this step.");
          return;
        }
        setRboStep(stepIndex + 1);
      });
      step.querySelector("[data-rbo-back]")?.addEventListener("click", () => setRboStep(stepIndex - 1));
    });
  }

  forms.forEach((form) => {
    const feedback = form.parentElement.querySelector("[data-form-feedback]");
    if (feedback) {
      feedback.hidden = true;
    }

    form.addEventListener("input", (event) => {
      if (event.target instanceof HTMLElement && event.target.getAttribute("aria-invalid") === "true") {
        clearInvalidField(event.target);
      }
    });
    form.addEventListener("change", (event) => {
      if (event.target instanceof HTMLElement && event.target.getAttribute("aria-invalid") === "true") {
        clearInvalidField(event.target);
      }
    });

    form.addEventListener("submit", async (event) => {
      event.preventDefault();
      if (sending) {
        return;
      }

      clearInvalidFields(form);
      const valid = form.checkValidity() && checkShareholder(form, 2, false);
      if (!valid) {
        form.querySelectorAll(":invalid").forEach(markInvalidField);
        const firstInvalid = form.querySelector(":invalid, [aria-invalid='true']");
        if (firstInvalid instanceof HTMLElement) {
          markInvalidField(firstInvalid);
          firstInvalid.focus();
        }
        setFeedback(form, "error", "Please check the highlighted fields and try again.");
        return;
      }

      const button = form.querySelector("button[type='submit']");
      const originalButtonMarkup = button?.innerHTML ?? "";
      const formType = form.elements.namedItem("form_type")?.value ?? "";
      const isRbo = formType === "rbo";
      sending = true;
      activeForm = form;
      if (button instanceof HTMLButtonElement) {
        button.disabled = true;
        button.setAttribute("aria-busy", "true");
        button.innerHTML = '<span class="material-symbols-outlined" aria-hidden="true">progress_activity</span> Sending...';
      }
      showDialog("sending", "Sending your details", "Please wait while we submit your form.");

      try {
        const response = await fetch(form.action, {
          method: "POST",
          body: new FormData(form),
          headers: { Accept: "application/json" },
          credentials: "same-origin",
        });
        const result = await response.json();
        if (!response.ok || !result.ok) {
          const errorMessage = typeof result.message === "string"
            ? result.message
            : "We could not send your details. Please try again.";
          setFeedback(form, "error", errorMessage);
          showDialog("error", "Submission not sent", errorMessage);
          return;
        }

        const customerName = typeof result.customerName === "string" ? result.customerName.trim() : "";
        const successMessage = `${customerName ? `Thanks, ${customerName}. ` : "Thanks. "}${result.message}`;
        form.reset();
        clearInvalidFields(form);
        if (form === rboForm) {
          setRboStep(0, false);
          rboDialog?.close();
        }
        const token = form.elements.namedItem("csrf_token");
        if (token instanceof HTMLInputElement && typeof result.csrfToken === "string") {
          token.value = result.csrfToken;
        }
        setFeedback(form, "success", successMessage);
        showDialog("success", isRbo ? "Registration received" : "Enquiry received", successMessage);
      } catch (error) {
        const errorMessage = "We could not send your details right now. Please check your connection and try again.";
        setFeedback(form, "error", errorMessage);
        showDialog("error", "Submission not sent", errorMessage);
      } finally {
        sending = false;
        if (button instanceof HTMLButtonElement) {
          button.disabled = false;
          button.removeAttribute("aria-busy");
          button.innerHTML = originalButtonMarkup;
        }
      }
    });
  });
})();
