<?php

/**
 * Plugin Name:       DB Created for APi's | Table of Hyip V-1.02
 * Plugin URI:        https://hekaya.spmdubai.com/home/
 * Description:       Handle the basics of any hyip website with this plugin.
 */

if( ! defined ('ABSPATH')){
    echo 'Sorry not authorized for your browser to show this page...';
    exit;
}

global $mz_db_version;
$mz_db_version = '2';

// Create  a Database
function mz_install() {
	global $wpdb;
	global $mz_db_version;

	$table_name = $wpdb->prefix . 'hyip'; //seconed-2 table
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		    id mediumint(9) NOT NULL AUTO_INCREMENT,
		    time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		    website_name tinytext NOT NULL,
		    client_name tinytext NOT NULL,
		    code tinytext NOT NULL,
		    type text NOT NULL,
		    payload varchar(6000) DEFAULT '' NOT NULL,
		    order_id mediumint(9),
    		order_key varchar(25),
		    url varchar(150) DEFAULT '' NOT NULL,
		    payment_amount_USD smallmoney,
		    payment_currency_method varchar(9),
		    payment_amount_crypto smallmoney,
		    confirmations int(3),
		    transaction_id  varchar(9),
		    status_oftimeline_array varchar(6000),
		    description varchar(250),
		    exchange_rates varchar(6000),
		    id_of_event varchar(36) NOT NULL,
		    total_deposits smallmoney NOT NULL,
		    active_deposit smallmoney NOT NULL,
		    balance smallmoney NOT NULL,
		    withdrawals smallmoney NOT NULL,
		    Pending smallmoney NOT NULL,
		    PRIMARY KEY  (id)
		    
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'mz_db_version', $mz_db_version );
	
	
	// For updating ... //sadly it dose not work
	global $wpdb;
    $installed_ver = get_option( "mz_db_version" );

    if ( $installed_ver != $mz_db_version ) {

	    $table_name = $wpdb->prefix . 'hyip';

	    $sql = "CREATE TABLE $table_name (
		    id mediumint(9) NOT NULL AUTO_INCREMENT,
		    time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		    name tinytext NOT NULL,
		    type text NOT NULL,
		    url varchar(7500) DEFAULT '' NOT NULL,
		    postid mediumint(9) NOT NULL,
		    balance mediumint(9),
		    total_deposits mediumint(9),
		    active_deposit mediumint(9),
		    withdrawals mediumint(9),
		    Pending mediumint(9),
		    

		    PRIMARY KEY  (id)
	        );";

	    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	    dbDelta( $sql );

	    update_option( "mz_db_version", $mz_db_version );
    }
}

register_activation_hook(__FILE__,'mz_install');


function mz_install_data_R() {
	global $wpdb;
	
	$table_name = $wpdb->prefix . 'hyip';
	
	$wpdb->insert( 
		$table_name, 
		array( 
			'time'                      => current_time( 'mysql' ), 
			'website_name'              => 'god hyip me', 
			'client_name'               => 'mZughbor', 
            'code'                      => 'code_installation-done',
            'type'                      => 'charge:installation-done',
            'payload'                   => 'payload_installation-done',
            'order_id'                  => '123',
            'order_key'                 => 'Tested',
            'url'                       => 'https://commerce.coinbase.com/charges/TEST',
            'payment_amount_USD'        => '10',
            'payment_currency_method'   => 'LTC',
            'payment_amount_crypto'     => '0.049',
            'confirmations'             => '3',
            'description'               => 'any text tested for description.',
            'transaction_id'            => 'test',
            'status_oftimeline_array'   => 'Array_test..',
            'exchange_rates'            => 'arary',
            'id_of_event'               => 'TEST-9747-49c9-ae53-39d57072e4dd',
            'total_deposits'            => '10',
            'active_deposit'            => '0',
            'balance'                   => '10',
            'withdrawals'               => '0',
            'Pending'                   => '0',
		    
		) 
	);
}

register_activation_hook(__FILE__,'mz_install_data_R');


// For updating  sadly it dose not work

function myplugin_update_db_check() {
    global $mz_db_version;
    if ( get_site_option( 'mz_db_version' ) != $mz_db_version ) {
        mz_install();
    }
}
add_action( 'plugins_loaded', 'myplugin_update_db_check' );


?>
