const forms = document.querySelectorAll(".delete-form");
const modalConfirmationButton = modal.querySelector(".confirmation-button");

let activeForm = null;

forms.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        activeForm=form;
    });
});

modalConfirmationButton.addEventListener("click", () => {
    activeForm.submit();
    
});
