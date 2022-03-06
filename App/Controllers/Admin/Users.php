<?php
namespace App\Controllers\Admin;
class Users
{
    
    public function new()
    {
        echo "<pre>";
            print_r($_GET);
        echo "</pre>";

        echo "new Users!!!";
    }
    public function edit()
    {
        echo "edit users";
        echo "<pre>";
            print_r($_GET);
        echo "</pre>";
    }
}
