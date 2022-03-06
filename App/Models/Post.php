<?php
namespace App\models;
use PDO;
class Post extends \core\Model
{
    static  function  select_post(){
        $db=\core\Model::selectDB();
        $select=$db->query("SELECT * FROM users limit 12");
        $result=$select->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}
