<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){
    	$this->display();
    }
       
    public function login(){
        $this->display();
    }

    public function cart(){
        $this->display('cart');
    }
    public function goodsdetail(){
        $this->display('goodsdetail');
    }
    public function index(){
        $this->display('index');
    }
    public function orderDetail(){
        $this->display('orderDetail');
    }
    public function pay(){
        $this->display('pay');
    }
    public function tip(){
        $this->display('tip');
    }
    public function wap(){
        $this->display('wap');
    }
    public function goodslist(){
        $this->display('goodslist');
    }
}
