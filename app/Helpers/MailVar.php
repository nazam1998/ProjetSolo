<?php 
namespace App\Helpers;
use App\Helpers\ColorChanger;

class MailVar{

    public static function email($string,$email){
        $string=ColorChanger::black($string);
        return str_replace(array('{email}'),array($email),$string);
    }
}