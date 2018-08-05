
(function ($) {
    "use strict";
    var main_wind = $(window);
    var wWidth = $(window).width();

    jQuery(document).ready(function ($) {

        //----------header top select option-------
        $('.selectpicker, .input_select').niceSelect();


        //---------venobox-----------
        $('.venobox').venobox();


        //---------tooltip--------
        $('[data-toggle="tooltip"]').tooltip();


        //------------progress bar-------------
        var smProgress = $('.sm-progress');
        if (smProgress.length > 0) {
            smProgress.waypoint(function () {
                jQuery('.skill-bar').each(function () {
                    jQuery(this).find('.progress-content').animate({
                        width: jQuery(this).attr('data-percentage')
                    }, 2000);
                    jQuery(this).find('.progress-mark').animate({
                        left: jQuery(this).attr('data-percentage')
                    }, {
                        duration: 2000,
                        step: function (abb, ab) {
                            var data = Math.round(abb);
                            jQuery(this).find('.percent').html(data + '%')
                        }
                    })
                })
            }, {
                offset: '90%'
            })
        }


        //------------coundown timer-------------
        $(".countDown").downCount({
            date: '01/01/2019 12:00:00', //month/date/year   HH:MM:SS
            offset: +6 //+GMT
        });


        //-------------fun facts active---------------
        $('.counter').counterUp({
            //delay: 10, // the delay time in ms
            time: 800 // the speed time in ms
        });


        //-----------newsleter subscribe-6 height measure-------------
        var cContentHeight = $(".subscribe6 .subscribe_form").height();
        $(".subscribe6 .subscirbe_img").css("height", cContentHeight);

        //-----------signin form style-4,5 height measure-------------
        var sContentHeight = $(".signup_form4.login").height();
        $(".signin_form4_cover").css("height", sContentHeight);
        
        var s5ContentHeight = $(".signup_form5.login").height();
        $(".signin_form5_cover").css("height", s5ContentHeight);

        //-----------signup form style-4,5 height measure-------------
        var iContentHeight = $(".signup_form4.register, .signup_form5.register").height();
        $(".signup_form4_cover, .signup_form5_cover").css("height", iContentHeight);


        //-----------contact form class add for css3 effect-------------
        $(".abinput_group>input, .abinput_group>textarea").on("focusin", function () {
            $(this).parent().addClass("input_effect");
        });
        $(".abinput_group>input, .abinput_group>textarea").on("focusout", function () {
            $(this).parent().removeClass("input_effect");
        });




    }); //---document-ready-----



    //--------------------testimonial page carousel---------------------
    $(".t_carousel").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<i class='flaticon-arrows-2'></i>", "<i class='flaticon-arrows-1'></i>"],
        autoplay: true,
        smartSpeed: 1200
    });

    //-----------testimonial style-3-----------
    $(".t_carousel3").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        autoplay: false,
        smartSpeed: 1200
    });

    //-----------testimonial style-7-----------
    $(".t_carousel7").owlCarousel({
        items: 2,
        loop: true,
        dots: false,
        nav: true,
        margin: 140,
        autoplay: true,
        stagePadding: 50,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 0
            },
            480: {
                items: 1,
            },
            992: {
                items: 2,
            }
        }
    });


    //-----------testimonial style-8 & 9 & 13-----------
    $(".t_carousel8, .t_carousel9, .t_carousel13").owlCarousel({
        items: 2,
        loop: true,
        dots: false,
        nav: true,
        margin: 30,
        autoplay: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            }
        }
    });


    //-----------testimonial style-10 & 11 & 12-----------
    $(".t_carousel10, .t_carousel11, .t_carousel12").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        margin: 30,
        autoplay: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1200
    });



    //-----------testimonial style-14-----------
    /*-----Testimonial Slick Carousel .testimonial-text-slider .testimonial-image-slider----------------------------*/
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        asNavFor: '.slider-nav'
    });
    /*--------Testimonial Slick Carousel as Nav---------------*/
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: '<i class="fa fa-long-arrow-left"></i>',
        nextArrow: '<i class="fa fa-long-arrow-right"></i>',
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '10px',
        responsive: [
            {
                breakpoint: 450,
                settings: {
                    dots: false,
                    slidesToShow: 3,
                    centerPadding: '0px',
                }
            },
            {
                breakpoint: 420,
                settings: {
                    autoplay: true,
                    dots: false,
                    slidesToShow: 1,
                    centerMode: false,
                }
            }
        ]
    });



    //--------------------team page carousel---------------------
    $(".team_carousel1, .team_carousel5").owlCarousel({
        items: 4,
        loop: true,
        dots: false,
        nav: true,
        margin: 30,
        stagePadding: 25,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        autoplay: true,
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            480: {
                items: 2,
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    });

    //-----------team carousel-6------------------
    $(".team_carousel6").owlCarousel({
        items: 2,
        loop: true,
        dots: false,
        nav: true,
        margin: 30,
        stagePadding: 25,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        autoplay: false,
        smartSpeed: 1200,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            768: {
                items: 2
            }
        }
    });

    //-----------team carousel-15------------------
    $(".team_carousel15").owlCarousel({
        items: 3,
        loop: true,
        dots: false,
        nav: true,
        margin: 30,
        stagePadding: 25,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        autoplay: true,
        smartSpeed: 1200,
        responsive: {
            0: {
                items: 1,
                margin: 30
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });



    //------------------------------carousel page carousel------------------------------
    $(".abcarousel1").owlCarousel({
        items: 4,
        loop: true,
        dots: false,
        nav: true,
        margin: 30,
        autoplay: true,
        navText: ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 0
            },
            480: {
                items: 2,
                margin: 20,
            },
            768: {
                items: 3,
                margin: 20,
            },
            992: {
                items: 4,
            }
        }
    });
    

    /*---------carousel-2---------*/
    $(".abcarousel2").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        autoplay: true,
        navText: ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
        smartSpeed: 1200,
    });

    /*---------carousel-3---------*/
    $(".abcarousel3").owlCarousel({
        items: 3,
        loop: true,
        dots: false,
        nav: true,
        autoplay: true,
        navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3,
            }
        }
    });

    /*---------carousel-4---------*/
    $(".abcarousel4").owlCarousel({
        items: 4,
        loop: true,
        dots: false,
        nav: true,
        autoplay: true,
        navText: ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 0
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            }
        }
    });


    //------------------------------client logo page carousel-1------------------------------
    $(".logo_carousel1").owlCarousel({
        items: 6,
        loop: true,
        dots: false,
        nav: true,
        margin: 30,
        autoplay: true,
        navText: ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 0
            },
            480: {
                items: 2,
                margin: 20,
            },
            768: {
                items: 4,
                margin: 20,
            },
            992: {
                items: 5,
            },
            1200: {
                items: 6,
            }
        }
    });


    //------------------------------client logo page carousel-3------------------------------
    $(".logo_carousel3").owlCarousel({
        items: 4,
        loop: true,
        dots: false,
        nav: true,
        margin: 30,
        stagePadding: 20,
        autoplay: true,
        navText: ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 0
            },
            480: {
                items: 2,
                margin: 20,
            },
            768: {
                items: 3,
                stagePadding: 10,
                margin: 20,
            },
            992: {
                items: 4,
            }
        }
    });


    //------------------------------client logo page carousel-4------------------------------
    $(".logo_carousel4").owlCarousel({
        items: 7,
        loop: true,
        dots: true,
        nav: false,
        autoplay: true,
        smartSpeed: 1200,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 0
            },
            480: {
                items: 2,
                margin: 20,
            },
            768: {
                items: 3,
                margin: 20,
            },
            992: {
                items: 5,
            },
            1200: {
                items: 7,
            }
        }
    });


    //---------------parallax active----------
    if (wWidth > 992) {
        $('.parallax1').parallax("50%", 0.4);
        $('.parallax2').parallax("80%", 0.3);
        $('.parallax3').parallax("80%", 0.4);
		$('.parallax4').parallax("80%", 0.4);

    }
    if (wWidth < 992 && wWidth > 767) {
        $('.parallax1').parallax("100%", 0.3);
        $('.parallax2').parallax("50%", 0.3);
        $('.parallax3').parallax("50%", 0.4);
		$('.parallax4').parallax("80%", 0.4);

	}

    $('.portlux').parallax("50%", 0.3);


    /*------------canvas menu--------------*/
    //-----navigation------
    $(".canvas_click_icon").on("click", function () {
        $(".navigation_overlay").addClass("open_overlay");
        $(".navigation_wrapper").addClass("visible");
    });

    $(".cross_bar").on("click", function () {
        $(".navigation_overlay").removeClass("open_overlay");
        $(".navigation_wrapper").removeClass("visible");
    });



    //--------Scroll Top---------
    main_wind.on('scroll', function () {
        if ($(this).scrollTop() > 200) {
            $('.scroll_top').fadeIn();
            $('.scroll_top').removeClass('not_visible');
        } else {
            $('.scroll_top').fadeOut();
        }
    });
    $('.scroll_top').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });


}(jQuery));
