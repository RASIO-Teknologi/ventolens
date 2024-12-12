$(".gapro-carousel").slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    speed: 2000,
    autoplaySpeed: 3000,
    variableWidth: true,
    centerMode: true,
    nextArrow: $(".gapro-btn.next"),
    prevArrow: $(".gapro-btn.prev"),
    responsive: [
        {
            breakpoint: 767,
            settings: {
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                variableWidth: false,
                centerMode: false,
            },
        },
        {
            breakpoint: 998,
            settings: {
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                variableWidth: false,
                centerMode: false,
            },
        },
    ],
});

$(".date-carousel").slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    speed: 2000,
    autoplaySpeed: 3000,
    variableWidth: true,
    centerMode: true,
    nextArrow: $(".date-btn.next"),
    prevArrow: $(".date-btn.prev"),
    responsive: [
        {
            breakpoint: 767,
            settings: {
                dots: false,
                slidesToShow: 1,
                arrows: true,
                variableWidth: true,
            },
        },
        {
            breakpoint: 998,
            settings: {
                dots: false,
                slidesToShow: 1,
                arrows: true,
                variableWidth: true,
            },
        },
    ],
});

$(".wa-carousel").slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    speed: 2000,
    autoplaySpeed: 3000,
    variableWidth: true,
    centerMode: true,
    nextArrow: $(".wa-btn.next"),
    prevArrow: $(".wa-btn.prev"),
    responsive: [
        {
            breakpoint: 767,
            settings: {
                dots: false,
                slidesToShow: 1,
                arrows: true,
                variableWidth: true,
            },
        },
        {
            breakpoint: 998,
            settings: {
                dots: false,
                slidesToShow: 1,
                arrows: true,
                variableWidth: true,
            },
        },
    ],
});
