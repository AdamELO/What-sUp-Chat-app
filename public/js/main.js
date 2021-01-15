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