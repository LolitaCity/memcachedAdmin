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
     * memcached 显示编辑连接
     * 
     * @return #
     */    
    public function memLink(){
        return $this->fetch();
    }
    
    /**
     * memcached 显示连接列表
     * 
     * @return memList
     */
    public function memList(){
        if(session("memList")==null){
            return $this->fetch('mem_link');
        }
        $this->assign("memList",json_decode(session("memList"),true));
        return $this->fetch();
    }
    
    /**
     * 添加连接
     * 
     * @return #
     */
    public function addMem(){ 
        if(empty(input('name','','trim'))||empty(input('name','','trim'))||empty(input('name','','trim'))){return $this->fetch();}
        $data['name']   =input('name','','trim');
        $data['host']   =input('host','','trim');
        $data['port']   =input('port','','trim');
        $memList=[];
        if(session('memList')!=null){
            $memList= json_decode(session('memList'),true);
            //去除原默认连接
            foreach($memList as &$v){
                if($v['name']==$data['name'] ||$v['host']==$data['host']){
                    return json(jsonData(lang("link_exists"),301));
                }
            }
        }
        $memList[]  =$data;
        session('memList',json_encode($memList));
        session('memFlag',null);
        if(session("memList")){
            session("default_name",$data['name']);
            session("default_host",$data['host']);
            session("default_port",$data['port']);
            return json(jsonData(lang("addSuccess"),201));
        }
        return json(jsonData(lang("addError"),301));
    }
    
    /**
     * 切换服务器
     * 
     * @return #
     */
    public function change(){
        if(!input('name')||!input('host')||!input('port')){
            return json(jsonData('param_error'),301);
        }
        session('name',input('name'));
        session('host',input('host'));
        session('port',input('port'));
        return json(jsonData(lang('success'),201));
    }
    
    /**
     * 统计信息
     * 
     * @return #
     */
    public function statsinfo(){
        echo 22;
    }
    
    /**
     * ajax获取session
     * 
     * @return  #
     */
    public function getSessionMem(){
        if(session('memList')==NULL){
            session('memFlag',1);
            echo session('memFlag');
            exit;
        }
        session('memFlag',null);
        echo session('memFlag');
        exit;
    }
}
