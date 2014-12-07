$(document).ready(function() {
    // Make power button glow
    var glow = $('#power-button');
    setInterval(function() {
        glow.hasClass('glow') ? glow.removeClass('glow') : glow.addClass('glow');
    }, 1000);

    //arrange blocks in a circle
    var block = $("#rotator div").get(),
        increase = Math.PI * 2 / block.length,
        x = 0,
        y = 0,
        angle = 0;

    for (var i = 0; i < block.length; i++) {
        var elem = block[i];
        x = 170 * Math.cos(angle) + 150;
        y = 170 * Math.sin(angle) + 150;
        elem.style.position = 'absolute';
        elem.style.left = x + 'px';
        elem.style.top = y + 'px';
        var rot = 90 + (i * (360 / block.length));
        angle += increase;
    }

    //Setup the grid to change the highlighted bubble on mouseover
    $("#rotator div").mouseover(function() {
        //set the content of the center bubble
        $("#middleBubble").html("<p><b>" + $(this).data("bubble1") + "</b><br />" + $(this).data("bubble2") + "</p>");
        currentGridSelector = $(this).attr("id");
    });

    // Add "loaded" class when a section has been loaded
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        $(".section").each(function() {
            var elementTop = $(this).offset().top - $('#header').outerHeight();
            if (scrollTop >= elementTop) {
                $(this).addClass('loaded');
            }
        });
    });

    $(window).resize(function() {
        $('#navbar-collapse-1').removeClass('collapse in');
        $('#navbar-collapse-1').addClass('collapse');
        smallMenu();
        largeMenu();
    });
    smallMenu();
    largeMenu();

    function smallMenu() {
        $('#navigation-small').singlePageNav({
            offset: $('#navbar').outerHeight(),
            filter: ':not(.external)',
            speed: 750,
            currentClass: 'active',

            beforeStart: function() {},
            onComplete: function() {}
        });
    }

    // One Page Navigation Setup
    function largeMenu() {
        $('#navigation-large').singlePageNav({
            offset: $('#navbar').outerHeight(),
            filter: ':not(.external)',
            speed: 750,
            currentClass: 'active',

            beforeStart: function() {},
            onComplete: function() {}
        });
    }

    // Sticky Navbar Affix
    $('#navbar').affix({
        offset: {
            top: $('#topbar').outerHeight(),
        }
    });

    // Smooth Hash Link Scroll
    $('.smooth-scroll').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    $('.nav a').on('click', function() {
        if ($('.navbar-toggle').css('display') != 'none') {
            $(".navbar-toggle").click();
        }
    });


    var $container = $('.portfolio-isotope');

    $container.isotope({
        itemSelector: '.portfolio-item',
        resizable: true,
        resizesContainer: true
    });

    // filter items when filter link is clicked
    $('#filters a').click(function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });
        return false;
    });
});

//activate
function hovera() {
    //alert("in");
    $("#rotator").removeClass('rotatora').addClass('rotators');
}

//stop
function hovers() {
    //alert("out");
    $("#rotator").removeClass('rotators').addClass('rotatora');
}