(function changeHeader($) {
    
    var $header = $('.site-header');

    // Fixing the header below the admin bar when a user is logged in

    $( 'body' ).has( '#wpadminbar', function() {
        $( '.site-header' ).css( 'top', '30px' );
    })

    // Scrolling on the Home and About pages
    
    $( 'body' ).hasClass( 'home' || 'page-template-about', $ ( window ).load(function() {
        $( '#masthead' ).addClass( 'transparent-header' )
    }))
    
    $( 'body' ).hasClass( 'home' || 'page-template-about', $( window ).scroll(function () {
        $( document ).scrollTop() < $( '.front-page-banner' ).height() || $( document ).scrollTop() < $( '.header-about' ).height() ? $( '#masthead' ).addClass( 'transparent-header' ) : $( '#masthead' ).removeClass( 'transparent-header' )
    }))

})(jQuery);