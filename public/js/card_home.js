function checkVisibilityHome() {
    var cards = document.querySelectorAll('.card-home'); // Seleccionar las tarjetas de la página de inicio
    cards.forEach(function(card) {
        if (isElementInViewport(card)) {
            card.classList.add('active');
        } else {
            card.classList.remove('active');
        }
    });
}

var lastScrollTop = 0;
window.addEventListener("scroll", function() {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop) {
        // Si el desplazamiento es hacia abajo
        checkVisibilityHome();
    } else {
        // Si el desplazamiento es hacia arriba
        checkVisibilityHome();
    }
    lastScrollTop = st <= 0 ? 0 : st;
}, false);
