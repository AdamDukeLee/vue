<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
    public function index(){
        $get=M('Introduce');
        $data=$get->where('id=1')->find();
        $this->assign('data',$data);
        $this->assign('active','1');
        $this->assign('title','首页');
        layout('template/layout');
        $this->display();
    }
}