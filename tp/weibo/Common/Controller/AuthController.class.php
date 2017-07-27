<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;
class AuthController extends Controller{
    protected function _initialize(){
        $session_auth=session('auth');
        if(!$session_auth){
            $this->redirect('Error/index');//如果session不存在；
        };
        if($session_auth['uid'] == 10000){
            return true;
        };
        $auth=new Auth();
        if (!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME,$session_auth['uid'])){
            $this->redirect('Error/index');
        }
    }
}