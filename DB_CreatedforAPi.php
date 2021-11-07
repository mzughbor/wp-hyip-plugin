<?php

/**
 * Plugin Name:       DB Created for APi's
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

	$table_name = $wpdb->prefix . 'hyipinvestors';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		text text NOT NULL,
		url varchar(55) DEFAULT '' NOT NULL,
		postid mediumint(9) NOT NULL,
		total mediumint(9),
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'mz_db_version', $mz_db_version );
	
	
	// For updating ... sadly it dose not work
	global $wpdb;
    $installed_ver = get_option( "mz_db_version" );

    if ( $installed_ver != $mz_db_version ) {

	    $table_name = $wpdb->prefix . 'liveshoutbox';

	    $sql = "CREATE TABLE $table_name (
		    id mediumint(9) NOT NULL AUTO_INCREMENT,
		    time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		    name tinytext NOT NULL,
		    text text NOT NULL,
		    url varchar(100) DEFAULT '' NOT NULL,
		    postid mediumint(9) NOT NULL,
		    balance mediumint(9),
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
	
	$welcome_name = 'mZughbor';
	$welcome_text = 'Congratulations, you just completed the installation!';
	
	$table_name = $wpdb->prefix . 'hyipinvestors';
	
	$wpdb->insert( 
		$table_name, 
		array( 
			'time' => current_time( 'mysql' ), 
			'name' => $welcome_name, 
			'text' => $welcome_text, 
			'url'  => 'anyURl',
			'postid' => 55,
			'total' => '0'
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
