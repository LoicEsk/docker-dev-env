<?php

/**
 * Plugin Name: Mailhog
 */

// add_action( 'phpmailer_init', 'setupMail' );
// function setupMail( $phpmailer ) {
//     // if ( ! is_object( $phpmailer ) ) {
// 	// 	$phpmailer = (object) $phpmailer;
// 	// }
//     $phpmailer->Host = 'mailhog';
//     $phpmailer->Port = 1025;
//     $phpmailer->IsSMTP();
//     echo "phmail_init\n";
//     wp_die();
// }

// show wp_mail() errors
add_action( 'wp_mail_failed', 'onMailError', 10, 1 );
function onMailError( $wp_error ) {
    echo "<pre>";
    print_r($wp_error);
    echo "</pre>";
} 

// remplace le domaine localhost qui fait planter l'envoi par localhost.docker
function wporg_replace_user_mail_from( $from_email ) {
    $parts = explode( '@', $from_email );
    return $parts[0] . '@localhost.docker';
}
 
add_filter( 'wp_mail_from', 'wporg_replace_user_mail_from' );