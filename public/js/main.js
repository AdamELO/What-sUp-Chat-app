$(document).ready(function(){
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