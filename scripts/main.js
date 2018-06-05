$(document).ready(function () {

    // 'Burger' button's toggle function 
    $(".burger").click(function () {
        $(".mobile-nav").toggleClass("active", 600);
    })

    // Slick slider init
    $(".slideshow").slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
    });

    // Add more scripts here

})