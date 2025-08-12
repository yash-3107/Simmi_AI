// --- 1. Delegated Event Listener (The Core of the Solution) ---
// This listener is attached to the document only once. It handles all clicks
// for the modal, even for buttons loaded later via AJAX.

document.addEventListener("click", function (event) {
    // Find the modal element. We look for it fresh on every click.
    const modal = document.querySelector(".MuiModal-root");
    if (!modal) return; // If no modal on page, do nothing

    // --- Logic to SHOW the modal ---
    // If the "Create New Application" button (or something inside it) was clicked...
    const createButton = event.target.closest(
        "#appstudio-create-new-project-button"
    );
    if (createButton) {
        modal.style.display = "flex"; // Use 'flex' as MuiModal is often a flex container
    }

    // --- Logic to HIDE the modal ---
    // Check if the click happened on any element that should close the modal.
    const closeButtonX = event.target.closest(".MuiModal-root h2 button");
    const backdrop = event.target.closest(".MuiBackdrop-root");
    const cancelButton = event.target.closest('form button[type="button"]');

    // If the click was on the 'X', the background, or the 'Cancel' button...
    if (
        closeButtonX ||
        backdrop ||
        (cancelButton && cancelButton.textContent.trim() === "Cancel")
    ) {
        modal.style.display = "none";
    }
});



// for navigating the steps in the modal
function app_modal_steps() {
    let currentStep = 1;

    const step1Content = $("#form-step-1");
    const step2Content = $("#form-step-2");
    const cancelButton = $("#wizard-cancel-btn");
    const backButton = $("#wizard-back-btn");
    const nextButton = $("#wizard-next-btn");
    const saveButton = $("#wizard-save-btn");

    function updateWizardView() {
        if (currentStep === 1) {
            step1Content.addClass("active-step");
            step2Content.removeClass("active-step");
            nextButton.removeClass("wizard-btn-hidden");
            cancelButton.removeClass("wizard-btn-hidden");
            backButton.addClass("wizard-btn-hidden");
            saveButton.addClass("wizard-btn-hidden");
        } else {
            step1Content.removeClass("active-step");
            step2Content.addClass("active-step");
            nextButton.addClass("wizard-btn-hidden");
            saveButton.removeClass("wizard-btn-hidden");
            backButton.removeClass("wizard-btn-hidden");
            cancelButton.removeClass("wizard-btn-hidden");
        }
    }

    nextButton.on("click", function () {
        currentStep = 2;
        updateWizardView();
    });
    backButton.on("click", function () {
        currentStep = 1;
        updateWizardView();
    });
    $("#wizard-form").on("submit", function (e) {
        e.preventDefault();
        alert("Form Submitted!");
    });

    updateWizardView();
}
