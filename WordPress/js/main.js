function test() {
    const nav = document.getElementById('thisNav');
    nav.classList.toggle("hidden");
}

function resize() {

    if (window.outerWidth <= 559) {
        let element = document.querySelector('#thisNav');
        element.classList.add("hidden");
    }
    if (window.outerWidth > 559) {
        const nav = document.getElementById('thisNav');
        nav.classList.remove("hidden");
    }
}

if (window.outerWidth <= 559) {
    let element = document.querySelector('#thisNav');
    element.classList.add("hidden");
}
if (window.outerWidth > 559) {
    const nav = document.getElementById('thisNav');
    nav.classList.remove("hidden");
}

let urlString = document.location.href;
let urlArray = urlString.split('/');
let href = urlArray[urlArray.length - 2];
let menu = document.querySelectorAll('ul#thisNav li a');
if (href != '') {
    for (let i = 0; i < menu.length; i++) {
        let endMenu = menu[i].href.split('/');
        let endMenuNum = endMenu[endMenu.length - 2];
        if (endMenuNum == href) {
            menu[i].className = "active";
        } else {
            menu[i].className = "";
        }
    }
} else {
    menu[0].className = "active";
}

let element = document.querySelector('#thisNav');
if (element.classList.contains('hidden')) {
    element.classList.remove("hidden");
}