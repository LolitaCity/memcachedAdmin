<?php
/**
 * memcachedAdmin 首页管理
 * 
 * @author  Lee<a605333742@gmail.com>
 * @date    2019-01-03
 */

namespace app\controller;

class Index extends Common
{
    public function index()
    {
        //菜单列表
        $menuList   =config('menu.');
        $this->assign("menuList",$menuList);
        return $this->fetch();
    }
    
    /**
     * 切换语言
     * 
     * @return #
     */
    public function changeLanguage(){
        if(cookie('think_var')=='zh-cn'){            
            cookie('think_var','en-us');
        }else{
            cookie('think_var','zh-cn');           
        }
        $this->redirect('index');
    }

    /**
     * memcached 连接列表
     * 
     * @return #
     */    
    public function memList(){
        if(session('memList')){
            $this->assign("memList",session('memList'));
        }
        $this->assign('memFlag',session('memFlag'));
        return $this->fetch();
    }
}
