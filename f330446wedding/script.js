// Get the menu button and the navigation links container
const menuBtnBox = document.querySelector(".menu-btn-container");
const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

// Function to toggle the 'active' class on the navigation links and menu button
function toggleNav() {
  // Check if navigation links are currently active
  if (navLinks.classList.contains("active")) {
    // If active, remove 'active' class from both navigation links and menu button
    navLinks.classList.remove("active");
    menuBtn.classList.remove("active");
  } else {
    // If not active, add 'active' class to both navigation links and menu button
    navLinks.classList.add("active");
    menuBtn.classList.add("active");
  }
}

// Add click event listener to the menu button to toggle navigation links
menuBtnBox.addEventListener("click", toggleNav);

// Add click event listener to the document body to close navigation links when clicked outside
document.body.addEventListener("click", (event) => {
  // Check if the click target is not the menu button or the navigation links
  if (
    !event.target.closest(".menu-btn-container") &&
    !event.target.closest(".nav-links")
  ) {
    // Remove the 'active' class from navigation links and menu button
    navLinks.classList.remove("active");
    menuBtn.classList.remove("active");
  }
});
