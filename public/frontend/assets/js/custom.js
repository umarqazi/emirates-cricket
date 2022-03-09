/* Document Ready Starts */
$(document).ready(function () {
    // Hamburger
    $(".hamburger").on('click', function() {
        $("body").toggleClass("menu-btn-clicked");
        $(".sidebar-back-layer").on('click', function() {
            $("body").removeClass("menu-btn-clicked");
            $('.sidebar-back-layer').css("visibility","hidden");
        })
        $('.sidebar-back-layer').css("visibility","visible");
        
        if($('body').hasClass('menu-btn-clicked')){
            document.querySelector('.mobile-menu-container-inner > nav > ul').focus();
        }
        $(".sidebar-back-layer").on('click', function() {
            $("body").removeClass("menu-btn-clicked");
            $('.sidebar-back-layer').css("visibility","hidden");
        })
        
        if (!$(this).hasClass("menu-btn-clicked")) {
            $('.sidebar-back-layer').css("visibility","hidden");
        }
    });
    
    

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $("body").addClass("scrolled");
        } else {
            $("body").removeClass("scrolled");
        }
    });

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
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
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

    $('.mobile-no').keypress(function(event) {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode === 8 || event.keyCode === 43) {
            return true;
        } else if ( key < 48 || key > 57 ) {
            return false;
        } else {
            return true;
        }
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
    // $('.sidebar').on('mouseover',function(){
    //     $('body').addClass("fixed-position");
    // });
    $('.sidebar').on('mouseleave',function(){
        $('body').removeClass("fixed-position");
    });

    $('#search').on('change',function(){
        var year = $("#search").val();
         $.ajax({
            headers: {
               "X-CSRF-TOKEN" : $('meta[name="csrf-token"]').attr("content"),
            },
            type: "GET",
            url: "/news",
            data : { year : year },
            success : function(data) {
                $('.news-render').html(data);
            }
         });
    });
});


$(document).ready(function () {
    // WOW JS
    new WOW().init();

    // scroll function for header background on scroll //
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $("body").addClass("scrolled");
        } else {
            $("body").removeClass("scrolled");
        }
    });

    // Header Dropdown Arrow
    $(".header-bottom nav > ul > li")
        .children("ul")
        .parent("li")
        .addClass("has-dropdown");

    //Side menu on mobile
    $(".mobile-menu-container-inner > nav > ul > li > .sub-menu")
        .parent("li")
        .addClass("has-sub-menu");
    if ($(window).innerWidth() <= 575) {
        $(".mobile-menu-container-inner > nav > ul > li.has-sub-menu").click(
            function () {
                $(this).toggleClass("clicked-for-sub-menu");
                $(this).children(".sub-menu").slideToggle(300);
            }
        );
    }

    // Banner slider
    $(".home-banner-slider").slick({
        dots: true,
        arrows: false,
        loop: true,
        autoplay: true,
        speed: 700,
        fade: true,
        cssEase: "linear",
    });

    $("#type").on("change", function () {
        let type = $(this).val();
        $.ajax({
            type: "get",
            url: "/sub-types",
            data: {
                type,
            },
            success: function (sub_types) {
                let sub_types_select = $("#sub-types");
                sub_types_select.html("");
                if(sub_types.length > 0){
                    sub_types_select.prop( "disabled", false )
                    sub_types_select.html("");
                    $.each(sub_types, function (i, item) {
                        sub_types_select.append(
                            $("<option>", {
                                value: item,
                                text: item,
                            })
                        );
                    });
                }else{
                    sub_types_select.prop( "disabled", true )
                }
            },
        });
    });
    const $menu = $('.mobile-menu-container-inner');
    $(document).mouseup(e => {
        if (!$menu.is(e.target) // if the target of the click isn't the container...
        && $menu.has(e.target).length === 0) // ... nor a descendant of the container
        {
          $('body').removeClass('menu-btn-clicked');
       }
      });
});