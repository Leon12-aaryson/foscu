$(document).ready(function () {
    $('.memimgs').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        adaptiveHeight: false,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});