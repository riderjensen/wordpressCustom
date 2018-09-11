function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu;


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