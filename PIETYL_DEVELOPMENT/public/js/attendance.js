const tabs = document.querySelectorAll(".tab");
const tabBar = document.getElementById("tabBar");
const contents = document.querySelectorAll(".tab-content");

function moveBar(element) {
    tabBar.style.width = `${element.offsetWidth}px`;
    tabBar.style.height = `${element.offsetHeight}px`;
    tabBar.style.left = `${element.offsetLeft}px`;
}

// Default position
moveBar(tabs[0]);
tabs[0].classList.add("text-[#475569]", "font-bold");
contents[0].classList.remove("hidden");

tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        // Move bar
        moveBar(tab);

        // Active tab highlight
        tabs.forEach(t => t.classList.remove("text-[#475569]", "font-bold"));
        tab.classList.add("text-[#475569]", "font-bold");

        // Show correct content
        const index = tab.getAttribute("data-tab");
        contents.forEach(c => c.classList.add("hidden"));
        document.querySelector(`.tab-content[data-content="${index}"]`).classList.remove("hidden");
    });
});
const usePinBtn = document.getElementById("usePinBtn"); // Your "Use PIN" button
const pinModal = document.getElementById("pinModal");
const pinModalContent = document.getElementById("pinModalContent");
const closeModal = document.getElementById("closeModal");
const cancelBtn = document.getElementById("cancelBtn");

// Function to show modal with slide-up animation
function showModal() {
    pinModal.classList.remove("hidden");
    setTimeout(() => {
        pinModalContent.classList.remove("translate-y-full");
    }, 10); // small timeout to trigger transition
}

// Function to hide modal with slide-down animation
function hideModal() {
    pinModalContent.classList.add("translate-y-full");
    setTimeout(() => pinModal.classList.add("hidden"), 300); // hide overlay after animation
}

usePinBtn.addEventListener("click", showModal);
closeModal.addEventListener("click", hideModal);
cancelBtn.addEventListener("click", hideModal);

// Close if click outside modal content
pinModal.addEventListener("click", (e) => {
    if (e.target === pinModal) hideModal();
});
const clockBtn = pinModalContent.querySelector(".bg-blue-600"); // Clock In/Out button
const confirmationModal = document.getElementById("confirmationModal");
const confirmationContent = document.getElementById("confirmationModalContent");
const closeConfirmation = document.getElementById("closeConfirmation");

// Show confirmation modal and hide PIN modal
clockBtn.addEventListener("click", () => {
    // Slide down PIN modal
    pinModalContent.classList.add("translate-y-full");
    setTimeout(() => pinModal.classList.add("hidden"), 300);

    // Show confirmation modal
    confirmationModal.classList.remove("hidden");
    setTimeout(() => confirmationContent.classList.remove("translate-y-full"), 10);
});

// Close confirmation modal
closeConfirmation.addEventListener("click", () => {
    confirmationContent.classList.add("translate-y-full");
    setTimeout(() => confirmationModal.classList.add("hidden"), 300);
});

// Close if clicking outside modal content
confirmationModal.addEventListener("click", (e) => {
    if (e.target === confirmationModal) {
        confirmationContent.classList.add("translate-y-full");
        setTimeout(() => confirmationModal.classList.add("hidden"), 300);
    }
});