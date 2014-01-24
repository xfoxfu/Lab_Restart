<?php
$SINA_UPLOAD = array( 
        'access_token' => $_COOKIE[ 'sina' ] , 
        'pic' => '@' . $_FILES[ 'pic' ][ 'tmp_name' ] , 
        'status' => $_POST[ 't' ] 
);
define( 'SINA_UPLOAD_URL' , 'https://upload.api.weibo.com/2/statuses/upload.json' );
$T_UPLOAD = array( 
        'format' => 'json' , 
        'oauth_consumer_key' => '801473843' , 
        'access_token' => $_COOKIE[ 'tencent' ] , 
        'oauth_version' => '2.a' , 
        'scope' => 'all' , 
        'openid' => 'D8456307FB2A33A2C282635604322BB9' , 
        'pic' => '@' . $_FILES[ 'pic' ][ 'tmp_name' ] , 
        'content' => $_POST[ 't' ] 
);
define( 'T_UPLOAD_URL' , 'https://open.t.qq.com/api/t/add_pic' );

include_once './curl.php';

echo 'Sina Data:' , '<br/>';
echo x_cURL_post( SINA_UPLOAD_URL , $SINA_UPLOAD );

echo '<br/>Tencent Data:' , '<br/>';
echo x_cURL_post( T_UPLOAD_URL , $T_UPLOAD );