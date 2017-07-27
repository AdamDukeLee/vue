<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
use Think\Verify;
header('content-type:text/html;charset=utf-8');
class LoginController extends Controller{
    public $uuid="333";
    public function index(){
        if (IS_POST){
            $user=D('User');
            if($user->create()){//和数据库里数据比较
                $u=I('post.username');
                $p=I('post.password');
                $code=I('code');
                if (!check_verify($code)){
                    $this->error('验证码错误');
                    return;
                };
                $where['username']=$u;
                $run=$user->where($where)->select();
                if($run){
                    if ($p == $run[0]['password']){
                        $login=array();
                        switch ($run[0]['power']){
                            case 'admin':
                                $login['uid']=10000;
                                $login['user']=$run[0]['username'];
                                break;
                            case 'customer':
                                $login['uid']=20001;
                                $login['user']=$run[0]['username'];
                                break;
                            case 'visitor':
                                $login['uid']=20000;
                                $login['user']=$run[0]['username'];
                                break;
                            default:
                                $this->error('40002此用户不是管理员','index');
                                return;
                        };
                        session('auth',$login);
                        $this->redirect('Index/index');
                    }else {
                        $this->error('40001登陆密码错误','index');//登陆密码错误
                    }

                }else{//如果没有用户名
                    $this->error('40000此用户不是管理员','index');
                };
            }else{
                $this->error($user->getError());

            }
        }else{
            $this->assign('title','登录页面');
            layout('template/layout');
            $this->display();
        };
    }
    public function verify(){//验证码页面
        $verify=new Verify();
        $verify->length=4;
        $verify->expire=4;
        $verify->codeSet="0123456789";
        $verify->useCurve=false;
        $verify->entry();
    }
    public function test(){
        $code=I('get.code');
        echo $code;
        echo '<br />';
       var_dump(check_verify($code));
    }
}