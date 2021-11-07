<?php

/** Plugin Name: My REST API */

if( ! defined ('ABSPATH')){
    echo 'Sorry not authorized for your browser to accept this page...';
    die;
}

function coinbase_charge_callback(){ //$data
    global $vs_data ;
    $payload          = file_get_contents( 'php://input' );
    $data             = json_decode( $payload, true );
    $name_data        = $data['event']['data']['name'];
	$description_data = $data['event']['data']['description'];
	$metadata         = $data['event']['metadata'];
	$id         = $data['id'];
 
                //wp_insert_post( );
                // Create post object
                $my_post = array();
                $my_post['ID']            = '151';
                //$my_post['post_title']    = $name_data;
                //$my_post['post_content']  = $description_data;
                $my_post['post_status']   = $metadata;
                $my_post['post_author']   = 'id is'+ $id;
                $my_post['post_category'] = array(0);
                // Insert the post into the database
                wp_insert_post( $my_post );
                
    print_r( 'done)PO');
}

add_action('rest_api_init', function(){
   register_rest_route('api', 'coinbase_charge_callback', [
       'methods' => 'POST',
       'callback' => 'coinbase_charge_callback',
       ]); 
});





?>

