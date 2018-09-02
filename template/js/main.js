function test() {
    const nav = document.getElementById('thisNav');
    nav.classList.toggle("hidden");
}

function resize() {
    if (window.outerWidth > 560) {
        var element = document.querySelector('#thisNav');
        if (element.classList.contains('hidden')) {
            element.classList.remove("hidden");
        }
    }
}