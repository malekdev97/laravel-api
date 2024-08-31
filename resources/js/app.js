console.log("working...");

// Icons

const sun = document.querySelector(".sun");
const moon = document.querySelector(".moon");

// Theme vars
const userTheme = localStorage.getItem("theme"); // store user theme
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches; // store system theme

// Icon Toggling
const iconToggle = () => {
    moon.classList.toggle("display-none");
    sun.classList.toggle("display-none");
}

// Initial Theme Check
const themeCheck = () => {
    if(userTheme === "dark" || (!userTheme && systemTheme)) {
        document.documentElement.classList.add("dark");
        moon.classList.add("display-none");
        return;
    }
    sun.classList.add("display-none");
}
// Manual Theme Switch
const themeSwitch = () => {
    if(document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
        iconToggle();
        return;
    }
    document.documentElement.classList.add("dark");
        localStorage.setItem("theme", "dark");
        iconToggle();
}
// Call theme switch on clicking buttons
sun.addEventListener("click", () => {
    themeSwitch();
});
moon.addEventListener("click", () => {
    themeSwitch();
});

// Invoke theme check on initial load
themeCheck();
