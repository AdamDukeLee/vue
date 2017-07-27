<?php
namespace Home\Controller;
use Think\Controller;
class ViewController extends Controller{
    public function index(){
        $data=array(
            user => '李宗泽',
            phone => 18516533004,
            date => time()
        );
        layout('template/layout');
        $this->assign('user',$data);
        $this->assign('title','22');
        $this->display();
    }
}



































?>