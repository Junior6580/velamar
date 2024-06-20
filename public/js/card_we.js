

function checkVisibility() {
    var cards = document.querySelectorAll('.card');
    var visionSection = document.getElementById('card_viymi');
    var missionSection = document.getElementById('card_viymi');
    var visionSectionRect = visionSection.getBoundingClientRect();
    var missionSectionRect = missionSection.getBoundingClientRect();
    var scrolledPastVision = window.scrollY > visionSectionRect.bottom;
    var scrolledPastMission = window.scrollY > missionSectionRect.bottom;

    cards.forEach(function(card) {
        if ((scrolledPastVision && scrolledPastMission) || isElementInViewport(card)) {
            card.classList.add('active');
        } else {
            card.classList.remove('active');
        }
    });
}

function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

var lastScrollTop = 0;
window.addEventListener("scroll", function() {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop) {
        // If the scroll is going down
        checkVisibility();
    } else {
        // If the scroll is going up
        checkVisibility();
    }
    lastScrollTop = st <= 0 ? 0 : st;
}, false);


