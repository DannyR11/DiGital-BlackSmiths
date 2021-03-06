<?php
// This client for local_testplugin is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
/**
 * XMLRPC client for Moodle 2 - local_testplugin
 *
 * This script does not depend of any Moodle code,
 * and it can be called from a browser.
 *
 * @authorr Lesego Mabe
 */
/// MOODLE ADMINISTRATION SETUP STEPS
// 1- Install the plugin
// 2- Enable web service advance feature (Admin > Advanced features)
// 3- Enable XMLRPC protocol (Admin > Plugins > Web services > Manage protocols)
// 4- Create a token for a specific user and for the service 'My service' (Admin > Plugins > Web services > Manage tokens)
// 5- Run this script directly from your browser: you should see 'Hello, FIRSTNAME'

/// SETUP - NEED TO BE CHANGED
$token = '50cb0573aa8a26901ec9162974dc4453'; //this is the manager's token
$domainname = 'https://137.215.42.239/moodle';

/// FUNCTION NAME
$functionname = 'local_testplugin_obtain_token';

/// PARAMETERS
$tokenmsg = 'Your token is, ';

///// XML-RPC CALL
header('Content-Type: text/plain');
$serverurl = $domainname . '/webservice/xmlrpc/server.php'. '?wstoken=' . $token;
require_once('./curl.php');
$curl = new curl;
$post = xmlrpc_encode_request($functionname, array($tokenmsg));
$resp = xmlrpc_decode($curl->post($serverurl, $post));
//print_r($resp);

echo $resp;

/*
Use this token to call another function that obtains the token of the logged in user,
return it, use it for the call, and then return appropriate name.
The incoming request should specify which function should be used
*/