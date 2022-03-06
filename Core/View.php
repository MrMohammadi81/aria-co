<?php

namespace Core;

use Philo\Blade\Blade;

class View
{
    public static function render($view = '', $items = [])
    {
        $file = "../App/Views/$view.blade.php";

        if (is_readable($file)) {

            // require_once($file);
            // $views =  '../App/Views';
            $views =  dirname(__DIR__).'/App/Views';


            $cache = dirname(__DIR__). '/cache';

            $blade = new Blade($views, $cache);
            // echo $blade->view()->make($view)->with('items', $items);
            echo $blade->view()->make($view)->with(compact('items'));
            // echo $blade->view()->make($view, ['items'=>$items]);
        } else {
            echo 'view not found';
        }
        //echo 'hi';
    }

}