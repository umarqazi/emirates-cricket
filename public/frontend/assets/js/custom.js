/* Document Ready Starts */
$(document).ready(function () {

    $('.player-registration').attr('disabled', true);

    // mobile menu toggle
    $('.mobile-btn').click(function(){
        $('.mobile-btn').toggleClass('rotate-btn');
        $('.sidebar-nav').slideToggle();
    });

//    nav scroll button
    $('.nav-button').on('click', function(){
        $('body').toggleClass('sidebar-collapse');
    });

    if ($(window).width() <= 1279 ){
        $('.sidebar-nav li:has(ul)').addClass('submenu-link');

        $('li.submenu-link i').click(function (e){
            $(this).toggleClass('rotate-icon');
            $(this).siblings('.sub-menu').slideToggle();
        });
    }


//    banner slider
    $('.banner-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000
    });

//    News slider
    $('.news-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

//    Logo slider
    $('.logo-sldier').slick({
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

//    Social slider
    $('.social-slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

//    fixtures slider
    $(".fixtures").champ();

//    files drag
    $('.custom-drag-file input').change(function () {
        $('.custom-drag-file p').text(this.files.length + " file(s) selected");
    });

//    file upload
    $('#file-upload').change(function() {
        var i = $(this).prev('label').clone();
        var file = $('#file-upload')[0].files[0].name;
        $(this).prev('label').text(file);
    });

    $('#file-upload1').change(function() {
        var i = $(this).prev('label').clone();
        var file = $('#file-upload1')[0].files[0].name;
        $(this).prev('label').text(file);
    });

    $(".tournament-registration-accordian").champ({
        plugin_type :  "accordion"
    });

    $('.terms-and-condition').bind('click', function () {
        if ($(this).is(':checked')) {
            $('.player-registration').attr('disabled', false);
            $('.tournament-registration').attr('disabled', false);
        } else {
            $('.player-registration').attr('disabled', true);
            $('.tournament-registration').attr('disabled', true);
        }
    });

    $('.fixture_slide').slick({
        autoplay: true,
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    if ($('.sub-menu').height() >= 400) {
        $('.sub-menu').addClass("show");
      }
});


  
