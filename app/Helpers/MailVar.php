<?php 
namespace App\Helpers;

class MailVar{

    public static function email($string,$email){
        return str_replace(array('[email]'),array($email),$string);
    }
}