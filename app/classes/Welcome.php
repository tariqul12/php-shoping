<?php


namespace App\classes;
use App\classes\Student;

class Welcome
{
    public $message,$product,$products,$singleProdct;
    public function __construct()
    {
        $this->message="helllo";
    }
    public function index(){
        $this->product=new Student();
        $this->products=$this->product->getAllProducts();
        return view("home",["products"=>$this->products]);
    }
    public function about(){
        return view("about");
    }
    public function service(){
        return view("service");
    }
    public function contact(){
        return view("contact");
    }
    public function detail($id){
        $this->product=new Student();
        $this->singleProdct=$this->product->getProductByid($id);
        return view("detail",['singleProdct'=>$this->singleProdct]);
    }




}