<?php
namespace Home\Controller;
use Think\Controller;

class DataController extends Controller{
   public function index(){
       echo "data";
   }
   public function model(){
//         $user = new Model('User');
        header('content-type:text/html;charset=utf-8');
//         echo '<pre>';
//         print_r($user -> select());
//         echo '</pre>';
           $user = D('Admin/User');
           echo '<pre>';
//            print_r($user -> query('SELECT * FROM think_user where id=10002'));
//            print_r($user->select());
           print_r($user -> getDbFields());
           echo '</pre>';
   }
}



































?>