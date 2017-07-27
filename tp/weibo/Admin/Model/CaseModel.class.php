<?php
namespace Admin\Model;
use Think\Model;
// header('content-type:text/html;charset=utf-8');
class CaseModel extends Model{
    protected $_validate=array(
        array('img','require','标题图片不得为空'),
        array('abstract','require','介绍不能为空'),
        array('title','require','客户不得为空'),
    );
}