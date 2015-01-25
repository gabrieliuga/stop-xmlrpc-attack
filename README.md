# stop_xmlrpc_attack
This WordPress plugin will alter your .htaccess to stop DDOS, DOS and brute force attacks on WordPress' xmlrpc.php. On a reqular basis, the plugin will poll ARIN for subnets that should be allowed to access xmlrpc.php, from a whitelist of organizations. By default, AUTOM-93 (which is Automattic, Inc.), is whilelisted, to allow JetPack requests to your xmlrpc.php.
