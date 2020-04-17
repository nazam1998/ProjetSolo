<?php


namespace App\Helpers;

class ColorChanger
{
    public static function black($string)
    {   
        return str_replace(array('[', ']'),array('<strong class="text-dark">', '</strong>'),$string);
    }

    public static function back($string){
        return str_replace(array('<strong class="text-dark">', '</strong>'),array('[', ']'),$string);

    }
}