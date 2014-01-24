<?php
/**
 * cURL functions
 *
 * @author Ð¡¸µFox[<xfox@cotr.me>]
 */
function x_cURL_post( $url , $post )
{
    $ch = curl_init( $url );
    curl_setopt( $ch , CURLOPT_POST , 1 );
    curl_setopt( $ch , CURLOPT_POSTFIELDS , $post );
    curl_setopt( $ch , CURLOPT_SSL_VERIFYPEER , FALSE );
    curl_setopt( $ch , CURLOPT_SSL_VERIFYHOST , FALSE );
    curl_setopt( $ch , CURLOPT_RETURNTRANSFER , 1 );
    $return = curl_exec( $ch );
    if( curl_errno( $ch ) != 0 ){
        throw new Exception( 'cURL error.' . curl_error( $ch ) , curl_errno( $ch ) );
    }
    return $return;
}
function x_cURL_get( $url , $get )
{
    $ch = curl_init( $url . '?' . $get );
    curl_setopt( $ch , CURLOPT_SSL_VERIFYPEER , FALSE );
    curl_setopt( $ch , CURLOPT_SSL_VERIFYHOST , FALSE );
    curl_setopt( $ch , CURLOPT_RETURNTRANSFER , 1 );
    $return = curl_exec( $ch );
    if( curl_errno( $ch ) != 0 ){
        throw new Exception( 'cURL error.' . curl_error( $ch ) , curl_errno( $ch ) );
    }
    return $return;
}