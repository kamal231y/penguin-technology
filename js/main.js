(function ($) {
    "use strict";
    window.addEventListener('scroll', function () {
        const header = document.querySelector('.header-section');
        header.classList.toggle("sticky", window.scrollY > 0);
    });
    $('.mobileMenu-icon').on('click', function () {
        $('.mobile-menu').addClass('slide');
    });
    $('.close-btn').on('click', function () {
        $('.mobile-menu').removeClass('slide');
    });
    $('.drop-down').on('click', function () {
        $(this).toggleClass('active').next('ul').slideToggle();
        $(this).parent().siblings().children('ul').slideUp();
        $(this).parent().siblings().children('.active').removeClass('active');
    });
    jQuery(window).on('load', function () {
        $(".preloader").delay(1600).fadeOut("slow");
    });
    $('select').niceSelect();
    $(".counter-item").each(function () {
        $(this).isInViewport(function (status) {
            if (status === "entered") {
                for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
                    var el = document.querySelectorAll('.odometer')[i];
                    el.innerHTML = el.getAttribute("data-odometer-final");
                }
            }
        });
    });
    $('.instructor-active').slick({
        centerMode: false,
        slidesToShow: 3,
        arrows: true,
        prevArrow: '<i class="prev fas fa-angle-left"></i>',
        nextArrow: '<i class="next fas fa-angle-right"></i>',
        dots: false,
        responsive: [{
            breakpoint: 1200,
            settings: {
                arrows: true,
                dots: false,
                centerMode: false,
                slidesToShow: 2
            }
        }, {
            breakpoint: 991,
            settings: {
                arrows: true,
                dots: false,
                centerMode: false,
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }, {
            breakpoint: 540,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }]
    });
    $('.event-active').slick({
        centerMode: false,
        slidesToShow: 3,
        arrows: false,
        prevArrow: '<i class="prev fas fa-chevron-left"></i>',
        nextArrow: '<i class="next fas fa-chevron-right"></i>',
        dots: true,
        responsive: [{
            breakpoint: 1200,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 2
            }
        }, {
            breakpoint: 991,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }, {
            breakpoint: 540,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }]
    });
    // $('.blog-active').slick({
    //     centerMode: false,
    //     slidesToShow: 3,
    //     arrows: false,
    //     prevArrow: '<i class="prev fas fa-angle-left"></i>',
    //     nextArrow: '<i class="next fas fa-angle-right"></i>',
    //     dots: true,
    //     responsive: [{
    //         breakpoint: 1200,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 2
    //         }
    //     }, {
    //         breakpoint: 991,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 2
    //         }
    //     }, {
    //         breakpoint: 768,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 1
    //         }
    //     }, {
    //         breakpoint: 540,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 1
    //         }
    //     }, {
    //         breakpoint: 480,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 1
    //         }
    //     }]
    // });
    // $('.review-active').slick({
    //     centerMode: false,
    //     slidesToShow: 3,
    //     arrows: false,
    //     dots: true,
    //     responsive: [{
    //         breakpoint: 1200,
    //         settings: {
    //             arrows: true,
    //             dots: false,
    //             centerMode: false,
    //             slidesToShow: 2
    //         }
    //     }, {
    //         breakpoint: 991,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 2
    //         }
    //     }, {
    //         breakpoint: 768,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 1
    //         }
    //     }, {
    //         breakpoint: 540,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 1
    //         }
    //     }, {
    //         breakpoint: 480,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 1
    //         }
    //     }]
    // });
    $('.subject-slider').slick({
        centerMode: false,
        slidesToShow: 4,
        arrows: true,
        prevArrow: '<i class="prev fas fa-angle-left"></i>',
        nextArrow: '<i class="next fas fa-angle-right"></i>',
        dots: false,
        responsive: [{
            breakpoint: 1199,
            settings: {
                arrows: true,
                dots: false,
                centerMode: false,
                slidesToShow: 3
            }
        }, {
            breakpoint: 991,
            settings: {
                arrows: true,
                dots: false,
                centerMode: false,
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }, {
            breakpoint: 540,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }]
    });
    // $('.course-slider').slick({
    //     centerMode: false,
    //     slidesToShow: 2,
    //     arrows: false,
    //     prevArrow: '<i class="prev fas fa-angle-left"></i>',
    //     nextArrow: '<i class="next fas fa-angle-right"></i>',
    //     dots: true,
    //     responsive: [{
    //         breakpoint: 1199,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 2
    //         }
    //     }, {
    //         breakpoint: 991,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 2
    //         }
    //     }, {
    //         breakpoint: 768,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 1
    //         }
    //     }, {
    //         breakpoint: 540,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 1
    //         }
    //     }, {
    //         breakpoint: 480,
    //         settings: {
    //             arrows: false,
    //             dots: true,
    //             centerMode: false,
    //             slidesToShow: 1
    //         }
    //     }]
    // });
    $('.event-slider').slick({
        centerMode: false,
        rows: 2,
        slidesToShow: 3,
        arrows: false,
        dots: true,
        responsive: [{
            breakpoint: 1199,
            settings: {
                rows: 1,
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 2
            }
        }, {
            breakpoint: 991,
            settings: {
                rows: 1,
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                rows: 1,
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }, {
            breakpoint: 540,
            settings: {
                rows: 1,
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                rows: 1,
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }]
    });
    var history = $('.history');
    $('.history').magnificPopup({
        type: 'iframe'
    });
}(jQuery));