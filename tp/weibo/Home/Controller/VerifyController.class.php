<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
class VerifyController extends Controller{
    public function index(){
        $this->assign('title','验证码页面');
        layout('template/layout');
        $this->display();
    }
    public function v(){
        $verify=new Verify();
        $verify->length=4;
        $verify->codeSet='0123456789';
        $verify->useCurve=false;
        $verify->entry();
    }
}