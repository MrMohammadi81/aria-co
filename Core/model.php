<?php
namespace Core;
use App\Config;
use PDO;
abstract class Model
{
    protected static function selectDB()
    {
        static $db = null;

        if($db == null){
            try{
                $dbSet = "mysql:host=".Config::HOST.";dbname=".Config::DB_NAME."";
                $db = new PDO($dbSet,Config::USERNAME,Config::PASS);           
            }catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }
        return $db;
    }
}