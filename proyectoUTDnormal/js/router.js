// router.js

// Define routes and their corresponding handlers (components or HTML content)
const routes = {
    "/": "Welcome to the Home Page!",
    "/about": "Welcome to the About Page!",
    "/contact": "Welcome to the Contact Page!"
};

// Function to render the content based on the route
const renderContent = (path) => {
    const appDiv = document.getElementById("app");

    if (routes[path]) {
        // Render the route's content
        appDiv.innerHTML = `<h1>${routes[path]}</h1>`;
    } else {
        // Handle 404 Not Found
        appDiv.innerHTML = `
            <h1>404 Not Found</h1>
            <p>The page you're looking for does not exist.</p>
            <button onclick="goToHome()">Go to Home</button>
        `;
    }
};

// Function to navigate to a route
const navigateTo = (path) => {
    window.history.pushState({}, path, window.location.origin + path);
    renderContent(path);
};

// Function to go to the home page
const goToHome = () => navigateTo("/");

// Listen to popstate events (when the user uses the back/forward browser buttons)
window.onpopstate = () => {
    renderContent(window.location.pathname);
};

// Initialize the router
document.addEventListener("DOMContentLoaded", () => {
    renderContent(window.location.pathname);

    // Add event listeners for navigation links
    document.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            navigateTo(event.target.getAttribute("href"));
        });
    });
});
