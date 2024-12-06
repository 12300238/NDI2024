document.querySelectorAll(".button").forEach(area => {
    area.addEventListener("click", (event) => {
        event.preventDefault();
        const targetModalId = event.target.getAttribute("data-target");
        const targetModal = document.querySelector(targetModalId);
        if (targetModal) {
            targetModal.style.display = "block";
        }
    });
});

// Close modal functionality
document.querySelectorAll(".close").forEach(closeButton => {
    closeButton.addEventListener("click", (event) => {
        const modal = event.target.closest(".modal");
        if (modal) {
            modal.style.display = "none";
        }
    });
});