<?php

/*
 * Plugin Name:       Paypal donate 
 * Description:       Users able to donate to Paypal
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Deno Rautenbach
 * Author URI:        https://deno-vue-portfolio.netlify.app/
 */


 function donate_shortcode( $atts, $content = null) {
global $post;extract(shortcode_atts(array(
'account' => 'your-paypal-email-address',
'for' => $post->post_title,
'onHover' => '',
), $atts));
if(empty($content)) $content='Make A Donation';
return '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business='.$account.'&item_name=Donation for '.$for.'" title="'.$onHover.'">'.$content.'</a>';
}
add_shortcode('donate', 'donate_shortcode');

?>