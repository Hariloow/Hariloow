<?php
    
class Model{

    private static $dbHost = "localhost";
    private static $dbName = "c15";
    private static $dbUser = "root";
    private static $dbUserPassword = "";
    
    private static $connection = null;

    public static function setBdd(){
        try{
            self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,
            self::$dbUser,self::$dbUserPassword);
        }
        catch(PDOException $e){
            die($e->getMessage);
        }
        return self::$connection;
    }

    protected function getBdd(){
        if(self::$connection === null){
            self::setBdd();
        }
        return self::$connection;
    }

    public static function disconnect(){
        self::$connection = null;
    }
}

?>