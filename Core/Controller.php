<?php

namespace Core;

abstract class Controller
{
    protected $args = [];
    public function __construct($args)
    {
        $this->args = $args;
        // print_r($args);
        // View::render('head');
        // View::render('header');
        // View::render('menu');
        // View::render('script');
        
    }


    public function __call($method, $args)
    {
        // $method = 'new';
        // echo "123";
        // redirect('404');
        $this->before();
            call_user_func_array([$this, $method],[123, 'ali']);
        $this->after();

        
    }

    public function before()
    {
        /*
            1. کاربر لاگین هست یا نه؟
            2. آیپی چک شود
            3. زبان فارسی تنظیم شود

        */
    }

    public function after()
    {
        /*
            1. کاربر خارج کن

        */
    }
}
