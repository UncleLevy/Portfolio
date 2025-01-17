// Create an Intersection Observer to watch for visibility of elements
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        // Log each entry for debugging purposes
        console.log(entry);
        if (entry.isIntersecting) {
            // If the element is intersecting (visible), add the 'show' class
            entry.target.classList.add('show');
        } else {
            // If the element is not intersecting (not visible), remove the 'show' class
            entry.target.classList.remove('show');
        }
    });
});

// Select all elements with the class 'hidden'
const hiddenElements = document.querySelectorAll('.hidden');

// Observe each hidden element with the Intersection Observer
hiddenElements.forEach((el) => observer.observe(el));

// Event listener for the menu toggle button
document.querySelector('.menu-toggle').addEventListener('click', function() {
    // Toggle the 'show' class on the navigation links to show/hide the menu
    document.querySelector('.nav-links').classList.toggle('show');
});
