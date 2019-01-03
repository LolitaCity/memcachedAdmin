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
        var_dump(222);exit;
        parent::__construct($app);
        if(cookie('think_var')==null){
            cookie('think_var','zh-cn');
        }
//        
//        var_dump(config('statsinfo'));exit;
        if(session('authId')==NULL){
            $this->redirect('Login/index');
        }
        if(cookie('memList')==NULL){
            
        }        
        $this->assign('memList',json_decode(cookie('memList'),true));
    }
}