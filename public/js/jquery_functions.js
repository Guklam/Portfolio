/* ----------------------------------------------- */
/*  Fonctions
/* ----------------------------------------------- */

// Menu
$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 100) {
        $('#menu').addClass('fixed');
    } else {
        $('#menu').removeClass('fixed');
    }
});

//Fonction quand le DOM est chargé
$(document).ready(function() {
    //Animation de l'overlay à l'ouverture
    $('#nav-icon').click(function() {
        $(this).toggleClass('animate-icon');
        $('#overlay').fadeToggle();
        $('#arrow-to-up').toggle();
    });

    //Animation de la fermeture de l'overlay
    $('#overlay').click(function() {
        $('#nav-icon').removeClass('animate-icon');
        $('#overlay').toggle();
    });

    //Scroll de la page plus "smoothly"
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({
            scrollTop: $(page).offset().top
        }, speed); // Go
        return false;
    });
});

//Animation de la flèche de navigation
$(window).bind('scroll', function() {
    if ($(window).scrollTop() > $('#main-page').height()) {
        $('#arrow-to-up').addClass('fixed');
    } else {
        $('#arrow-to-up').removeClass('fixed');
    }
});
