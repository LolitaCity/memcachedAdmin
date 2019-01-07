<?php
/**
 * 控制器父类
 * 
 * @author  Lee<a605333742@gmail.com>
 * @date    2019-01-03
 */
namespace app\controller;

use think\Controller;

class Common extends Controller{
    /**
     * 构造函数
     * 
     * @return #
     */
    public function __construct(\think\App $app = null) {
        parent::__construct($app);
        if(cookie('think_var')==null){
            cookie('think_var','zh-cn');
        }
        if(session('authId')==NULL){
            $this->redirect('Login/index');
        }
        if(self::existsMemcached()==FALSE){
            return $this->fetch('error/nomem');
        }
        session('memFlag',0);
        if(session('memList')==NULL){
            session('memFlag',1);
        }
        $this->assign('memFlag',session("memFlag"));
    }
    
    /**
     * 判断当前环境是否存在memcached模块
     * 
     * @return #
     */
    protected function existsMemcached(){
        if (!extension_loaded('memcached')) {
            return FALSE; 
        }
    }
}
