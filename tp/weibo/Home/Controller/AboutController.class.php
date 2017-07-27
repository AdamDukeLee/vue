<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class AboutController extends Controller{
    public function index(){
        $get=M('Introduce');
        $data=$get->where('id=1')->find();
        $data['content']=html_entity_decode($data['content']);
        $this->assign('data',$data);
        $this->assign('title','关于我们');
        $this->assign('active','4');
        layout('template/layout');
        $this->display();
    }
}

































?>