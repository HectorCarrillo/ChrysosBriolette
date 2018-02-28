$(document).ready(function() {
    //Boton arriba
    // $('.up').hide();
    // $(window).scroll(function(e) {
    //     if ($(this).scrollTop() > 100) {
    //         $('.up').fadeIn('1000');
    //     } else {
    //         $('.up').fadeOut('1000');
    //     }
    // });
    // $('.up').click(function(e) {
    //     $('body, html').animate({
    //         scrollTop: 0
    //     }, 50);
    // });
   
    $(window).scroll(function(e) {
        if ($(this).scrollTop() >0) {
            $('header').addClass('header2');
        } else {
            $('header').removeClass('header2');
        }
        if (screen.width<=780){
            $('header').removeClass('header2');
        }
    });
});