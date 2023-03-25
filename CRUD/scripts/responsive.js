const mediaQuery = window.matchMedia('(max-width: 600px)');

function handleMediaQueryChange(event) {
    if (event.matches) {
        // The screen is 600px or less
        // Adjust the styling of the element
        const element = document.getElementById('my-element');
        element.style.fontSize = '16px';
    } else {
        // The screen is more than 600px
        // Reset the styling of the element
        const element = document.getElementById('my-element');
        element.style.fontSize = '24px';
    }
}

// Call the function once to set the initial state
handleMediaQueryChange(mediaQuery);

// Add an event listener to detect changes in the media query
mediaQuery.addListener(handleMediaQueryChange);