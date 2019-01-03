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
        session('memFlag',0);
        if(cookie('memList')==NULL){
            session('memFlag',1);
        }else{
            $this->assign('memList',json_decode(cookie('memList'),true));
        }        
    }
}