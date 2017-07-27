<?php
namespace Admin\Model;
use Think\Model;
// header('content-type:text/html;charset=utf-8');
class UserModel extends Model{
    protected $_validate=array(
        array('username','require','222'),
        array('password','require','密码不得为空'),
        array('code','require','验证码不得为空'),
    );
}