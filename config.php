<?php
/**
 * config
 *
 * @author 小傅Fox[<xfox@cotr.me>]
 */
// exist:3 month create:2014年1月24日
define( 'TENCENT_POST' , 'format=json&oauth_consumer_key=801473843&access_token='/*Access Token*/.'&oauth_version=2.a&scope=all&openid=D8456307FB2A33A2C282635604322BB9&content=' );
define( 'SINA_POST' , 'access_token='/*Access Token*/.'&status=' );
define( 'SINA_POST_URL' , 'https://api.weibo.com/2/statuses/update.json' );
define( 'TENCENT_POST_URL' , 'https://open.t.qq.com/api/t/add' );
define( 'SINA_TL_URL' , 'https://api.weibo.com/2/statuses/friends_timeline.json' );
define( 'TENCENT_TL_URL' , 'https://open.t.qq.com/api/statuses/home_timeline' );
define( 'SINA_TL' , 'access_token='/*Access Token*/.'&count=20' );
define( 'TENCENT_TL' , 'type=3&contenttype=0&pagetime=0&pageflag=0&reqnum=20&format=json&oauth_consumer_key=801473843&access_token='/*Access Token*/.'&oauth_version=2.a&scope=all&openid=D8456307FB2A33A2C282635604322BB9' );