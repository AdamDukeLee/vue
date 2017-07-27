<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class ResetpasswordController extends Controller{
    public function index(){
        if (IS_POST){
            $v=I('code');
            if (!check_verify($v)){
                $this->error('图形验证码错误','index');
                return;
            };
            $user=D('User');
            if($user->create()){
                $u=I('username');
                $p=I('password');
                $newp=I('newpassword');
                $rep=I('repassword');
                $where=array();
                $where['username']=$u;
                $get=$user->where($where)->find();
                if (!$get) $this->error('用户不存在','index');
                if($p==$get['password']){
                    $res=$user->where($where)->setField('password',$newp);
                    $res?$this->success('密码重置成功',U('Index/index')):$this->error('密码重置失败','index');
                }else{
                    $this->error('原来密码错误','index');//表单效验没通过
                }
            }else{
                $this->error($user->getError(),'index');//表单效验没通过
            }
            return;
        }
        $this->assign('title','修改密码');
        layout('template/layout');
        $this->display();
    }
}