// Get the request button element
const requestButton = document.getElementById('request-button');

// Add event listeners for mouse enter and mouse leave
requestButton.addEventListener('mouseenter', () => {
    requestButton.classList.add('glow-zoom'); // Add glow and zoom effect
});

requestButton.addEventListener('mouseleave', () => {
    requestButton.classList.remove('glow-zoom'); // Remove glow and zoom effect
});


