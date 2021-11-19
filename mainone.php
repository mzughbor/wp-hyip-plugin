<?php

/** Plugin Name: My REST API */

if( ! defined ('ABSPATH')){
    echo 'Sorry not authorized for your browser to accept this page...';
    die;
}

$dataasd =  '{
    "id": 1,
    "scheduled_for": "2017-01-31T20:50:02Z",
    "event": {
        "id": "24934862-d980-46cb-9402-43c81b0cdba6",
        "resource": "event",
        "type": "charge:created",
        "api_version": "2018-03-22",
        "created_at": "2017-01-31T20:49:02Z",
        "data": {
          "code": "66BEOV2A",
          "name": "The Sovereign Individual",
          "description": "Mastering the Transition to the Information Age",
          "hosted_url": "https://commerce.coinbase.com/charges/66BEOV2A",
          "created_at": "2017-01-31T20:49:02Z",
          "expires_at": "2017-01-31T21:49:02Z",
          "timeline": [
            {
              "time": "2017-01-31T20:49:02Z",
              "status": "NEW"
            }
          ],
          "metadata": {},
          "pricing_type": "no_price",
          "payments": [],
          "addresses": {
            "bitcoin": "mymZkiXhQNd6VWWG7VGSVdDX9bKmviti3U",
            "ethereum": "0x419f91df39951fd4e8acc8f1874b01c0c78ceba6"
          }
        }
    }
}';

function coinbase_charge_callback(){ 
    //global $payload ;
    $payload            = file_get_contents( 'php://input' );
    $data               = json_decode( $payload, true );
    $id                 = $data['event']['id'];
    $event_data_name    = $data['event']['data']['name'];
    $event_type         = $data['event']['type'];
    $code               = $data['event']['data']['code'];
	$description_data   = $data['event']['data']['description'];
	$payments           = $data['event']['data']['payments'][-1];
	$metadata           = $data['event']['data']['metadata'];

    //	status timeline data event
 
                //wp_insert_post( );
                // Create post object
            //$my_post = array();
            //$my_post['ID']            = '151';
                //$my_post['post_title']    = $name_data;
                //$my_post['post_content']  = $description_data;
            //$my_post['post_status']   = $metadata;
            //$my_post['post_author']   = 'id is'+ $id;
            //$my_post['post_category'] = array(0);
                // Insert the post into the database
            //wp_insert_post( $my_post );
            
    global $wpdb;
	$welcome_text = 'Congratulations, you just completed the installation!';
	$table_name = $wpdb->prefix . 'hyipinvestors'; 
	$wpdb->insert( 
		$table_name, 
		array(
			'time'   => current_time( 'mysql' ), 
			'name'   => $event_data_name, 
			'text'   => $code,
			'url'    => $payload, 
			'postid' => $id,
			'total'  => $payments,
			'type'   => $event_type,//$description_data, 
			'balance' => '5',
			'total_deposits' => '400',
			'active_deposit' => '200',
			'withdrawals' => '21',
			'Pending' => '12'
			
			
		)
	);
    var_dump($payload);
}

add_action('rest_api_init', function(){
   register_rest_route('api', 'coinbase_charge_callback', [
       'methods' => 'POST',
       'callback' => 'coinbase_charge_callback',
       ]); 
});


?>
