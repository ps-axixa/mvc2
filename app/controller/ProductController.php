<?php
class ProductController extends controller{
    public function index(){
        echo "this is index of product controller";
    }
    public function create(){
        echo "this is create of product controller";
        $info=['name'=>'priya','city'=>'bikaner'];
        $title="Axixa technology";
        $this->load->view('product/create',['info'=>$info,'title'=>$title]);
        // $this->load->view('product/create',compact('info'));

    }
    public function edit($id){
        echo "this is edit of product controller $id";
    }
    public function update(){
        echo "this is update of product controller";
    }
    public function store(){
        echo "this is store of product controller";
    }
    public function destroy(){
        echo "this is destroy of product controller";
    }
}
?>