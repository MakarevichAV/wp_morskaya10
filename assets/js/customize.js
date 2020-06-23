( function($) {

    wp.customize( 'morskaya10_nav_color', function( value ) {
        value.bind( function( newval ) {
            $('.for-main .main-head .wrapper a').css('color', newval);
        } );
    } );

    wp.customize( 'morskaya10_contact_color', function( value ) {
        value.bind( function( newval ) {
            $('.for-main .top-head p a, header .top-head .wrapper .contacts div i').css('color', newval);
        } );
    } );

    wp.customize( 'morskaya10_h1_color', function( value ) {
        value.bind( function( newval ) {
            $('.picture .wrapper .hero-info h1').css('color', newval);
        } );
    } );

    wp.customize( 'morskaya10_mark_color', function( value ) {
        value.bind( function( newval ) {
            $('.picture .wrapper .hero-info ul li').css('color', newval);
        } );
    } );

    wp.customize( 'morskaya10_phone1', function( value ) {
        value.bind( function( newval ) {
            $('.tel1').text(newval);
        } );
    } );

    wp.customize( 'morskaya10_phone2', function( value ) {
        value.bind( function( newval ) {
            $('.tel2').text(newval);
        } );
    } );

    wp.customize( 'morskaya10_email', function( value ) {
        value.bind( function( newval ) {
            $('.email-1').text(newval);
        } );
    } );

} )( jQuery );