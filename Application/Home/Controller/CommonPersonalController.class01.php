<?php
namespace Home\Controller;
use Think\Controller;
class CommonPersonalController extends Controller {
    public function index(){
    	$this->display();
    }
       
    public function login(){
        $this->display();
    }
    public function addBank(){
        $this->display('addBank');
    }
    public function bankCard(){
        $this->display('bankCard');
    }
    public function BasicInfo(){
        $this->display('BasicInfo');
    }
    public function companyInfo(){
        $this->display('companyInfo');
    }
    public function emailSet(){
        $this->display('emailSet');
    }
    public function headSet(){
        $this->display('headSet');
    }
    public function help(){
        $this->display('help');
    }
    public function helpService(){
        $this->display('helpService');
    }
    public function index(){
        $this->display('index');
    }
    public function logoPwd(){
        $this->display('logoPwd');
    }
    public function nameAccount(){
        $this->display('nameAccount');
    }
    public function payPwd(){
        $this->display('payPwd');
    }
    public function PhoneSet(){
        $this->display('PhoneSet');
    }
    public function safeAnswer(){
        $this->display('safeAnswer');
    }
    public function vipSet(){
        $this->display('vipSet');
    }
    public function vipSetAccountSetAdd(){
        $this->display('vipSetAccountSetAdd');
    }
    public function vipSetAccountSetExisting(){
        $this->display('vipSetAccountSetExisting');
    }
    public function vipSetInfoSet(){
        $this->display('vipSetInfoSet');
    }

}
