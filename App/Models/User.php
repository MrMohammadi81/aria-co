<?php

namespace App\Models;
use PDO;
class User extends \Core\Model
{
    
    static function selectUsers($id = null){
        $db = \Core\Model::selectDB();

        $select = $db->query(($id == null)? "SELECT * FROM users" : "SELECT * FROM users WHERE `id` = '$id'");
        $result = $select->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    static function update($id, $data)
    {
        $db = \Core\Model::selectDB();
        $first = $data['firstName'];
        $last = $data['lastName'];
        // $str = "UPDATE `users` SET 'firstName' = '$first','lastName' = '$last' WHERE `id`= '$id'";
        echo($str);

        $result = $db->query("UPDATE `users` SET `firstName` = '$first',`lastName` = '$last' WHERE `id`= '$id'");
        //     echo "testttttttt";
        //     // die;
        // return $result;
    }
}