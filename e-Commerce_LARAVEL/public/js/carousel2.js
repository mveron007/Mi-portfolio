(function($) {
    var $window = $(window),
        $container = $('container-card');

    $window.resize(function resize() {
        if ($window.width() < 514) {
            return $container.addClass('vertical', 'slider');
        }

        $html.removeClass('vertical', 'slider');
    }).trigger('resize');
})(jQuery);
