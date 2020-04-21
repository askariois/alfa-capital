$(window).scroll(function() {
    var docscroll = $(document).scrollTop();
    if (window.pageYOffset > 250) {
        $('#top_nav').css({ 'width': '100%' }).addClass('fixed');
        $('.header_logo').css({ 'display': 'none' });
        $('.header_logo_fixed').css({ 'display': 'block' });

    } else {
        $('#top_nav').removeClass('fixed');
        $('.header_logo').css({ 'display': 'block' });
        $('.header_logo_fixed').css({ 'display': 'none' });
    }
});


$(function() {
    $('a[href^="#"]').on('click', function(event) {
        // отменяем стандартное действие
        event.preventDefault();

        var sc = $(this).attr("href"),
            dn = $(sc).offset().top;
        /*
         * sc - в переменную заносим информацию о том, к какому блоку надо перейти
         * dn - определяем положение блока на странице
         */

        $('html, body').animate({ scrollTop: dn - 100 }, 1000);

        /*
         * 1000 скорость перехода в миллисекундах
         */
    });
});



$(function() {
    $('.sl').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerPadding: '60px',
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    })
});


$(function() {
    $('.sl_video').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        centerPadding: '60px',
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    })
});

$('.sl_object').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerPadding: '60px',
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});

// Cache selectors
var lastId,
    topMenu = $("#top_nav"),
    topMenuHeight = topMenu.outerHeight() + 15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function() {
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e) {
    var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
    $('html, body').stop().animate({
        scrollTop: offsetTop
    }, 300);
    e.preventDefault();
});

// Bind to scroll
$(window).scroll(function() {
    // Get container scroll position
    var fromTop = $(this).scrollTop() + topMenuHeight;

    // Get id of current scroll item
    var cur = scrollItems.map(function() {
        if ($(this).offset().top < fromTop)
            return this;
    });
    // Get the id of the current element
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
        lastId = id;
        // Set/remove active class
        menuItems
            .parent().removeClass("active")
            .end().filter("[href='#" + id + "']").parent().addClass("active");
    }
});


$(document).ready(function() {
    $('.header_burger').click(function(event) {
        $('.header_burger,.header_menu').toggleClass('active_menu');
    });
});

$(document).ready(function() {
    $('.header_menu a').click(function() {
        $('.header_burger,.header_menu').toggleClass('active_menu');
    });
});