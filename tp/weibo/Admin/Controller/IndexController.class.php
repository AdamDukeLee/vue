<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
use Think\Model;
use Think\Upload;
use Think\Page;
class IndexController extends AuthController {
    public function index(){
        $session_auth=session('auth');
        $this->assign('title','后台首页');
        $this->assign('user',$session_auth);
        layout('template/layout');
        $this->display();
    }
    public function quit(){
        session('[destroy]');
        $this->redirect('Login/index');
    }
    //更改介绍
    public function introduce(){//查
        $text = M("Introduce");  //包含 content 字段
        $order=array();
        $order['id']='desc';
        $vo=$text->order($order)->find();
        $vo['content']=html_entity_decode($vo['content']);//转为html编码

        $this->assign('title','编辑公司简介');
        $this->assign('vo',$vo);
        $this->display();
    }
    public function introduce_write(){//改
        $text = M("Introduce");
        $order=array();
        $order['id']='desc';
        $vo=$text->order($order)->find();

        $pagedata=$text->create();
        if($vo['content'] == $pagedata['content']){
            $this->success('您未做任何更改','index');
        }else{
            $m=$text->where("id=1")->save();
            if($m){
                $this->success('操作成功,正在返回后台首页','index');
            }else{
                $this->error('出错了，请重试');
            }
        }
    }

   //更改公司信息
    public function introduceindex(){//查
        $intr = M("Introduce");
        $get=$intr->where('id=1')->find();
        $this->assign('data',$get);
        $this->assign('title','编辑公司信息');
        layout('template/layout');
        $this->display();
    }
    public function introduceindex_write(){//改
        $intr = M("Introduce");
        $intr->create();
        $res=$intr->where('id=1')->save();
        $res?$this->success('数据更新成功','index'):$this->error('出错了');
    }
    //更改联系方式
    public function address(){//读
        $get = M("Introduce");
        $data=$get->where('id=1')->find();
        $this->assign('data',$data);
        $this->assign('title','编辑联系方式');
        layout('template/layout');
        $this->display();
    }
    public function addresswrite(){
        $m = M("Introduce");
        $m->create();
        $res=$m->where('id=1')->save();
        if ($res){
            $this->success('数据更新成功','index');
        }else{
            $this->error('出错了，请重试');
        }
    }
//添加案例
    public function exampleadd(){
        if (IS_POST){
            $upload = new Upload(); //实例化上传类
            $upload->maxSize = 3145728; //设置上传大小，字节
            $upload->exts=array('jpg','png','jpeg','gif');
            $upload->savePath = '/'; //在根目录Uploads下
            $info = $upload->upload(); //执行上传方法
            if (!$info) {
                $this->error($upload->getError()); //错误了
            } else {
                $get=D('Case');
                $title=I('title');
                $abstract=I('abstract');
                $src=$info['upload']['savepath'].$info['upload']['savename'];
                $data['img']=$src;
                $data['abstract']=$abstract;
                $data['title']=$title;
                if ($get->create($data)){
                    $res=$get->add();
                    if($res){
                        $this->success('数据添加成功','examplemodify');
                    }else{
                        $this->error('出错了');
                    }
                }else {
                    $this->error($get->getError());
                    return;
                };


            }
            return ;
        }
//         $data=$get->select();
        $this->assign('data',$data);
        $this->assign('title','增加案例');
        layout('template/layout');
        $this->display();
    }
    //案例管理
    public function examplemodify(){
        $case=M('Case');
        if(IS_POST){
            $search=I('post.search');
            $this->assign('search',$search);
            $where=array();
            $where['title']=array('like','%'.$search.'%');
            $where['abstract']=array('like','%'.$search.'%');
            $where[_logic]='OR';
            $count=$case->where($where)->count();
            $page=new Page($count, 10);
            $list=$case->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        }else {
            $count=$case->count();
            $page=new Page($count, 10);
            $list=$case->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        }
        $this->assign('count',$count);//how条数据
        $this->assign('title','案例管理');
        $show=$page->show();
        $this->assign('data',$list);
        $this->assign('pages',$show);
        layout('template/layout');
        $this->display();
    }
    //删除案例
    public function exampledelete(){
        $case=M('Case');
        $id=I('get.id');
        $where=array();
        $where['id']=$id;
        $res=$case->where($where)->delete();
        if($res){
            $this->success('数据删除成功','examplemodify');
        }else{
            $this->error('数据删除失败');
        }
    }
    //改变案例
    public function examplechange(){
        $case=D('Case');
        if (IS_POST){
            $upload = new Upload(); //实例化上传类
            $upload->maxSize = 3145728; //设置上传大小，字节
            $upload->exts=array('jpg','png','jpeg','gif');
            $upload->savePath = '/'; //在根目录Uploads下
            $info = $upload->upload(); //执行上传方法
            if (!$info) {
                $this->error($upload->getError()); //错误了
            } else {
                $title=I('title');
                $abstract=I('abstract');
                $id=I('id');
                $src=$info['upload']['savepath'].$info['upload']['savename'];
                $data['img']=$src;
                $data['abstract']=$abstract;
                $data['title']=$title;
                $where=array();
                $where['id']=$id;
                if ($case->create($data)){
                    $res=$case->where($where)->save();
                    if($res){
                        $this->success('数据修改成功','index');
                    }else{
                        $this->error('出错了');
                    }
                }else {
                    $this->error($case->getError());
                    return;
                };
            }
            return ;
        }
        $id=I('get.id');
        $where=array();
        $where['id']=$id;
        $data=$case->where($where)->find();
        $this->assign('data',$data);
        $this->assign('title','再次编辑案例');
        layout('template/layout');
        $this->display();
    }

//添加产品
    public function productadd(){
        if (IS_POST){
            $upload = new Upload(); //实例化上传类
            $upload->maxSize = 3145728; //设置上传大小，字节
            $upload->exts=array('jpg','png','jpeg','gif');
            $upload->savePath = '/'; //在根目录Uploads下
            $info = $upload->upload(); //执行上传方法
            if (!$info) {
                $this->error($upload->getError()); //错误了
            } else {
                $product=D('Product');
                $title=I('title');
                $abstract=I('abstract');
                $src=$info['upload']['savepath'].$info['upload']['savename'];
                $data['img']=$src;
                $data['abstract']=$abstract;
                $data['title']=$title;
                if ($product->create($data)){
                    $res=$product->add();
                    if($res){
                        $this->success('数据添加成功','productmodify');
                    }else{
                        $this->error('出错了');
                    }
                }else {
                    $this->error($product->getError());
                    return;
                };
            }
            return ;
        }
        //         $data=$get->select();
        $this->assign('data',$data);
        $this->assign('title','增加产品');
        layout('template/layout');
        $this->display();
    }
//产品管理
    public function productmodify(){
        $product=M('Product');

        if(IS_POST){//如果是搜索
            $seach=I('post.search');
            $where=array();
            $where['title']=array('like','%'.$seach.'%');
            $where['abstract']=array('like','%'.$seach.'%');
            $where[_logic]='OR';
            $this->assign('getsearch',$seach);
            $getc=$product->where($where)->count();
            $page=new Page($getc, 15);
            $list=$product->where($where)->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('count',$getc);
        }else{
            $count=$product->count();
            $page=new Page($count, 15);
            $list=$product->limit($page->firstRow.','.$page->listRows)->select();
            $this->assign('count',$count);
        }
        $this->assign('title','产品管理');
        $show=$page->show();
        $this->assign('data',$list);
        $this->assign('pages',$show);
        layout('template/layout');
        $this->display();
    }
//修改产品
    public function productchange(){
        $product=D('product');
        if (IS_POST){
            $upload = new Upload(); //实例化上传类
            $upload->maxSize = 3145728; //设置上传大小，字节
            $upload->exts=array('jpg','png','jpeg','gif');
            $upload->savePath = '/'; //在根目录Uploads下
            $info = $upload->upload(); //执行上传方法
            if (!$info) {
                $this->error($upload->getError()); //错误了
            } else {
                $title=I('title');
                $abstract=I('abstract');
                $id=I('id');
                $src=$info['upload']['savepath'].$info['upload']['savename'];
                $data['img']=$src;
                $data['abstract']=$abstract;
                $data['title']=$title;
                $where=array();
                $where['id']=$id;
                if ($product->create($data)){
                    $res=$product->where($where)->save();
                    if($res){
                        $this->success('数据修改成功','index');
                    }else{
                        $this->error('出错了');
                    }
                }else {
                    $this->error($product->getError());
                    return;
                };
            }
            return ;
        }
        $id=I('get.id');
        $where=array();
        $where['id']=$id;
        $data=$product->where($where)->find();
        $this->assign('data',$data);
        $this->assign('title','修改产品');
        layout('template/layout');
        $this->display();
    }
//删除产品
    public function productdelete(){
        $product=M('product');
        $id=I('get.id');
        $where=array();
        $where['id']=$id;
        $res=$product->where($where)->delete();
        if($res){
            $this->success('数据删除成功','productmodify');
        }else{
            $this->error('数据删除失败');
        }
    }



}
