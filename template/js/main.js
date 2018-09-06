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