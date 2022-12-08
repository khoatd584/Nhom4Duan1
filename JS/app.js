// Slick slider
$(document).ready(function() {
    $('.shop').slick({

        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ],
        prevArrow: `<button type='button' class='slick-prev arrow'><ion-icon name="chevron-back-outline"></ion-icon></button>`,
        nextArrow: `<button type='button' class='slick-next arrow'><ion-icon name="chevron-forward-outline"></ion-icon></button>`
    });
});
// End Slider