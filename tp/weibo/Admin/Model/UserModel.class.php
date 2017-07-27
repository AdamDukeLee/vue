<?php
namespace Admin\Model;
use Think\Model;
// header('content-type:text/html;charset=utf-8');
class UserModel extends Model{
    protected $_validate=array(
        array('code','require','验证码不得为空'),
        array('username','require','用户不得为空'),
        array('password','require','密码不得为空'),
        array('repassword','require','确认密码不得为空'),
        array('newpassword','require','新密码不得为空'),
        array('newpassword','repassword','两次密码输入不一致',0,'confirm'),
    );
}