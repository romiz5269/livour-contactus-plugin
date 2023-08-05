<?php

/**
* Aeeiee Demo Plugin
*
* @author Romiz5269.
*
* @wordpress-plugin
* Plugin Name: livour contact us plugin
* Description: پلاگین اختصاصی قالب برای دریافت پیام از قسمت تماس با ما - نمایش در پنل ادمین - درج در دیتابیس
* Author: Romiz5269.
* Author URI: https://camooda.ir
* Version: 1.0
* Requires PHP: 7.2
*/
	function scratchcode_create_payment_table() {
 
    global $wpdb;
 
    $table_name = $wpdb->prefix . "livour_contact_us_plugin";
 
    $charset_collate = $wpdb->get_charset_collate;
 
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
      id bigint(20) NOT NULL AUTO_INCREMENT,
	    message_code bigint(20) NOT NULL,
      fullname varchar(500)  NOT NULL,
      email varchar(500) NOT NULL,
      phone_number varchar(12) NOT NULL,
      subject varchar(20) NOT NULL,
      message TEXT NOT NULL,
      PRIMARY KEY id (id)
    ) $charset_collate;";
 
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}    
 
register_activation_hook( __FILE__, 'scratchcode_create_payment_table' );