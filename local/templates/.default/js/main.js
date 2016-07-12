function toggle_product(shop, button_span) {
    $('.' + shop).slideToggle( "slow" );
    if ( $("." + button_span).hasClass( "top" ) ) {
        $("." + button_span).removeClass( "top" );
    } else {
        $("." + button_span).addClass( "top" );
    }

}
