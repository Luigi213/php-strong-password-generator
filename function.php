<?php
    function rand_string( $length ) {
        $pass = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($pass),0,$length);        
    }        
?>