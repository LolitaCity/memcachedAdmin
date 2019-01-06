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
    /**
     * 构造函数
     * 
     * @return #
     */
    public function __construct(\think\App $app = null) {
        parent::__construct($app);
    }


    public function index()
    {
        //菜单列表
        $menuList   =config('menu.');
        $defaut['name'] =session('default_name');
        $defaut['host'] =session('default_host');
        $defaut['port'] =session('default_port');
        $this->assign("menuList",$menuList);
        $this->assign('default',$defaut);
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
        session('default_name',input('name'));
        session('default_host',input('host'));
        session('default_port',input('port'));
        return json(jsonData(lang('success'),200));
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
        $defaut['name'] =session('default_name');
        $defaut['host'] =session('default_host');
        $defaut['port'] =session('default_port');
        echo json_encode($defaut);
        exit;
    }
    
    /**
     * 返回default_session
     * 
     * @return  #
     */
    public function getSessionDefault(){
        $defaut['name'] =session('default_name');
        $defaut['host'] =session('default_host');
        $defaut['port'] =session('default_port');
        
    }


    /**
     * 统计信息
     * 
     * @return #
     */
    public function statsinfo(){
        $mem=memcached();
        $mem->addServer(session("default_host"), intval(session("default_port")));
        $memStats   =$mem->getStats();
        if($memStats==FALSE){
            
        }
        $memLink=session("default_host").":".session("default_port");
        $this->assign('memstats',$memStats[$memLink]);
        return $this->fetch();
    }    
}
