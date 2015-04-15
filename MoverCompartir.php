add_action( 'woocommerce_share', 'patricks_woocommerce_social_share_icons', 10 );
function patricks_woocommerce_social_share_icons() {
    if ( function_exists( 'sharing_display' ) ) {
        remove_filter( 'the_content', 'sharing_display', 19 );
        remove_filter( 'the_excerpt', 'sharing_display', 19 );
        echo sharing_display();
    }
}
