$('.brand-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});

$('.hits').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.hits-nav'
  });
$('.hits-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.hits',
    centerMode: true,
    focusOnSelect: true,
    arrows: false
});     