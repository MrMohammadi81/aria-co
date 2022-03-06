<?php
// if(isset($_GET['c'])){
//     echo $_GET['c'];
// }
// $url =  $_SERVER['QUERY_STRING'];
// echo $url."<br/>";

// require_once('../Core/Route.php');
// $routing = new Route();

// // $routing->adding_route('news',['controller'=>'News', 'method'=>'index']);
// // $routing->adding_route('news/show',['controller'=>'News', 'method'=>'show']);
// // $routing->adding_route('news/edit',['controller'=>'News', 'method'=>'edit']);

// // $routing->adding_route('blogs',['controller'=>'blogs', 'method'=>'index']);
// // $routing->adding_route('blogs/show',['controller'=>'blogs', 'method'=>'show']);
// // $routing->adding_route('blogs/edit',['controller'=>'blogs', 'method'=>'edit']);


// $routing->adding_route('{controller}/{method}');
// // $routing->adding_route('profile/{controller}/{method}');

// // // echo "<pre>";
// // //     var_dump($routing->get_route());
// // // echo "</pre>";
// echo htmlspecialchars(print_r($routing->get_route(), true));


// // if($routing->matching_route($url)){
// //     echo "<pre>";
// //         var_dump($routing->get_method());
// //     echo "</pre>";

// //     // echo "مسیر موجود است";
// // }else{
// //     echo "<p style='direction:rtl;'>مسیر ";
// //     echo $url;
// //     echo " موجود نیست!!!!<p>";
// // }

// $routing->dispatching($_SERVER['QUERY_STRING']);



require '../vendor/autoload.php';

//spl_autoload_register(function ($class) {
//    //echo $class;
//    $root = dirname(__DIR__);   // get the parent directory
//    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
//    if (is_readable($file)) {
//        require $root . '/' . str_replace('\\', '/', $class) . '.php';
//    }
//});

$routing = new Core\Route();
$routing->adding_route('{controller}/{method}');
$routing->adding_route('',['controller'=>'home','method'=>'index']);
$routing->adding_route('admin/{controller}/{method}', ['namespace'=>"admin"]);
$routing->adding_route('profile/{controller}/{method}', ['namespace'=>"profile"]);

$routing->dispatching($_SERVER['QUERY_STRING']);

// echo htmlspecialchars(print_r($routing->get_route(), true));
