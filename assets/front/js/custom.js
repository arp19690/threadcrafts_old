var num_of_inputs = jQuery(".gMapLocation").length;
var i;
var loop = num_of_inputs - 1;
for (i = "0"; i <= loop; i++) {
    var input = jQuery(".gMapLocation")[i];
    var autocomplete = new google.maps.places.Autocomplete(input)
}
jQuery(document).ready(function (e) {
    "use strict";
    setTimeout(function () {
        e("#header .alert").slideUp()
    }, 5 * 1e3);
    e(".currency-change-ul li").click(function () {
        e(".please-wait-currency").show()
    });
    e("ul.my-account-sidebar li a").click(function () {
        e("ul.my-account-sidebar li").removeClass("active");
        e(this).parent().addClass("active")
    });
    e(".validate-form").validate();
    e(".please_login").click(function (e) {
        e.preventDefault();
        alert("Please login in order to proceed")
    });
    e("img.lazy").lazyload({effect: "fadeIn"});
    if (false) {
        document.documentElement.className += " ie10"
    }
    var t = function () {
        return e(window).width() < 980 ? true : false
    };
    var n = function () {
        e("html").toggleClass("large-screen", !t())
    };
    e("#toTheTop").click(function () {
        e("html, body").animate({scrollTop: 0}, 2e3, "easeInOutQuart");
        return false
    });
    e("#spyMenu a").click(function () {
        var t = e(this);
        e("html, body").animate({scrollTop: e(t.attr("href")).offset().top - 70}, 700, "easeInOutQuart");
        return false
    });
    e(window).load(function () {
        var t = {debug: false, auto: {play: false}, width: "100%", height: "variable", items: {height: "variable"}, prev: {}, next: {}, pagination: {}, scroll: {duration: 1e3, items: 1}, transition: true};
        e(".carouFredSel").each(function () {
            var n = e(this);
            t.prev.button = e("#" + n.data("nav") + "Left");
            t.next.button = e("#" + n.data("nav") + "Right");
            if (n.data("responsive")) {
                t.responsive = true
            } else {
                t.responsive = false
            }
            if (true === n.data("autoplay")) {
                t.auto.play = true
            }
            t.onCreate = function () {
                n.find(".slide").css({width: n.parent().width()})
            };
            n.carouFredSel(t)
        })
    });
    if (jQuery().revolution) {
        var r = e(".fullwidthbanner").revolution({delay: 1e4, startheight: 377, startwidth: 1400, navigationType: "bullet", navigationStyle: "round", navigationVAlign: "bottom", touchenabled: "on", onHoverStop: "on", navigationArrows: "none", soloArrowLeftHalign: "left", soloArrowLeftValign: "center", soloArrowRightHalign: "right", soloArrowRightValign: "center", navigationVOffset: e("body").hasClass("boxed") ? 10 : 60, navOffsetHorizontal: 0, navOffsetVertical: 20, hideAllCaptionAtLilmit: 481, hideSliderAtLimit: 300, stopAtSlide: -1, stopAfterLoops: -1, shadow: 0, fullWidth: "on"});
        e("#sliderRevLeft").on("click", function () {
            r.revprev();
            return false
        });
        e("#sliderRevRight").on("click", function () {
            r.revnext();
            return false
        })
    }
    e(".accordion-group .accordion-toggle").click(function () {
        var t = e(this).parent().parent();
        if (t.hasClass("active")) {
            t.removeClass("active")
        } else {
            t.addClass("active").siblings().removeClass("active")
        }
    });
    e(document).on("focus", ".large-screen #navSearchInput", function () {
        e(this).parent().parent().addClass("search-mode");
        i()
    });
    e(document).on("blur", ".large-screen #navSearchInput", function () {
        e(this).parent().parent().removeClass("search-mode");
        i()
    });
    var i = function () {
        setTimeout(function () {
            e("#mainNavigation > li.active").trigger("mouseover")
        }, 200)
    };
    var s = function () {
        if (t()) {
            e(window).off("scroll.onlyDesktop")
        } else {
            var n = e("#header").height(), r = e("#stickyNavbar").height();
            e(window).on("scroll.onlyDesktop", function () {
                var t = e(window).scrollTop();
                if (t > n) {
                    e("#stickyNavbar").removeClass("navbar-static-top").addClass("navbar-fixed-top");
                    e(".large-screen #header").css({marginBottom: r})
                } else {
                    e("#stickyNavbar").removeClass("navbar-fixed-top").addClass("navbar-static-top");
                    e(".large-screen #header").css({marginBottom: 0})
                }
            })
        }
    };
    e(".product-preview .thumbs a").click(function (t) {
        t.preventDefault();
        e(e(this).attr("href")).attr("src", e(this).find("img").attr("src"));
        e(this).parent().addClass("active").siblings(".active").removeClass("active")
    });
    e(".numbered > .clickable").click(function (t) {
        t.preventDefault();
        var n = parseInt(e(this).siblings('input[type="text"]').val(), 10);
        var min_quantity = parseInt($(this).siblings('input[type="text"]').attr('min'), 10);
        ;
        if (isNaN(n)) {
            n = 1
        }
        if (e(this).hasClass("add-one")) {
            e(this).siblings('input[type="text"]').val(n + 1)
        } else {
            n = n < 2 ? 2 : n;
            if (n > min_quantity) {
                e(this).siblings('input[type="text"]').val(n - 1)
            }
        }
    });
    (function () {
        var t = e("#isotopeContainer");
        t.imagesLoaded(function () {
            t.isotope({itemSelector: ".isotope--target", layoutMode: "fitRows", getSortData: {price: function (e) {
                        return e.data("price")
                    }, name: function (e) {
                        return e.find(".isotope--title").text()
                    }, popularity: function (e) {
                        return e.data("popularity")
                    }}});
            var n = {currencyBefore: true, currencySymbol: e("#filterPrices").attr("data-currency"), priceRange: [e("#filterPrices .min-val").attr("data-initial"), e("#filterPrices .max-val").attr("data-initial")], priceStep: 50};
            var r = function (e) {
                return n.currencyBefore ? n.currencySymbol + e : e + n.currencySymbol
            };
            var i = e(".jqueryui-slider-container > div");
            i.slider({range: true, min: parseInt(n.priceRange[0]), max: parseInt(n.priceRange[1]), values: n.priceRange, step: n.priceStep, slide: function (t, n) {
                    e(this).parent().siblings(".min-val").val(r(n.values[0]));
                    e(this).parent().siblings(".max-val").val(r(n.values[1]))
                }, change: function () {
                    o()
                }, create: function () {
                    var t = e(this).parents(".accordion-body");
                    t.find(".min-val").val(r(e(this).slider("values", 0)));
                    t.find(".max-val").val(r(e(this).slider("values", 1)))
                }});
            var s = e(".sidebar-filters .selectable");
            s.click(function (t) {
                t.preventDefault();
                e(this).toggleClass("selected");
                o()
            });
            e(".sidebar-filters .accordion-toggle").click(function () {
                setTimeout(o, 350)
            });
            e("#removeFilters").click(function (e) {
                e.preventDefault();
                s.removeClass("selected");
                o()
            });
            var o = function () {
                var n = e(".sidebar-filters .in").find(".selectable.selected[data-target]").not(".detailed"), r = e(".sidebar-filters .in").find(".detailed.selected[data-target]"), s, o, u = [];
                if (n.length > 0 || r.length > 0) {
                    e("#removeFilters").fadeIn()
                } else {
                    e("#removeFilters").fadeOut()
                }
                if (n.length < 1) {
                    s = ".isotope-container .isotope--target"
                } else {
                    var a = [];
                    n.each(function () {
                        var t = e(this).data("target");
                        if ("undefined" !== typeof t) {
                            a.push(e(this).data("target"))
                        }
                    });
                    s = a.join(",")
                }
                o = e(s);
                if (i.parents(".accordion-body").hasClass("in")) {
                    o = o.filter(function () {
                        var t = e(this);
                        return t.data("price") >= i.slider("values", 0) && t.data("price") <= i.slider("values", 1)
                    })
                }
                r.each(function () {
                    u.push(e(this).data("type"))
                });
                u = _.uniq(u);
                if (r.length > 0) {
                    _.each(u, function (t) {
                        var n = [];
                        r.filter('[data-type="' + t + '"]').each(function () {
                            n.push(e(this).data("target"))
                        });
                        o = o.filter(function () {
                            var r = e(this);
                            return _.some(r.data(t).split("|"), function (e) {
                                return _.contains(n, e)
                            })
                        })
                    })
                }
                t.isotope({filter: o})
            };
            o();
            e("#isotopeSorting").change(function () {
                var n = jQuery.parseJSON(e(this).val());
                n.sortAscending = "true" === n.sortAscending ? true : false;
                t.isotope(n)
            });
            e("#isotopeSorting").trigger("change")
        })
    })();
    (function () {
        var e = new Tour({useLocalStorage: true, backdrop: false});
        e.addSteps([{element: "#tourStep1", title: "Filtering", content: "Filtering the products in Webmarket is fun!"}, {element: "#tourStep2", title: "Categories", content: "Click to multiple categories and the articles on the right will be shown or hidden automatically."}, {element: "#filterPrices", title: "Price Range Filter", content: "Select the price range, the products on the left will be filtered automatically, without page refresh!"}, {element: "#tourStep3", title: "Open Additional Filters", content: "Just open the panel with the click on the title and you can start filtering the products even further... <br />The same way you can turn off the filter, just close the pane.", placement: "top"}, {element: "#tourStep4", title: "The Best Part: Sorting!", content: "Never refresh a page again when you decide to order the items below. Just select ordering from the dropdown, the products below will magically fit into desired order", placement: "bottom"}]);
        e.start()
    })();
    e(".add-googlemap").each(function () {
        var t = e(this);
        t.css("height", typeof t.data("height") === "undefined" ? 200 : parseInt(t.data("height"), 10));
        if (jQuery.goMap) {
            t.goMap({markers: [{address: t.data("addr"), title: "undefined" === typeof t.data("title") ? false : t.data("title")}], scrollwheel: false, zoom: "undefined" === typeof t.data("zoom") ? 13 : parseInt(t.data("zoom"), 10), maptype: "undefined" === typeof t.data("type") ? "ROADMAP" : t.data("type").toUpperCase()})
        }
    });
//    e(".item-in-cart .icon-remove-sign").click(function () {
//        e(this).parents(".item-in-cart").animate({opacity: 0}, "swing", function () {
//            e(this).slideUp()
//        });
//        return false
//    });
//    e(".table-items .icon-remove-sign").click(function () {
//        var t = e(this).parents("tr");
//        if (!!e(this).data("delete-next")) {
//            t = t.add(t.next())
//        }
//        t.animate({opacity: 0}, "swing", function () {
//            e(this).remove()
//        });
//        return false
//    });
    e(".card-num-input").on("keyup", function () {
        if (e(this).val().length > 3) {
            e(this).next(".card-num-input").focus()
        }
    });
    e(".add-tooltip").tooltip({title: e(this).attr("data-title"), placement: "right", trigger: "manual"}).tooltip("show");
    var o = function () {
        if (e("html").hasClass("lt-ie9")) {
            return
        }
        e(".carouFredSel").each(function () {
            var t = e(this);
            t.trigger("configuration", ["debug", false, true])
        });
        s();
        (function () {
            var t, n, r, i = e("#mainNavigation");
            if (e("#magic-line").length < 1) {
                i.prepend('<li id="magic-line"></li>')
            }
            var s = e("#magic-line");
            if (e(".large-screen #mainNavigation > .active").length > 0) {
                s.width(e(".large-screen #mainNavigation > .active").width()).css("left", e("#mainNavigation > .active").position().left).data("origLeft", s.position().left).data("origWidth", s.width());
                e(document).on({mouseenter: function () {
                        t = e(this);
                        n = t.position().left;
                        r = t.width();
                        s.stop().animate({left: n, width: r})
                    }, mouseleave: function () {
                        s.stop().animate({left: s.data("origLeft"), width: s.data("origWidth")})
                    }}, ".large-screen #mainNavigation > li")
            }
        })();
        e(".carouFredSel").each(function () {
            var t = e(this);
            t.find(".slide").css({width: t.parent().width()});
            t.trigger("configuration", ["debug", false, true])
        });
        if (e(window).width() < 768) {
            e(".fullwidthbanner-container .tp-bullets").css({bottom: 10})
        }
        var n = function () {
            if (!t()) {
                e(".large-screen #spyMenu").affix({offset: {top: e(".large-screen #spyMenu").offset().top - 70, bottom: function () {
                            return e("footer").outerHeight(true) + 30
                        }}})
            }
            setTimeout(n, 2e3)
        };
        if (e("#spyMenu").length > 0) {
            n()
        }
    };
    var u;
    e(window).resize(function () {
        n();
        clearTimeout(u);
        u = setTimeout(function () {
            o()
        }, 250)
    });
    e(window).on("scroll", function () {
        if (e("#spyMenu").hasClass("affix-bottom")) {
            e("#spyMenu").css({bottom: e("footer").outerHeight(true) + 30})
        } else {
            e("#spyMenu").removeAttr("style")
        }
    });
    e(".js-selectable-dropdown").on("click", ".js-possibilities a", function (t) {
        if ("#" === e(this).attr("href")) {
            t.preventDefault();
            var n = e(this).parents(".js-selectable-dropdown");
            n.find(".js-change-text").html(e(this).html())
        }
    });
    e(window).trigger("scroll").trigger("resize");

    $(".item-in-cart .icon-remove-sign").click(function (e) {
        e.preventDefault();
        var cnfm = confirm('Sure you want to remove this product from your cart?');
        if (cnfm == true)
        {
            var cart_id = $(this).attr("data-cart");
            $.ajax({
                dataType: "json",
                url: baseUrl + "ajax/removeProductFromCartAjax/" + cart_id,
                success: function (response) {
                    if (response)
                    {
                        location.reload();
                    }
                }
            });
        }
    });
})