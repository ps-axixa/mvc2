<?php
class View{
    public function view($viewname,$viewvariables=[])
    {
        // print_r($viewvariables);
        // exit;
        $viewname=str_replace('.','/',$viewname);
        $path="app/views/$viewname.php";
        if(file_exists($path)){
            extract($viewvariables);
         include $path;
        }
    }

}