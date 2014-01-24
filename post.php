<?php
$data = $_POST[ 't' ];
define( 'TENCENT_POST' , 'format=json&oauth_consumer_key=801473843&access_token='.$_COOKIE['tencent'].'&oauth_version=2.a&scope=all&openid='.$_COOKIE['openid'].'&content=' );
define( 'SINA_POST' , 'access_token='.$_COOKIE['sina'].'&status=' );
define( 'SINA_POST_URL' , 'https://api.weibo.com/2/statuses/update.json' );
define( 'TENCENT_POST_URL' , 'https://open.t.qq.com/api/t/add' );

include_once './curl.php';

echo 'Sina Data:' , '<br/>';
echo x_cURL_post( SINA_POST_URL , SINA_POST . $data );

echo '<br/>Tencent Data:' , '<br/>';
echo x_cURL_post( TENCENT_POST_URL , TENCENT_POST . $data );