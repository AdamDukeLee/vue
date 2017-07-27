<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Think\Page;
class ProductController extends Controller{
    public function index(){
        $product=M('Product');

        $count=$product->count();
        $page=new Page($count, 5);
        $data=$product->order('createtime desc')->limit($page->firstRow.','.$page->listRows)->select();
        $show=$page->show();
        $this->assign('page',$show);
        $this->assign('data',$data);
        $this->assign('title','产品');
        $this->assign('active','2');
        layout('template/layout');
        $this->display();
    }
}