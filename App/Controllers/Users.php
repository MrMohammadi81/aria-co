<?php
namespace App\Controllers;
use Core\View;
use App\Models\User;

class Users extends \Core\Controller
{


    private function new()
    {
        echo "this is new method of blogs controller!!!";
    }
    public function update()
    {
        $id = $this->args['id'];
        // var_dump($_REQUEST);
        $update = User::update($id, $_REQUEST);
        $users = User::selectUsers();
        View::render('user', $users);
    }
    public function index()
    {
        // echo '123';
        $users = User::selectUsers();

        View::render('user', $users);
        
        // View::render('header');
        // View::render('menu');
    }

    public function form()
    {
        $id = $this->args['id'];
        $user = User::selectUsers($id);
        print_r($user[0]->firstName);
        View::render('userEdit', $user);

    }
}
