<?php
namespace App\Controllers;

use Core\Controller;
use Core\View;
use App\Models\Post;


class Posts extends Controller
{

    function new () {
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";

        echo "new Post!!!";
    }
    public function edit()
    {
        echo "edit post";
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    }

    protected function test($num, $str)
    {
        
        echo $num;
        echo $str;
        echo "this is a protected method";
    }

    protected function show()
    {
        
        $posts = Post::selectPosts();
        // $posts = ['name'=>"ali", 'family' => "alavi"];
        
        View::render('test',$posts);
        // require_once('../App/Views/test.php');
    }

    public function list()
    {
        echo "hi";
    }
}