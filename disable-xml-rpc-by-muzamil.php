<?php
/*
Plugin Name: Block XML-RPC By Muzamil
Description: Disables XML-RPC on your WordPress site for enhanced security.
Version: 1.0
Author: Muzamil Ahmad
Author URI: https://www.linkedin.com/in/muzamilirf/
*/

// Main function to disable XML-RPC
function block_xmlrpc_requests() {
    // Let's do a check early on to see if this is even an XML-RPC request
    if ( defined( 'XMLRPC_REQUEST' ) && XMLRPC_REQUEST ) {
        // This is an XML-RPC request, let's shut it down!
        status_header( 403 ); // Send a Forbidden HTTP status code
        die( 'XML-RPC requests are blocked on this site.' );
    }
}

// Hook our function into the appropriate WordPress action
add_action( 'init', 'block_xmlrpc_requests' ); 
?> 
