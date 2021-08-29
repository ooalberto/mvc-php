<?php 
namespace App;

class Conn
{
    public static function getDb()
    {
        return new \PDO('mysql:host=localhost;port=3306;dbname=mvc_php;charset=utf8','root','',array(
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
               
    }
}


?>