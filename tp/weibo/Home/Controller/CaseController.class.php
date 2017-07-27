<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class CaseController extends Controller{
    public function index(){
        $case=M('Case');
        $data=$case->select();
        $this->assign('data',$data);
        $this->assign('title','案例');
        $this->assign('active','3');
        layout('template/layout');
        $this->display();
    }
}