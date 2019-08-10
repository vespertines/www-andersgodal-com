jQuery(document).ready(function () {

    var profile = $(".profile");
    var contact = $("footer");
    var hash = window.location.hash;

    var scrolling = function() {
        if (hash === "#profile") {
            $("html, body").animate(
                {
                    scrollTop: profile.offset().top - 170
                },
                1000
            );
        } else if (hash === "#contact") {
            $("html, body").animate(
                {
                    scrollTop: contact.offset().top - 170
                },
                1000
            );
        }
    }

    $(".link").click(function() {
        hash = $(this).attr("href").replace("/", "");
        scrolling();
    });

    $(".overlay").click(function() {
        if ($("nav div").hasClass("state")) {
            $("nav div").removeClass("state");
            $(".overlay").hide();
        }
    });
    
    if (window.location.hash) {
        scrolling();
    }

    $(".header span").click(function() {
        var profile = $(".profile");
        $("html, body").animate({
            scrollTop: profile.offset().top - 170
        }, 1000);
        return false;
    });

    $("nav div").click(function() {
        if ($(this).hasClass("state")) {
            $(this).removeClass("state");
            $(".overlay").hide();
        } else {
            $(this).addClass("state");
            $(".overlay").show();
        }
    });

    if ($("body").hasClass("home")) {
        var homeSwiper = new Swiper(".swiper-container", {
            speed: 500,
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false
            },
            touchRatio: 0,
            navigation: {
                prevEl: ".home-prev",
                nextEl: ".home-next"
            }
        });
    }

    if ($(".swiper-container .swiper-slide").length > 1) {
        var projectSwiper = new Swiper(".swiper-container", {
            speed: 500,
            loop: false,
            navigation: {
                nextEl: ".next",
                prevEl: ".prev"
            },
            pagination: {
                el: ".pagination",
                type: "fraction",
                renderFraction: function (t, i) {
                    return '<span class="' + t + '"></span> / <span class="' + i + '"></span>'
                }
            }
        });

        projectSwiper.on("reachEnd", function () {
            $(".next").click(function () {
                var nextProject = $(".next-project a").attr("href");
                window.location.href = nextProject;
            })
        });
    } else {
        $(".prev").remove();
        $(".next").remove();
    };

    var projectNav = $(".project-name");

    $(window).mousemove(function (event) {
        if ($(".page-template-page-projects")) {
            if ($(document).width() / 2 > event.pageX) {
                projectNav.css({
                    top: event.pageY + "px",
                    left: event.pageX + 20 + "px"
                });
            } else {
                projectNav.css({
                    top: event.pageY + "px",
                    left: event.pageX - projectNav.outerWidth() - 20 + "px"
                });
            }
            $(".box").mouseenter(function () {
                var projectTitle = $(this).data("project");
                projectNav.css({
                    opacity: 1
                }).html(projectTitle);
            }).mouseleave(function () {
                projectNav.css({
                    opacity: 0
                }).html("");
            });
        }
    });
});