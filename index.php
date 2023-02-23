<?php
include_once "helper/request.php";
spl_autoload_register(function($classname){
 $path="app/libs/$classname.php";
 if(file_exists($path))
   require_once $path;
    
});
$obj=new Autoload();
?>