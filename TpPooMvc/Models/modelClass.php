
<?php
abstract class Model{
private static $pdo;



public static function setBdd(){

    self::$pdo = new  PDO("mysql:host=localhost;dbname=exolivre;charset=utf8", "root", "");
    self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);  
}

//protected function getBdd(); ou 
public function getBdd()
{
    if (self::$pdo == null){
        self::setBdd();
    }

    return self::$pdo;
}

}

