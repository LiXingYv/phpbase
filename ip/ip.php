<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/22
 * Time: 10:03
 */
/**
 * @return array|false|null|string 返回来访者ip
 */
function getRealIp(){
    static $realip = null;
    if($realip !== null){
        return $realip;
    }

    if(getenv('REMOTE_ADDR')){
        $realip = getenv('REMOTE_ADDR');
    }else if(getenv('HTTP_CLIENT_TP')){
        $realip = getenv('HTTP_CLIENT_TP');
    }else if(getenv('HTTP_X_FROWARD_FOR')){
        $realip = getenv('HTTP_X_FROWARD_FOR');
    }
    return $realip;
}

$ip = '192.168.1.100';
var_dump($ip);
var_dump(ip2long($ip));//把ip转换成int
long2ip($ip_int);//把int转换成ip