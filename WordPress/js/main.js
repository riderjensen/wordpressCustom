function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu;


let urlString = document.location.href;
let urlArray = urlString.split('/');
let href = urlArray[urlArray.length - 2];
let menu = document.querySelectorAll('ul#primaryNav li a');
if (href != '') {
    for (let i = 0; i < menu.length; i++) {
        let endMenu = menu[i].href.split('/');
        let endMenuNum = endMenu[endMenu.length - 2];
        if (endMenuNum == href) {
            if (menu[i].parentNode.classList.contains("parent")) {

            } else {
                menu[i].className = "active";
                if (menu[i].parentNode.parentNode.parentNode.tagName == "LI")
                    menu[i].parentNode.parentNode.parentNode.className = "parent active";
            }

        } else {
            menu[i].className = "";
        }
    }
} else {
    menu[0].className = "active";
}