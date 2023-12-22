document.addEventListener('DOMContentLoaded', function() {
    var topLink = document.getElementById('top-link');

    topLink.addEventListener('click', function(event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000, // Ajustez la vitesse 
    });

    // Ajoutez une gestion du scroll pour faire défiler d'une section à l'autre
    let currentSectionIndex = 1;

    window.addEventListener('wheel', function(event) {
        if (event.deltaY > 0) {
            // Scrolling down
            currentSectionIndex += 1;
        } else {
            // Scrolling up
            currentSectionIndex = Math.max(0, currentSectionIndex - 1);
        }

        const sections = document.querySelectorAll('section');
        const targetElement = sections[currentSectionIndex];

        if (targetElement) {
            scroll.animateScroll(targetElement);
        }
    });
});