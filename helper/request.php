<?php
function request(){
    $reqobj=(object)['controller'=>'ProductController','method'=>'index','para'=>''];
    
    // print_r($_GET);
    if(isset($_GET['url'])){
    $url=$_GET['url'];
    $url=trim($url,'/');
    $url=explode('/',$url);
    $reqobj->controller=ucfirst(strtolower($url[0]))."Controller";
    $reqobj->method=(isset($url[1]))?strtolower($url[1]):$reqobj->method;
    $reqobj->para=$url[2]??$reqobj->para;
    
    }
    
    return $reqobj;
}
?>