<?php
include_once './curl.php';
include_once './config.php';
echo 'Sina Data:' , '<br/>';
echo x_cURL_get( SINA_TL_URL , SINA_TL );
echo '<br/>Tencent Data:' , '<br/>';
echo x_cURL_get( TENCENT_TL_URL , TENCENT_TL );