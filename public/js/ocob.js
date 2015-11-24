var distance = $('.head').offset().top,
    $window = $(window);

$window.scroll(function() {
    if ( $window.scrollTop() >= distance ) {
        alert('table at top');
    }
});


alert('hmmmh');