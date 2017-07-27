<?php
namespace Home\Controller;
use Think\Controller;
use Think\Image;
class PictureController extends Controller{
    public function index(){
        $img = new Image();
        $img->open('./Public/img/hhr.jpg');
        $location=array(100,100);
        $img->water('./Public/img/qr.png')->save('./Public/img/hhr2.jpg');

        $this->assign('img','./Public/img/hhr2.jpg');
        $this->assign('title','图片处理');
        layout('template/layout');
        $this->display();
    }
}



































?>