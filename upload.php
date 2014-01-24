<?php
define( 'SINA_UPLOAD' , array( 
        'access_token' => $_COOKIE[ 'sina' ] , 
        'pic' => $_FILES[ 'pic' ][ 'filename' ] , 
        'status' => $_POST[ 't' ] 
) );
define( 'SINA_UPLOAD_URL' , '' );
define( 'T_UPLOAD' , array( 
        'format' => 'json' , 
        'oauth_consumer_key' => '801473843' , 
        'access_token' => $_COOKIE[ 'tencent' ] , 
        'oauth_version' => '2.a' , 
        'scope' => 'all' , 
        'openid' => 'D8456307FB2A33A2C282635604322BB9' , 
        'content' => $_POST[ 't' ] 
) );
define( 'T_UPLOAD_URL' , '' );

include_once './curl.php';
include_once './config.php';

$post[ 'pic' ] = $_FILES[ 'pic' ][ 'tmp_name' ];