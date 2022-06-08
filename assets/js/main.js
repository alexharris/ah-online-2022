$(document).ready(function(){
    $('.slider').slick({
        infinite: true,
        centerPadding: '10px',
        prevArrow:   $('.prev'),
        nextArrow:   $('.next'),
        responsive: [
            {
              breakpoint: 1000,
              settings: {
                prevArrow:   $('.mobile-slider-nav .prev'),
                nextArrow:   $('.mobile-slider-nav .next'),
              }
            }
        ]        
    });
  });

// https://css-tricks.com/a-complete-guide-to-dark-mode-on-the-web/#os-level

const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

if (prefersDarkScheme.matches) {
  document.body.classList.add("dark-theme");
} else {
  document.body.classList.remove("dark-theme");
}



// Select the button
const btn = document.querySelector(".btn-toggle");
// Select the theme preference from localStorage
const currentTheme = localStorage.getItem("theme");

// If the current theme in localStorage is "dark"...
if (currentTheme == "dark") {
  // ...then use the .dark-theme class
  document.body.classList.add("dark-theme");
}

// Listen for a click on the button 
document.getElementById('theme-toggle').addEventListener("click", function() {
  // Toggle the .dark-theme class on each click
  document.body.classList.toggle("dark-theme");
  
  // Let's say the theme is equal to light
  let theme = "light";
  // If the body contains the .dark-theme class...
  if (document.body.classList.contains("dark-theme")) {
    // ...then let's make the theme dark
    theme = "dark";
  }
  // Then save the choice in localStorage
  localStorage.setItem("theme", theme);
});
          