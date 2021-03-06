<?php

/** Plugin Name: My REST API */

if( ! defined ('ABSPATH')){
    echo 'Sorry not authorized for your browser to accept this page...';
    die;
}
// charge:confirmed => $dataasd
$dataasd =  '{
    "attempt_number": 1,
    "event":
    {
        "api_version": "2018-03-22",
        "created_at": "2021-11-13T20:38:07Z",
        "data":
        {
            "id": "ee3c90cd-aa26-4ad1-ae97-0929e75a3831",
            "code": "R2588F2J",
            "name": "hyip hekaya",
            "utxo": true,
            "pricing":
            {
                "dai":
                {
                    "amount": "0.999963501332201375",
                    "currency": "DAI"
                },
                "usdc":
                {
                    "amount": "1.000000",
                    "currency": "USDC"
                },
                "local":
                {
                    "amount": "1.00",
                    "currency": "USD"
                },
                "bitcoin":
                {
                    "amount": "0.00001561",
                    "currency": "BTC"
                },
                "dogecoin":
                {
                    "amount": "3.85282219",
                    "currency": "DOGE"
                },
                "ethereum":
                {
                    "amount": "0.000215000",
                    "currency": "ETH"
                },
                "litecoin":
                {
                    "amount": "0.00390076",
                    "currency": "LTC"
                },
                "bitcoincash":
                {
                    "amount": "0.00149973",
                    "currency": "BCH"
                }
            },
            "logo_url": "https://res.cloudinary.com/commerce/image/upload/v1632326653/p2rtp8npeozxehjrfvql.png",
            "metadata":
            {
                "source": "woocommerce",
                "order_id": "178",
                "order_key": "wc_order_D4rabavW1Uadx"
            },
            "payments": [
            {
                "net":
                {
                    "local":
                    {
                        "amount": "1.00",
                        "currency": "USD"
                    },
                    "crypto":
                    {
                        "amount": "0.00390076",
                        "currency": "LTC"
                    }
                },
                "block":
                {
                    "hash": "f643f5dea6d7f337f1a492f7568988692da484d9b8f5faded30e06e7d9268b36",
                    "height": 2157493,
                    "confirmations": 1,
                    "confirmations_required": 2
                },
                "value":
                {
                    "local":
                    {
                        "amount": "1.00",
                        "currency": "USD"
                    },
                    "crypto":
                    {
                        "amount": "0.00390076",
                        "currency": "LTC"
                    }
                },
                "status": "CONFIRMED",
                "network": "litecoin",
                "deposited": null,
                "detected_at": "2021-11-13T20:34:37Z",
                "transaction_id": "0a80f85c662e05ab59d5c5e870ce5e556d05592cae28b50918d6061b7a216ea2",
                "coinbase_processing_fee":
                {
                    "local":
                    {
                        "amount": "0.00",
                        "currency": "USD"
                    },
                    "crypto":
                    {
                        "amount": "0.00000000",
                        "currency": "LTC"
                    }
                }
            }],
            "resource": "charge",
            "timeline": [
            {
                "time": "2021-11-13T20:32:39Z",
                "status": "NEW"
            },
            {
                "time": "2021-11-13T20:34:37Z",
                "status": "PENDING",
                "payment":
                {
                    "value":
                    {
                        "amount": "0.00390076",
                        "currency": "LTC"
                    },
                    "network": "litecoin",
                    "transaction_id": "0a80f85c662e05ab59d5c5e870ce5e556d05592cae28b50918d6061b7a216ea2"
                }
            },
            {
                "time": "2021-11-13T20:38:07Z",
                "status": "COMPLETED",
                "payment":
                {
                    "value":
                    {
                        "amount": "0.00390076",
                        "currency": "LTC"
                    },
                    "network": "litecoin",
                    "transaction_id": "0a80f85c662e05ab59d5c5e870ce5e556d05592cae28b50918d6061b7a216ea2"
                }
            }],
            "addresses":
            {
                "dai": "0xd3fd4214a5be99f6134cd5fa0d6ad68ce8ee5ea4",
                "usdc": "0xd3fd4214a5be99f6134cd5fa0d6ad68ce8ee5ea4",
                "bitcoin": "3KcDeJeXMokVXkpWyZgWtK5t6FYRyxjtG1",
                "dogecoin": "DEkaKBLf9HDseitmj477jMhgekB1bHwFp4",
                "ethereum": "0xd3fd4214a5be99f6134cd5fa0d6ad68ce8ee5ea4",
                "litecoin": "MSHMRX4WMjL9pTFuojo72BuB5cpcjrNAXu",
                "bitcoincash": "qpkzyug28g9cvqd0yuup3x80r3cwqzvmqs6jkxymuc"
            },
            "pwcb_only": false,
            "cancel_url": "https://hekaya.spmdubai.com/cart/?cancel_order=true&amp;order=wc_order_D4rabavW1Uadx&amp;order_id=178&amp;redirect&amp;_wpnonce=febda5e911",
            "created_at": "2021-11-13T20:32:39Z",
            "expires_at": "2021-11-13T21:32:39Z",
            "hosted_url": "https://commerce.coinbase.com/charges/R2588F2J",
            "brand_color": "#A973A9",
            "description": "1 x Single",
            "confirmed_at": "2021-11-13T20:38:07Z",
            "fees_settled": true,
            "pricing_type": "fixed_price",
            "redirect_url": "https://hekaya.spmdubai.com/checkout/order-received/178/?key=wc_order_D4rabavW1Uadx",
            "support_email": "mzughbor@gmail.com",
            "brand_logo_url": "https://res.cloudinary.com/commerce/image/upload/v1632326653/p2rtp8npeozxehjrfvql.png",
            "exchange_rates":
            {
                "BCH-USD": "666.785",
                "BTC-USD": "64079.61",
                "DAI-USD": "1.0000365",
                "ETH-USD": "4646.575",
                "LTC-USD": "256.36",
                "DOGE-USD": "0.25955",
                "USDC-USD": "1.0"
            },
            "organization_name": "yoilen",
            "payment_threshold":
            {
                "overpayment_absolute_threshold":
                {
                    "amount": "5.00",
                    "currency": "USD"
                },
                "overpayment_relative_threshold": "0.005",
                "underpayment_absolute_threshold":
                {
                    "amount": "0.10",
                    "currency": "USD"
                },
                "underpayment_relative_threshold": "0.005"
            },
            "local_exchange_rates":
            {
                "BCH-USD": "666.785",
                "BTC-USD": "64079.61",
                "DAI-USD": "1.0000365",
                "ETH-USD": "4646.575",
                "LTC-USD": "256.36",
                "DOGE-USD": "0.25955",
                "USDC-USD": "1.0"
            },
            "third_party_provider": "woocommerce"
        },
        "id": "eace6008-9747-49c9-ae53-39d57072e4dd",
        "resource": "event",
        "type": "charge:confirmed"
    },
    "id": "fc9e6c4b-c5c8-402c-b07b-6dada94b92c5",
    "scheduled_for": "2021-11-13T20:38:07Z"
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
	$payments           = $data['event']['data']['payments'];
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
			'type'   => $event_type,
			
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
