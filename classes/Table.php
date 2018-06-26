<?php

class Table {
    public static function  padLeft($string, $length)
    {
        if (!sprintf($string) < sprintf($length)){
            return $string = $string . str_repeat(" ", $length);

        }
        return $string;
    }
    public static function padRight($string, $length)
    {
        if (!sprintf($string) < sprintf($length)){
            return $string = $string . str_repeat(" ", $length);

        }
        return $string;
    }
}