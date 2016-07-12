function toggle_product(shop, button_span) {
    $('.' + shop).slideToggle( "slow" );
    $("." + button_span).toggleClass( "top" );
}
