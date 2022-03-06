<?php
namespace Core;
class Route
{
    protected $routes = [];
    protected $method;

    public function adding_route($route, $item=[])
    {
        // echo $route;
        $route = preg_replace('/\//', '\\/', $route);
        
        // echo "<br/>".$route; // result => {controller}\/{method}

        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z]+)',$route);
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)',$route);
        // echo "<br/>".$route; // result => 
        // $this->route

        $route = '/^' . $route . '$/i';
        // echo "$route <br/>";

        $this->routes[$route] = $item;
    }

    public function get_route()
    {
        return $this->routes;
    }

    public function matching_route($url)
    {
        /************* <first-level> *******************/
        // // echo $url;
        // // echo "<pre>";
        // // var_dump($this->routes);l
        // // echo "</pre>";
        // foreach ($this->routes as $key=>$test) {
        // // echo "<pre>";
        // //     var_dump($key);
        // // echo "<pre>";
        //     if( $url == $key ){
        //         $this->method = $test;
        //         return true;
        //     }
        // }
        // return false;
        /************* <first-level> *******************/

        /************* <second-level> *******************/

        // $reg = "/(?P<controller>[a-z]+)\/(?P<method>[a-z]+)/";

        // if (Preg_match($reg, $url, $matches)) {
        //     // echo "<pre>";
        //     //     var_dump($matches);
        //     // echo "</pre>";
        //     foreach ($matches as $key => $match) {
        //         // echo $match."<br/>";
        //         if(is_string($key)){
        //             $this->method[$key] = $match;
        //         }
        //     }
        //     return true;

        // }
        // return false;
        /************* <second-level> *******************/
        /************* <third-level> *******************/
        foreach ($this->routes as $key => $param) {
            // echo $key;
            if(preg_match($key, $url, $matches)){
                // echo "<br/><pre>";
                // var_dump($matches);
                // echo "</pre/>";
                foreach ($matches as $key => $match) {
                    if(is_string($key)){
                        $param[$key] = $match;
                    }
            }
                $this->method = $param;
                return true;
            }
        }
        return false;
        /************* <third-level> *******************/
    }

    public function get_method()
    {
        return $this->method;
    }

    public function dispatching($url)
    {
        $url = $this->removeVariables($url);
        // echo $url;
        // return;

        if ($this->matching_route($url)) {
            $controller = $this->method['controller'];
            $controller = $this->convertToStudlyCaps($controller);
            $controller = $this->getNamespace().$controller;
            // echo $controller;
            if (class_exists($controller)) {
                $controller_object = new $controller($this->method);

                $action = $this->method['method'];
                $action = $this->convertToCamelCase($action);

                if (is_callable([$controller_object, $action])) {
                    $controller_object->$action();

                } else {
                    echo "Method $action not exist";
                }
            } else {
                echo "Controller class $controller not exist";
            }
        } else {
            echo 'مسیر مورد نظر تطابق ندارد!';
        }
    }

    protected function convertToStudlyCaps($string)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    }

    protected function convertToCamelCase($string)
    {
        return lcfirst($this->convertToStudlyCaps($string));
    }

    public function removeVariables($url)
    {
        // echo $url;
        $url = explode("&", $url , 2);
        if($url[0] != ''){
            if(strpos('=', $url[0]) === false){
                $url = $url[0];
            }else{
                $url = '';
            }
        }else{
            $url = '';
        }
        return $url;
    }

    public function getNamespace() 
    {
        $namespace = "App\Controllers\\";
        if(array_key_exists('namespace', $this->method)){
            $namespace .= $this->method['namespace']."\\";
        }
        // if(isset($this->method['namespace'])){
        //     $namespace .= $this->method['namespace']."\\";
        // }
        return $namespace;
    }
}
