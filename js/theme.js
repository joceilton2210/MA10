/*! lozad.js - v1.9.0 - 2019-02-09
 * https://github.com/ApoorvSaxena/lozad.js
 * Copyright (c) 2019 Apoorv Saxena; Licensed MIT */
! function(t, e) { "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.lozad = e() }(this, function() {
    "use strict";
    var g = Object.assign || function(t) { for (var e = 1; e < arguments.length; e++) { var r = arguments[e]; for (var o in r) Object.prototype.hasOwnProperty.call(r, o) && (t[o] = r[o]) } return t },
        n = "undefined" != typeof document && document.documentMode,
        l = {
            rootMargin: "0px",
            threshold: 0,
            load: function(t) {
                if ("picture" === t.nodeName.toLowerCase()) {
                    var e = document.createElement("img");
                    n && t.getAttribute("data-iesrc") && (e.src = t.getAttribute("data-iesrc")), t.getAttribute("data-alt") && (e.alt = t.getAttribute("data-alt")), t.appendChild(e)
                }
                if ("video" === t.nodeName.toLowerCase() && !t.getAttribute("data-src") && t.children) {
                    for (var r = t.children, o = void 0, a = 0; a <= r.length - 1; a++)(o = r[a].getAttribute("data-src")) && (r[a].src = o);
                    t.load()
                }
                t.getAttribute("data-src") && (t.src = t.getAttribute("data-src")), t.getAttribute("data-srcset") && t.setAttribute("srcset", t.getAttribute("data-srcset")), t.getAttribute("data-background-image") && (t.style.backgroundImage = "url('" + t.getAttribute("data-background-image") + "')"), t.getAttribute("data-toggle-class") && t.classList.toggle(t.getAttribute("data-toggle-class"))
            },
            loaded: function() {}
        };

    function f(t) { t.setAttribute("data-loaded", !0) }
    var b = function(t) { return "true" === t.getAttribute("data-loaded") };
    return function() {
        var r, o, a = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : ".lozad",
            t = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {},
            e = g({}, l, t),
            n = e.root,
            i = e.rootMargin,
            d = e.threshold,
            c = e.load,
            u = e.loaded,
            s = void 0;
        return window.IntersectionObserver && (s = new IntersectionObserver((r = c, o = u, function(t, e) {
            t.forEach(function(t) {
                (0 < t.intersectionRatio || t.isIntersecting) && (e.unobserve(t.target), b(t.target) || (r(t.target), f(t.target), o(t.target)))
            })
        }), { root: n, rootMargin: i, threshold: d })), { observe: function() { for (var t = function(t) { var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : document; return t instanceof Element ? [t] : t instanceof NodeList ? t : e.querySelectorAll(t) }(a, n), e = 0; e < t.length; e++) b(t[e]) || (s ? s.observe(t[e]) : (c(t[e]), f(t[e]), u(t[e]))) }, triggerLoad: function(t) { b(t) || (c(t), f(t), u(t)) }, observer: s }
    }
});
var isMobile = navigator.userAgent.match(/iPad|iPhone|Android|Blackberry/i);
if (isMobile) {
    var lazy = document.getElementsByTagName('img');
    Array.prototype.forEach.call(lazy, function(imagem) {
        if (imagem.getAttribute("data-src") === null) { imagem.classList.add("loaded"); } else {
            imagem.src = imagem.getAttribute("data-src");
            imagem.classList.add("loaded");
        }
    });
} else {
    const observer = lozad('.lazy-image', { rootMargin: '300px 0px', loaded: function(el) { el.classList.add('loaded'); } });
    observer.observe();
}
$('.footer-social2').append('');
var links = document.getElementsByTagName('a');
Array.prototype.forEach.call(links, function(link) { if (link.href.indexOf(location.hostname) < 0) { link.href += '?utm_source=' + location.hostname + ''; } });


(function($) {
    "use strict";
    $(".search-trigger").on('click', function() { $(".search-bar").addClass("active"); });
    $(".search-close").on('click', function() { $(".search-bar").removeClass("active"); });
    $('#toggle-view li').on('click', function() {
        var text = $(this).children('div.toggle-panel');
        if (text.is(':hidden')) {
            text.slideDown('200');
            $(this).children('span').addClass("fa-angle-up").removeClass("fa-angle-down");
        } else {
            text.slideUp('200');
            $(this).children('span').addClass("fa-angle-down").removeClass("fa-angle-up");
        }
    });
    new WOW().init();
    $(".nav-tabs  a").on('click', function(event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
    });
    $(".nav-trigger").on('click', function() {
        $("#sidebar-wrapper").addClass("active");
        $("body").addClass("sidemenu-active");
    });
    $(".body-overlay").on('click', function() {
        $("nav-trigger").removeClass("active");
        $("#sidebar-wrapper").removeClass("active");
        $("body").removeClass("sidemenu-active");
    });
    $('.home-slider').slick({ dots: false, infinite: true, speed: 300, slidesToShow: 1, slidesToScroll: 1, arrows: true, autoplay: true, prevArrow: $('.hs-prev'), nextArrow: $('.hs-next') });
    $('.elban').slick({ dots: false, infinite: true, speed: 400, autoplaySpeed: 6000, slidesToShow: 1, slidesToScroll: 1, arrows: false, autoplay: true, fade: true });
    $('.colunistas-slide').slick({ dots: false, infinite: true, speed: 300, slidesToShow: 6, slidesToScroll: 1, arrows: true, autoplay: true, prevArrow: $('.hs-prev'), nextArrow: $('.hs-next') });
    $('.post-single-slider').slick({ dots: true, arrows: false, infinite: true, speed: 300, slidesToShow: 1, slidesToScroll: 1 });
})(jQuery);