<?php
class Autoload{
    public function __construct(){
        $robj=request();
        $method=$robj->method;
        $controller=$robj->controller;
        $para=$robj->para;
        $path= "app/controller/$controller.php";
        if(file_exists($path)){
        require_once $path;
        $pobj=new $controller();
        if(method_exists($pobj,$method))
        $pobj->$method($para);
        else
        echo "METHOD NOT FOUND";
        }
        else{
            echo"FILE NOT FOUND";
        }
    }
}

?>