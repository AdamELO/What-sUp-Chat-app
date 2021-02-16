$(document).ready(function(){
    // menu dashboard open/close
    $('.ulmenu ').on('click', function () {
        $('.menuli').toggle();
        $('.icone').toggleClass('fa-caret-down fa-caret-up');
    });
    
    // menu navbar
    $('#menuBtn').on('click',function(){
        $('#respMenu').toggle()
        $('.menu').toggle();
        $('.closeMenu').toggle();
    })
    
    //carousel
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:true,
        nav:true,
        items: 1,
        center:true,
        dots:false,
        autoplay:false,
    });
});