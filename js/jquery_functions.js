/* -----------------------------------------------
/* Author : Vincent Garreau  - vincentgarreau.com
/* MIT license: http://opensource.org/licenses/MIT
/* GitHub : github.com/VincentGarreau/particles.js
/* v2.0.0
/* ----------------------------------------------- */

particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 40,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 5
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
            }
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": false,
                "mode": "repulse"
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 200,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});


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

/* -----------------------------------------------
/*   typeit - The most versatile animated typing utility on the planet.
/*   Author: Alex MacArthur <alex@macarthur.me> (https://macarthur.me)
/*   Version: v5.6.1
/*   URL: https://typeitjs.com
/*   License: GPL-2.0
/* ----------------------------------------------- */

//Texte de présentation
new TypeIt('#presentation', {
    strings: ["Développeur web", "Intégrateur web", "Web designer"],
    speed: 70,
    breakLines: false,
    autoStart: false
});