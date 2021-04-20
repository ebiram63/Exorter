<?php


class Url{

    public static function getCurent()
    {
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return $url;
    }

    public static function segments($url = null)
    {
        if($url = null)
        {
            $url = self::getCurent();
        }

        $url = str_replace(['http://', 'https://'] , '', $url);
        $segments = explode("/",$url);
        return $segments;
    }

    public static function params()
    {
        return $_REQUEST;
    }

}


var_dump(Url::getCurent());
var_dump(Url::segments());
var_dump(Url::params());

