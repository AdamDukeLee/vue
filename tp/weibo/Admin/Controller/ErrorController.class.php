<?php
namespace Admin\Controller;
use Think\Controller;
class ErrorController extends Controller {
    public function index(){
        $this->assign('title','消息提示');
        layout('template/layout');
        $this->display();
    }
}