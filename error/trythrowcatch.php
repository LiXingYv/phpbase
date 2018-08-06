<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/28
 * Time: 9:34
 */
try {
    if( $a){
        throw new Exception("A terrible error has occurred",42);
    }
//    throw new Exception("A terrible error has occurred",42);
}
catch(Exception $e){
    echo "Exception".$e->getCode().":".$e->getMessage()."<br/>"." in ".$e->getFile()." on line ".$e->getLine()."<br/>";
}