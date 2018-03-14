$(function(){
    $('[placeholder]').placeholder();
    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    });
    $('.slider-cont').slick({
        infinite: true,
        autoplay: false,
        dots: false,
        arrows: true,
        fade: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendDots: '.slider-navig',
        prevArrow: '<span data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"></span>',
        nextArrow: '<span data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"></span>',
    });
    now = new Date();
    var perem = (24-now.getHours())*3600;
    $(".el-timer").attr("data-timer", perem);
    $(".el-timer").TimeCircles({
        "animation": "smooth",
        "bg_width": 0.7,
        "fg_width": 0.022,
        "circle_bg_color": "#d2ad29",
        "time": {
            "Days": {
                "text": "Дней",
                "color": "#3d3531",
                "show": false
            },
            "Hours": {
                "text": "Часов",
                "color": "#3d3531",
                "show": true
            },
            "Minutes": {
                "text": "Минут‚",
                "color": "#3d3531",
                "show": true
            },
            "Seconds": {
                "text": "Секунд",
                "color": "#3d3531",
                "show": true
            }
        }
    }); 
});
 