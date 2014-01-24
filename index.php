<?php
header( 'Content-Type: Text/html ; charset = utf8' );
?>
<!DOCTYPE html>
<html>
<body>
<?php
include_once './curl.php';

$curl = x_cURL_get( 'http://127.0.0.1/lab/tl.php' , '' , 'sina=2.00G1qvtB_T5NyB79bb2535037o3K_B; tencent=c55d95f2ca66702bfa8cfd8663048816; openid=D8456307FB2A33A2C282635604322BB9' );
echo $curl;
$json = json_decode( $curl , true );

foreach( $json as $value ){
    echo $value[ 'name' ] . '<br/>' . $value[ 'text' ] . '<br/>' . $value[ 'time' ] . '<br/>';
    if( isset( $value[ 'source' ] ) ){
        echo $value[ 'source' ][ 'name' ] . '<br/>' . $value[ 'source' ][ 'text' ] . '<br/>' . $value[ 'source' ][ 'time' ] . '<br/>';
        if( isset( $value[ 'source' ][ 'image' ] )> )
        {
            foreach( $value[ 'source' ][ 'image' ] as $value2 ){
                echo '<img src="' . $value2 . '" alt="ͼƬ"/>';
            }
        }
    }
    if( isset( $value[ 'image' ] ) ){
        foreach( $value[ 'image' ] as $value2 ){
            echo '<img src="' . $value2 . '" alt="ͼƬ"/>';
        }
    }
    echo '<br/>';
}
?>
</body>
</html>