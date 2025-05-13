import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const triggers = document.querySelectorAll("[data-modal-target]");
    const modals = document.querySelectorAll(".modal");

    function openModal(modal) {
        modal.classList.remove("hidden");
        const overlay = modal.querySelector(".overlay");
        const content = modal.querySelector(".modal-content");

        setTimeout(() => {
            overlay.classList.remove("opacity-0");
            content.classList.remove("scale-95", "opacity-0");
            content.classList.add("scale-100", "opacity-100");
        }, 10);

        document.addEventListener("keydown", handleEsc);
    }

    function closeModal(modal) {
        const overlay = modal.querySelector(".overlay");
        const content = modal.querySelector(".modal-content");

        overlay.classList.add("opacity-0");
        content.classList.remove("scale-100", "opacity-100");
        content.classList.add("scale-95", "opacity-0");

        setTimeout(() => {
            modal.classList.add("hidden");
        }, 300);

        document.removeEventListener("keydown", handleEsc);
    }

    function handleEsc(e) {
        if (e.key === "Escape") {
            modals.forEach((modal) => closeModal(modal));
        }
    }

    // Trigger open
    triggers.forEach((trigger) => {
        const modalId = trigger.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);

        if (modal) {
            trigger.addEventListener("click", () => openModal(modal));
        }
    });

    // Close modal when clicking close button or overlay
    modals.forEach((modal) => {
        const closeBtn = modal.querySelector(".close-modal");
        const overlay = modal.querySelector(".overlay");

        closeBtn?.addEventListener("click", () => closeModal(modal));
        overlay?.addEventListener("click", () => closeModal(modal));
    });
});
