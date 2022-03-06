<?php
namespace App\Controllers;
class Blogs extends \Core\Controller
{

    public function before()
    {
        # code...
    }    

    private function new()
    {
        echo "this is new method of blogs controller!!!";
    }
    public function edit()
    {
        echo "edit";
    }
}
