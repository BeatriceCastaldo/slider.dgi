$(document).ready(function() {

        $(".next").click(function() {
             var $curr = $('.mySlides:visible'),
                 $next = ($curr.next().length) ? $curr.next() : $('.mySlides').first();
                $next.css('z-index',2).fadeIn('slow', function() {
                $curr.hide().css('z-index',0);
                $next.css('z-index',1);
            });
    });

        $(".prev").click(function() {
             var $curr = $('.mySlides:visible'),
                 $prev = ($curr.prev().length) ? $curr.prev() : $('.mySlides').last();
                $prev.css('z-index',2).fadeIn('slow', function() {
                $curr.hide().css('z-index',0);
                $prev.css('z-index',1);
            });
        });

        var interval = setInterval(function() {
        var $curr = $('.mySlides:visible'), 
            $next = ($curr.next().length) ? $curr.next() : $('.mySlides').first();
        $next.css('z-index',2).fadeIn('slow', function() {
            $curr.hide().css('z-index',0);
            $next.css('z-index',1);
        });
    }, 6000);
    $('.mySlides').hover(function() {
        clearInterval(interval);
    }, function() {
        interval = setInterval(function() {
        var $curr = $('.mySlides:visible'), 
            $next = ($curr.next().length) ? $curr.next() : $('.mySlides').first();
        $next.css('z-index',2).fadeIn('slow', function() {
            $curr.hide().css('z-index',0);
            $next.css('z-index',1);
        });
    }, 6000);
    });
});