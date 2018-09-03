function test() {
    const nav = document.getElementById('thisNav');
    nav.classList.toggle("hidden");
}

function resize() {
    if (window.outerWidth > 560) {
        let element = document.querySelector('#thisNav');
        if (element.classList.contains('hidden')) {
            element.classList.remove("hidden");
        }
    }
}

let urlString = document.location.href;
let urlArray = urlString.split('/');
let href = urlArray[urlArray.length - 1];
let menu = document.querySelectorAll('ul#thisNav li a');
if (href != '') {
    for (let i = 0; i < menu.length; i++) {
        let currentURL = (menu[i].getAttribute("href"));
        if (currentURL === href) {
            menu[i].className = "active";
        } else {
            menu[i].className = "";
        }
    }
} else {
    menu[0].className = "active";
}