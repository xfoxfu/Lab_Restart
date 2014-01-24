<?php
$data = $_POST[ 't' ];
include_once './curl.php';
include_once './config.php';
echo 'Sina Data:' , '<br/>';
echo x_cURL_post( SINA_POST_URL , SINA_POST . $data );
echo '<br/>Tencent Data:' , '<br/>';
echo x_cURL_post( TENCENT_POST_URL , TENCENT_POST . $data );