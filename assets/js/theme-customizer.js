/* (function( $ ) {
    "use strict";

    wp.customize( 'tcx_link_color', function( value ) {
        value.bind( function( to ) {
            $( 'a' ).css( 'color', to );
        } );
    });

    wp.customize( 'tcx_twitter_handle', function( value ) {
    value.bind( function( to ) {
        $( '.copyright' ).text( to );
    });
});

})( jQuery );



In this code, we have access to a wp JavaScript object that offers us a customize message, much like the server-side $wp_customize->add_setting() is setup.

Next, the function takes in the ID of a setting, a callback function that receives an object with the original
value, and then allows us to bind another function to that object to make changes whenever that object is changed.

*/
