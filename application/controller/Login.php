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
        if(input('username')==NULL || input('username')!=env('USERNAME')){
            return json(jsonData(lang("login_error"),300));
        }
        if(input('password')==NULL || input('password')!=md5(env('PASSWORD'))){
            return json(jsonData(lang("login_error"),300));
        }        
        session('authId',1);
        session("username",input('username'));
        cookie('think_var',input('language'));
        return json(jsonData(lang("success",200)));
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