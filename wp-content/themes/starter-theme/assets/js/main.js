const $ = (element) => document.querySelector(element);

// Window Dependencies
document.addEventListener("DOMContentLoaded", () => {
  // Fade in on Scroll
  const elementsToFadeInUpOnScroll = document.querySelectorAll(
    ".fade-in-up-on-scroll"
  );

  if (elementsToFadeInUpOnScroll) {
    window.addEventListener("scroll", (event) => {
      elementsToFadeInUpOnScroll.forEach((element) => {
        if (window.scrollY >= element.offsetTop - window.innerHeight) {
          element.classList.add("fade-in-up");
        } else {
          element.classList.remove("fade-in-up");
        }
      });
    });
  }

  // Navbar
  const navToggle = $("#nav-toggle");
  const navItems = $("#nav-items");
  const openIcon = $("#open-menu-icon");
  const closeIcon = $("#close-menu-icon");

  navToggle.addEventListener("click", () => {
    if (navItems.classList.contains("hidden")) {
      // Add fade in animation and show nav items
      navItems.classList.remove("hidden");
      openIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
      navItems.classList.add("mobile-nav-show", "fade-in-left");
    } else {
      // Remove fade in animation and add fade-out
      navItems.classList.remove("fade-in-left");
      navItems.classList.add("fade-out-left");
    }
  });

  navItems.addEventListener("animationend", () => {
    if (navItems.classList.contains("fade-out-left")) {
      // If fade out end, hide nav items again
      navItems.classList.add("hidden");
      openIcon.classList.toggle("hidden");
      closeIcon.classList.toggle("hidden");
      navItems.classList.remove("mobile-nav-show", "fade-out-left");
    }
  });
});
