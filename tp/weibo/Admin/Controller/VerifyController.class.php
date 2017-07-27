<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
class VerifyController extends Controller{
    public function index(){
        $verify=new Verify();
        $verify->useCurve=false;
        $verify->length=4;
        $verify->expire=10;
        $verify->codeSet='0123456789';
        $verify->entry(6);
    }
    public function test(){
        echo '<pre>';
        echo $this->uuid;

        echo '</pre>';
    }
}