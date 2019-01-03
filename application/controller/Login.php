<?php
/**
 * 登陆管理
 * 
 * @author  Lee<a605333742@gmail.com>
 * @date    2019-01-03
 */
namespace app\controller;

use think\Controller;

class Login extends Controller{
    /**
     * 构造函数
     * 
     * @return  #
     */
    public function __construct(\think\App $app = null) {
        parent::__construct($app);
        if(cookie('think_var')==null){
            cookie('think_var','zh-cn');
        }
    }
    
    /**
     * 登录页面
     * 
     * @return #
     */
    public function index(){
        if(session("authId")!=NULL){
            $this->redirect('index/index');
        }
        return $this->fetch();
    }
    
    /**
     * 登录检查
     * 
     * @return #
     */
    public function checkLogin(){
        if(input('post.username')==NULL || input('post.username')!='root'){
            return false;
        }
        if(input('post.password')==NULL || input('post.password')!='root'){
            return false;
        }
        session('authId',1);
        session("username",input('post.username'));
        $this->redirect('index/index');
    }
    
    /**
     * 退出登录
     * 
     * @return #
     */
    public function logOut(){
        if(session('authId')==NUll){
            $this->redirect('login/index');
        }
        session(null);
        $this->redirect('login/index');
    }
}