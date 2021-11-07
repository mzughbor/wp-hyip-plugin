<?php

/**
 * Plugin Name:       Hyip Plugin 
 * Plugin URI:        https://hekaya.spmdubai.com/home/
 * Description:       Handle the basics of any hyip website with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            mZughbor
 * Author URI:        https://spmdubai.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://spmdubai.com/my-plugin/
 * Text Domain:       my-basics-plugin-of-hyip-elemets
 * Domain Path:       /languages
 */
 

if( ! defined ('ABSPATH')){
    echo 'Sorry not authorized for your browser to accept this page...';
    die;
}
 
 function charge_created(){ 
    global $vs_data ;
    $payload          = file_get_contents( 'php://input' );
    $data             = json_decode( $payload, true );
    $name_data        = $data['event']['data']['name'];
	$description_data = $data['event']['data']['description'];
	$metadata         = $data['event']['metadata'];
	$id               = $data['id'];

}

add_action('rest_api_init', function(){
   register_rest_route('api', 'charge_created', [
       'methods' => 'POST',
       'callback' => 'charge_created',
       ]); 
});




 ?>
