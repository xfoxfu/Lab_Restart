<?php
header( 'Content-Type: text/html;charset=utf8' );

define( 'TENCENT_POST' , 'format=json&oauth_consumer_key=801473843&access_token='.$_GET['tencent'].'&oauth_version=2.a&scope=all&openid=D8456307FB2A33A2C282635604322BB9&content=' );
define( 'SINA_POST' , 'access_token='.$_GET['sina'].'&status=' );
define( 'SINA_POST_URL' , 'https://api.weibo.com/2/statuses/update.json' );
define( 'TENCENT_POST_URL' , 'https://open.t.qq.com/api/t/add' );
define( 'SINA_TL_URL' , 'https://api.weibo.com/2/statuses/friends_timeline.json' );
define( 'TENCENT_TL_URL' , 'https://open.t.qq.com/api/statuses/home_timeline' );
define( 'SINA_TL' , 'access_token='.$_GET['sina'].'&count=20' );
define( 'TENCENT_TL' , 'type=3&contenttype=0&pagetime=0&pageflag=0&reqnum=20&format=json&oauth_consumer_key=801473843&access_token='.$_GET['tencent'].'&oauth_version=2.a&scope=all&openid=D8456307FB2A33A2C282635604322BB9' );

include_once './curl.php';
date_default_timezone_set( 'Asia/Shanghai' );

$s_tl_c = x_cURL_get( SINA_TL_URL , SINA_TL );
$t_tl_c = x_cURL_get( TENCENT_TL_URL , TENCENT_TL );

$s_tl_a = json_decode( $s_tl_c , true );
$t_tl_a = json_decode( $t_tl_c , true );

$s_tl_a = $s_tl_a[ 'statuses' ];
$t_tl_a = $t_tl_a[ 'data' ][ 'info' ];

for( $i = 0 ; $i <= ( count( $s_tl_a ) - 1 ) ; $i ++ ){
    $ia[ $i ][ 'time' ] = strtotime( $s_tl_a[ $i ][ 'created_at' ] );
    $ia[ $i ][ 'text' ] = $s_tl_a[ $i ][ 'text' ];
    $ia[ $i ][ 'name' ] = $s_tl_a[ $i ][ 'user' ][ 'screen_name' ];
}
$ia[ count( $s_tl_a ) ][ 'time' ] = 214748364;
$ia[ count( $s_tl_a ) ][ 'text' ] = 'sb';
$ia[ count( $s_tl_a ) ][ 'name' ] = 'sb';

for( $i = 0 ; $i <= ( count( $t_tl_a ) - 1 ) ; $i ++ ){
    $ib[ $i ][ 'time' ] = $t_tl_a[ $i ][ 'timestamp' ];
    $ib[ $i ][ 'text' ] = $t_tl_a[ $i ][ 'text' ];
    $ib[ $i ][ 'name' ] = $t_tl_a[ $i ][ 'nick' ];
}
$ib[ count( $t_tl_a ) ][ 'time' ] = 214748364;
$ib[ count( $t_tl_a ) ][ 'text' ] = 'sb';
$ib[ count( $t_tl_a ) ][ 'name' ] = 'sb';

$i = 0;
$j = 0;
$a = count( $ia );
$b = count( $ib );
for( $temp = 0 ; $temp <= ( ( $a + $b ) - 4 ) ; $temp ++ ){
    if( $ia[ $i ][ 'time' ] > $ib[ $j ][ 'time' ] ){
        $tl[ $temp ] = $ia[ $i ];
        $i ++;
    } elseif( $ia[ $i ][ 'time' ] < $ib[ $j ][ 'time' ] ){
        $tl[ $temp ] = $ib[ $j ];
        $j ++;
    } else{
        $tl[ $temp ] = $ia[ $i ];
        $i ++;
        $temp ++;
        $tl[ $temp ] = $ib[ $j ];
        $j ++;
    }
}
echo json_encode( $tl );