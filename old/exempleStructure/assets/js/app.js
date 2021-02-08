// start my app
let appElement = document.getElementById("app-root");

if (appElement){
   startApp(appElement);
}

function startApp(parent){
    let subElement = document.createElement('span');
    subElement.style.backgroundColor = "coral";
    subElement.style.width = "80%";
    subElement.style.height = '20vh';
    subElement.style.display = "inline-block";
    subElement.innerHTML = "Hello world!"
    parent.append(subElement);
}

//Handle theme click

document.getElementById("theme-button").addEventListener("click",function (e){
    getTheme();
});

function getTheme (save = true){
    let theme = window.localStorage.getItem("theme");
    if (save){
        theme = (theme !== "dark") ? "dark" : "light";
    }
    let style = document.querySelector("link")
    style.href = "./assets/css/"+theme+".css";
    window.localStorage.setItem('theme',theme);
}

if(["dark","light"].includes(window.localStorage.getItem("theme"))){
    getTheme(false);
}
