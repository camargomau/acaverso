document.addEventListener("DOMContentLoaded", function() {
    function updateNav() {
        const navItems = document.querySelectorAll('.nav-item');

        if (window.innerWidth <= 1000) {
            navItems.forEach(item => item.style.fontSize = "0"); // Hide text
        } else {
            navItems.forEach(item => item.style.fontSize = ""); // Show text
        }
    }

    window.addEventListener('resize', updateNav);
    updateNav();
});
