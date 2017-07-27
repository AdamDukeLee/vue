<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        header("content-type:text/html;charset=utf-8");
        echo "这里是user";
    }
    public function m($user,$password){
        echo 'user:'.$user.'<br />'.'password:'.$password;
    }
}