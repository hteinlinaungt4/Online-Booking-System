<<<<<<< HEAD
const theme = document.getElementById('theme');
const light = document.getElementById('light');
const dark = document.getElementById('dark');
const menu = document.getElementById('menu');
const menuBox = document.getElementById('menuBox');
const backClick = document.getElementById('back-click');

const darkTheme = () => {
     document.documentElement.classList.add("dark");
     localStorage.setItem('change-theme', 'dark');
     light.classList.add('hidden');
     dark.classList.remove('hidden');
};

const lightTheme = () => {
     document.documentElement.classList.remove("dark");
     localStorage.setItem('change-theme', 'light');
     dark.classList.add('hidden');
     light.classList.remove('hidden');
};

theme.addEventListener("click", () => {
        
    const themeData = localStorage.getItem('change-theme');

         if(themeData === 'dark') {
            lightTheme();
         } else {
            darkTheme();
         };
        
});

const themeData = localStorage.getItem('change-theme');

     if(themeData === 'dark') {
         darkTheme();
     } else {
         lightTheme();
     };

menu.addEventListener("click", () => {
    menuBox.style.top = "15%";
})

backClick.addEventListener("click", () => {
    menuBox.style.top = "-100%";
})




=======
const theme = document.getElementById("theme");
const light = document.getElementById("light");
const dark = document.getElementById("dark");
const menu = document.getElementById("menu");
const menuBox = document.getElementById("menuBox");
const backClick = document.getElementById("back-click");

const darkTheme = () => {
    document.documentElement.classList.add("dark");
    localStorage.setItem("change-theme", "dark");
    light.classList.add("hidden");
    dark.classList.remove("hidden");
};

const lightTheme = () => {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("change-theme", "light");
    dark.classList.add("hidden");
    light.classList.remove("hidden");
};

theme.addEventListener("click", () => {
    const themeData = localStorage.getItem("change-theme");

    if (themeData === "dark") {
        lightTheme();
    } else {
        darkTheme();
    }
});

const themeData = localStorage.getItem("change-theme");

if (themeData === "dark") {
    darkTheme();
} else {
    lightTheme();
}

menu.addEventListener("click", () => {
    menuBox.style.top = "15%";
});

backClick.addEventListener("click", () => {
    menuBox.style.top = "-100%";
});
>>>>>>> paingsoekhant
