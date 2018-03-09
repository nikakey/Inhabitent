(function changeHeader($) {
    
    var $header = $('.site-header');

    // Fixing the header below the admin bar when a user is logged in

    $( 'body' ).has( '#wpadminbar', function() {
        $( '.site-header' ).css( 'top', '30px' );
    })

    // Scrolling on the Home, Single Adventure, and About pages

    //Check if this is the About page and add special header class when page is loaded

    var location = window.location.href; // returns the full URL
    if(/about/.test(location)) {
        $('#masthead').addClass('transparent-header');
    }

    //Check if this is the Home or Adventure page and add special header class when page is loaded

    if ($('.home').length || $('.single-adventure').length) {
        $('#masthead').addClass('transparent-header');
    }



   //Add special header class when window is scroll down. Remove the class when a user scroll to the end of the banner image
    
    $( 'body' ).hasClass( 'home' || 'page-template-about' || 'adventure-template-default', $( window ).scroll(function () {
        $( document ).scrollTop() < $( '.front-page-banner' ).height() || $( document ).scrollTop() < $( '.header-about' ).height() || $( document ).scrollTop() < $('.adventure-image-container').height() ? $( '#masthead' ).addClass( 'transparent-header' ) : $( '#masthead' ).removeClass( 'transparent-header' )
    }))

})(jQuery);