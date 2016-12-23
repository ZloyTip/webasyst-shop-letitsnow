(function( $ ) {
    $.fn.shop_letitsnow = function(options) {
        var settings = $.extend( {
            intensive : 200,
            time : 5000,
            src : '/wa-apps/shop/plugins/letitsnow/img/snow/'
        }, options);



        var snow_id = 1;
        return this.each(function() {
            var $container = $(this),
                snow_y, refreshIntervalId;

            clearInterval($container.data('shop_letitsnow'));

            snow_y=$container.height()-20;

            refreshIntervalId = setInterval(function() {
                var snow_x=Math.random()*document.body.offsetWidth-100;
                var snow_img= settings.src + Math.floor(Math.random()* 8.4) + '.png';
                var snow_elem='<img id="letitsnow'+snow_id+'" style="position:absolute; left:'+snow_x+'px; top:-20px;z-index:10000" src="'+snow_img+'">';
                $container.append(snow_elem);

                $('#letitsnow'+snow_id).animate({
                    top:snow_y,left:"+="+Math.random()*100
                }, settings.time,
                function() {
                    $(this).empty().remove();
                });
                snow_id++;
            }, settings.intensive);

            $container.data('shop_letitsnow', refreshIntervalId);

        });

    };
})(jQuery);