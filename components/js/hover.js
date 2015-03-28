var $ = require('jquery');

// hover popup on work
$(document).ready(function() {
    $('.fade').hover(
        function() {
            var w = $(this).width();
            var h = $(this).height();

            $(".caption").css({"width": w, "height": h});
            $(this).find('.caption').fadeIn(250);
            console.log(w, h);
        },
        function() {
            $(this).find('.caption').fadeOut(250);
        }
    );
});

// hover color change on logo
$(document).ready(function() {
    $("#logo").hover(
        function() {
            $("#nameText").css("color", "#FF7052");
            $("#webText").css("color", "#FF7052");
            $("#nameText").css("-webkit-transition", "all 0.2s linear 0s");
            $("#nameText").css("-moz-transition", "all 0.2s linear 0s");
            $("#nameText").css("-o-transition", "all 0.2s linear 0s");
            $("#webText").css("-webkit-transition", "all 0.2s linear 0s");
            $("#webText").css("-moz-transition", "all 0.2s linear 0s");
            $("#webText").css("-o-transition", "all 0.2s linear 0s");
        },
        function() {
            $("#nameText").css("color", "#FFFFFF");
            $("#webText").css("color", "#FFFFFF");
        }
    );
});