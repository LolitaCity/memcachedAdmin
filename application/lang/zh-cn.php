<?php
/**
 * 中文语言包
 *
 * @author  Lee<a605333742@gamial.com>
 * @date    2018-12-16
 */
return [
    'Username'  =>"用户名",
    'Password'  =>'密码',
    'Language'  =>"语言",

    'title'=>"MemAdmin",
    'info'=>"可视化的Memcache管理工具",
    'help'=>"帮助",
    'exit'=>"退出",

    //memadmin.php
    'aboutcon'=>"服务器信息",
    'statsinfo'=>"统计信息",
    'settinginfo'=>"设置信息",
    'slabinfo'=>"区块统计",
    'iteminfo'=>"数据项统计",
    'sizeinfo'=>"对象数量统计",
    'monitor'=>"性能监控",
    'statmonitor'=>"统计监控",
    'datamonitor'=>"数据监控",
    'hitmonitor'=>"命中监控",
    'getset'=>"数据存取",
    'getdata'=>"读取数据",
    'setdata'=>"写入数据",
    'countcom'=>"计数命令",
    'flushallt'=>"全部失效",
    'exmod'=>"扩展功能",
    'itemtravt'=>"数据遍历",
    'itemfiltravt'=>"条件遍历",

    //set_con.php
    'set_con_title'=>"服务器连接设置",
    'set_con_listtit'=>"服务器连接列表",
    'set_con_addcon'=>"添加服务器连接",
    'set_con_addconpool'=>"添加服务器连接池",
    'help_addcon'=>"Memcached::addServer()方法添加一个服务器连接",
    'con_name'=>"名称",
    'con_host'=>"host",
    'con_port'=>"port",
    'con_name_def'=>"默认连接",
    'con_more'=>"高级参数",
    'con_timeout'=>"连接超时时间(timeout)",
    'con_pcon'=>"持久化连接(addServer)",
    'con_se'=>"秒",
    'con_add'=>"添加",
    'help_addcp'=>"Memcached::addServer()方法添加一个服务器连接池",
    'conp_name'=>"连接池名称",
    'conp_name_def'=>"默认连接池",
    'conp_consltit'=>"服务器",
    'conp_pcon'=>"持久化连接(persistent)",
    'conp_status'=>"status",
    'con_retry'=>"retry_interval",
    'con_weight'=>"权重(weight)",
    'add_new_con'=>"加入一台服务器",
    'no_cons'=>"无服务器连接",
    'con_exist'=>"列表中已经存在一个参数相同的连接",
    'no_conname'=>"名称不能为空",
    'no_host'=>"host不能为空",
    'no_port'=>"端口不能为空",
    'con_del'=>"删除",
    'con_arg'=>"连接参数",
    'con_arg_pcon'=>"持久连接",
    'con_arg_yes'=>"是",
    'con_arg_no'=>"否",
    'con_arg_timeout'=>"超时时间",
    'con_arg_se'=>"秒",
    'con_arg_default'=>"默认",
    'con_failhost'=>"存在非法字符",
    'con_failport'=>"端口非法",
    'con_failtimeout'=>"连接超时时间输入非法",
    'con_havecon'=>"存在一个同名的连接",
    'con_listm'=>"管理",
    'con_call'=>"收起所有",
    'con_eall'=>"展开所有",
    'con_clearlist'=>"清空列表",
    'con_savelist'=>"保存列表",
    'con_confirm'=>"确定删除?",
    'con_confirm_clear'=>"确定清空列表 ? 保存在cookie中的信息将全部清空",
    'no_conpname'=>"连接池名称不能为空",
    'con_haveconp'=>"存在一个同名的连接池",
    'con_failweight'=>"权重输入非法",
    'con_failretry'=>"retry_interval",
    'con_failnoconp'=>"连接池中无服务器",
    'con_exist_conp'=>"列表中已经存在一个参数相同的连接池",
    'conp_statusfail'=>"status=FALSE",
    'conp_noweight'=>"无",
    'con_go'=>"开始管理",
    'con_nolist'=>"列表为空",
    'con_saveok'=>"列表保存成功",
    'con_clearok'=>"列表已清空",
    'con_listsavetime'=>"列表保存时间",
    'con_loadlist'=>"读取列表",
    'con_loadnotice'=>"载入保存在cookie中的列表，已有列表将被清空，确定载入？",

    //memadmin.php
    'mad_con'=>"连接",
    'mad_conset'=>"连接设置",
    'mad_conlist'=>"连接列表",

    //show_con.php
    'scon_tit'=>"连接信息",
    'scon_ptit'=>"连接池信息",
    'scon_type'=>'类型',
    'scon_mcon'=>"Memcache连接",
    'scon_mpcon'=>"Memcache持久连接",
    'scon_mconp'=>"Memcache连接池",
    'scon_confun'=>"连接函数",
    'scon_ispcon'=>"是否持久连接",
    'scon_condemo'=>"连接示例",
    'scon_conlist'=>"服务器列表",
    'scon_conser'=>"服务器",
    'scon_connum'=>"服务器数",
    'scon_nohave'=>"无",

    //debug.php
    'run_time'=>"耗时",
    'run_memory'=>"内存",

    //con_status.php
    'cs_tit'=>"服务器STATS信息",
    'confail'=>"服务器无法连接",
    'cs_arg'=>"参数",
    'cs_value'=>"值",
    'cs_desc'=>"描述",
    'cs_pid'=>"memcache服务器进程ID",
    'cs_uptime'=>"服务器已运行秒数",
    'cs_time'=>"服务器当前Unix时间戳",
    'cs_version'=>"memcache版本",
    'cs_libevent'=>"libevent版本",
    'cs_pointer_size'=>"操作系统指针大小",
    'cs_rusage_user'=>"进程累计用户时间",
    'cs_rusage_system'=>"进程累计系统时间",
    'cs_curr_connections'=>"当前连接数量",
    'cs_total_connections'=>"Memcached运行以来连接总数",
    'cs_connection_structures'=>"Memcached分配的连接结构数量",
    'cs_cmd_get'=>"get命令请求次数",
    'cs_cmd_set'=>"set命令请求次数",
    'cs_cmd_flush'=>"flush命令请求次数",
    'cs_get_hits'=>"get命令命中次数",
    'cs_get_misses'=>"get命令未命中次数",
    'cs_delete_hits'=>"delete命令命中次数",
    'cs_delete_misses'=>"delete命令未命中次数",
    'cs_incr_hits'=>"incr命令命中次数",
    'cs_incr_misses'=>"incr命令未命中次数",
    'cs_decr_hits'=>"decr命令命中次数",
    'cs_decr_misses'=>"decr命令未命中次数",
    'cs_cas_hits'=>"cas命令命中次数",
    'cs_cas_misses'=>"cas命令未命中次数",
    'cs_cas_badval'=>"使用擦拭次数",
    'cs_auth_cmds'=>"认证命令处理的次数",
    'cs_auth_errors'=>"认证失败数目",
    'cs_bytes_read'=>"读取总字节数",
    'cs_bytes_written'=>"发送总字节数",
    'cs_limit_maxbytes'=>"分配的内存总大小（字节）",
    'cs_accepting_conns'=>"接受新的连接",
    'cs_listen_disabled_num'=>"失效的监听数",
    'cs_threads'=>"当前线程数",
    'cs_conn_yields'=>"连接操作主动放弃数目",
    'cs_bytes'=>"当前存储占用的字节数",
    'cs_curr_items'=>"当前存储的数据总数",
    'cs_total_items'=>"启动以来存储的数据总数",
    'cs_evictions'=>"LRU释放的对象数目",
    'cs_reclaimed'=>"已过期的数据条目来存储新数据的数目",
    'nostats'=>"无法获取STATS信息，可能由于版本不支持所致",
    'cs_scon'=>"选择服务器",
    'cs_cmd_set_hits'=>"set命令命中次数（Tokyo Tyrant服务特有）",
    'cs_cmd_set_misses'=>"set命令未命中次数（Tokyo Tyrant服务特有）",
    'cs_cmd_delete'=>"delete命令请求次数（Tokyo Tyrant服务特有）",
    'cs_cmd_delete_hits'=>"delete命令未命中次数（Tokyo Tyrant服务特有）",
    'cs_cmd_delete_misses'=>"delete命令未命中次数（Tokyo Tyrant服务特有）",
    'cs_cmd_get_hits'=>"get命令命中次数（Tokyo Tyrant服务特有）",
    'cs_cmd_get_misses'=>"get命令未命中次数（Tokyo Tyrant服务特有）",
    'cs_reserved_fds'=>"内部使用的FD数",
    'cs_cmd_touch'=>"touch命令请求次数",
    'cs_touch_hits'=>"touch命令命中次数",
    'cs_touch_misses'=>"touch命令未命中次数",
    'cs_hash_power_level'=>"hash表等级",
    'cs_hash_bytes'=>"当前hash表大小",
    'cs_hash_is_expanding'=>"hash表正在扩展",
    'cs_expired_unfetched'=>"已过期但未获取的对象数目",
    'cs_evicted_unfetched'=>"已驱逐但未获取的对象数目",

    //con_settings.php
    'sett_tit'=>"服务器SETTINGS信息",
    'sett_maxbytes'=>"最大字节数限制（0无限制）",
    'sett_maxconns'=>"允许最大连接数",
    'sett_tcpport'=>"TCP端口",
    'sett_udpport'=>"UDP端口",
    'sett_inter'=>"IP地址",
    'sett_verbosity'=>"日志（0=none,1=som,2=lots）",
    'sett_oldest'=>"最老对象过期时间",
    'sett_evictions'=>"LRU可用（on/off）",
    'sett_domain_socket'=>"Socketpath",
    'sett_umask'=>"创建Socket的掩码",
    'sett_growth_factor'=>"增长因子",
    'sett_chunk_size'=>"chunk大小（key+value+flags）",
    'sett_num_threads'=>"线程数（默认4,可通过-t参数设置）",
    'sett_num_threads_per_udp'=>"每UDP Socket中的工作线程数",
    'sett_stat_key_prefix'=>"stats分隔符",
    'sett_detail_enabled'=>"显示stats细节信息（yes/no）",
    'sett_reqs_per_event'=>"最大IO吞吐量（每event）",
    'sett_cas_enabled'=>"是否启用CAS（yes/no,-C禁用）",
    'sett_tcp_backlog'=>"TCP监控日志",
    'sett_binding_protocol'=>"绑定协议",
    'sett_auth_enabled_sasl'=>"是否启用SASL验证（yes/no）",
    'sett_item_size_max'=>"数据最大尺寸",
    'nosettings'=>"无法获取SETTINGS信息，可能由于无权限或版本不支持",
    'confail_tokyo_cabinet'=>"无法获取信息，可能由于该连接为支持 memcache 协议的其他服务（如 Tokyo Tyrant 等）",
    'sett_maxconns_fast'=>"达到最大连接时是否报错并关闭连接",
    'sett_hashpower_init'=>"初始hash表等级",
    'sett_slab_reassign'=>"是否开启slab重分配",
    'sett_slab_automove'=>"slab自动重分配",

    //con_items.php
    'items_tit'=>"服务器ITEMS信息",
    'noitems'=>"无法获取ITEMS信息，可能由于 memcache 中暂无数据",
    'noitems_conp'=>"无法获取ITEMS信息，可能由于 memcache 中暂无数据或无法连接",
    'items_sslab'=>"选择内存区块",
    'items_number'=>"该slab中对象数（不包含过期对象）",
    'items_age'=>"LRU队列中最老对象的过期时间",
    'items_evicted'=>"LRU释放对象数",
    'items_evicted_nonzero'=>"设置了非0时间的LRU释放对象数",
    'items_evicted_time'=>"最后一次LRU释放的对象存在时间",
    'items_outofmemory'=>"不能存储对象次数",
    'items_tailrepairs'=>"修复slabs次数",
    'items_reclaimed'=>"使用过期对象空间存储对象次数",
    'items_expired_unfetched'=>"已过期但未获取的对象数目",
    'items_evicted_unfetched'=>"已驱逐但未获取的对象数目",

    //con_sizes.php
    'size_tit'=>"服务器SIZES信息",
    'nosizes'=>"无法获取SIZES信息，可能由于 memcache 中暂无数据",

    //con_slabs.php
    'slabs_tit'=>"服务器SLABS信息",
    'noslabs'=>"无法获取SLABS信息",
    'slabs_sslab'=>"选择内存区块",
    'slabs_active_slabs'=>"slab数量",
    'slabs_total_malloced'=>"总内存数量",
    'slabs_chunk_size'=>"chunk大小（byte）",
    'slabs_chunks_per_page'=>"每个page的chunk数量",
    'slabs_total_pages'=>"page数量",
    'slabs_total_chunks'=>"chunk总数量（chunks_per_page*total_pages）",
    'slabs_used_chunks'=>"已被分配的chunk数量",
    'slabs_free_chunks'=>"过期数据空出的chunk数",
    'slabs_free_chunks_end'=>"从未被使用过的chunk数",
    'slabs_mem_requested'=>"请求存储的字节数",
    'slabs_get_hits'=>"get命令命中数",
    'slabs_cmd_set'=>"set命令请求数",
    'slabs_delete_hits'=>"delete命令命中数",
    'slabs_incr_hits'=>"incr命令命中数",
    'slabs_decr_hits'=>"decr命令命中数",
    'slabs_cas_hits'=>"cas命令命中数",
    'slabs_cas_badval'=>"cas数据类型错误数",
    'noslabs_conp'=>"无法获取SLABS信息",
    'noslabs_noitems'=>"无法获取SLABS信息，可能由于 memcache 中暂无数据",
    'slabs_touch_hits'=>"touch命令命中数",

    //stats_monitor.php
    'statsmo_tit'=>"统计信息监控",
    'statsmo_check'=>"选择",
    'statsmo_scon'=>"选择要监控的服务器",
    'statsmo_arg'=>"选择要监控的参数",
    'nocheck'=>"请选择至少一个监控参数",
    'statsmo_sall'=>"全选",
    'statsmo_call'=>"取消",
    'statsmo_oall'=>"反选",
    'statsmo_start'=>"开始监控",

    //show_monitor_stats.php
    'showmo_stats_tit'=>"统计信息监控",
    'showmo_stats_conptit'=>"中的服务器",
    'showmo_nostats'=>"无法获取STATS信息，监控终止",
    'showmo_relayout'=>"恢复布局",
    'showmo_aftit'=>"自动刷新",
    'showmo_afstart'=>"开始",
    'showmo_afstop'=>"停止",
    'showmo_lasttime'=>"上次刷新时间",
    'afsempty'=>"刷新时间不能为空",
    'afsfail'=>"刷新时间填写非法",
    'afsjsonfail'=>"刷新失败，监控终止",
    'sautof_des'=>"秒自动刷新",

    //data_monitor.php
    'datamo_tit'=>"数据监控",
    'datamo_noitems'=>"memcache 中暂无数据，无法进行监控",
    'datamo_arg_tit'=>"Memcache 服务器数据状态监控",
    'datamo_slabarg'=>"SLAB 参数",
    'datamo_gloarg'=>"全局参数",
    'showmo_data_tit'=>"数据信息监控",
    'showmo_data_lostmem'=>"被浪费内存数",
    'showmo_slab_arg'=>"SLAB 参数",

    //hit_monitor.php
    'hm_gettit'=>"GET 命中情况",
    'hm_deletetit'=>"DELETE 命中情况",
    'hm_incrtit'=>"INCR 命中情况",
    'hm_decrtit'=>"DECR 命中情况",
    'hm_castit'=>"CAS 命中情况",
    'hm_settit'=>"SET 命中情况",
    'hm_touchtit'=>"TOUCH 命中情况",

    //show_monitor_hit.php
    'hitmo_tit'=>"命中情况监控",
    'hitmo_cmdcount'=>"请求总数",
    'hitmo_hitcount'=>"命中次数",
    'hitmo_misscount'=>"未命中次数",
    'hitmo_hitrate'=>"命中率",
    'hitmo_hittit'=>"命中情况",
    'hitmo_nochart'=>"暂无统计图",
    'hitmo_hit'=>"命中",
    'hitmo_miss'=>"未命中",

    //mem_get.php
    'memg_tit'=>"GET 操作",
    'memg_nokey'=>"请输入要查询的KEY",
    'memg_delconfirm'=>"确定从memcached中立即删除？",
    'memg_unserfail'=>"反序列化失败，非序列化字符串",
    'memg_inputnot'=>"查询多个KEY以 空格 分隔",
    'memg_notget'=>"未查到",
    'memg_getres'=>"查询结果",
    'memg_resnot'=>"数组/对象 序列化后显示，JSON字符串反序列化后以数组形式显示",
    'memg_geterror'=>"错误：无法解压缩或反序列化，原因可能为设置了对应的flags位，但内容为非有效的压缩或序列化格式",
    'memg_butvalue'=>"查询",
    'memg_ser'=>"序列化",
    'memg_unser'=>"反序列化",
    'memg_tnum'=>"获取总数",
    'memg_updateres'=>"刷新",
    'memg_reget'=>"编码指定错误，尝试转换编码中",

    //mem_set.php
    'mems_tit'=>"写入数据",
    'mems_noempty'=>"KEY或VALUE不能为空",
    'mems_setsuss'=>"保存成功",
    'mems_settit'=>"数据存储",
    'mems_consavefail'=>"保存失败",
    'mems_conpsavefail'=>"保存记录失败，原因可能为连接池根据CRC32规则映射到的服务器不可用",

    //mem_count.php
    'mems_counttit'=>"计数命令",
    'mems_countsuss'=>"设置成功，修改后的VALUE值： ",
    'mems_countfail'=>"设置失败，无该KEY或VALUE不为数值",
    'mems_valuenonum'=>"VALUE只能为正整数",
    'mems_countsave'=>"保存",


    //item_trav.php
    'itemt_tit'=>"数据遍历",
    'itemt_nonum'=>"遍历数目不能为空",
    'itemt_numonly'=>"只能为正整数",
    'itemt_numwrong'=>"数目填写过大",
    'itemt_notexist'=>"该条记录不存在或已失效",
    'itemt_novaluetime'=>"失效时间",
    'itemt_loading'=>"数据载入中",
    'itemt_conpgeterror'=>"该记录不存在或已失效，或连接池无法根据CRC32规则访问该记录，如需遍历请单独对该台服务器进行遍历",
    'itemt_getres'=>"遍历结果",
    'itemt_prepage'=>"上一页",
    'itemt_nexpage'=>"下一页",
    'itemt_pagenumno'=>"输入正确的页数",
    'itemt_pagingerr'=>"遍历失败，可能由于该页元素已失效或数据量太大",
    'itemt_totalnum'=>"记录总数",
    'itemt_sleslabid'=>"选择区块",
    'itemt_slabtotalnum'=>"区块内共有记录",
    'itemt_travtit'=>"遍历前",
    'itemt_travtitnum'=>"条记录",
    'itemt_getbut'=>"获取数据",
    'itemt_numnott'=>"由于memcached源码对cachedump命令的限制，最多遍历2M的key",
    'itemt_moreinfo'=>"更多",
    'itemt_closemore'=>"收起",
    'itemt_size'=>"大小",
    'itemt_expiretime'=>"永久有效",
    'itemt_valuetype'=>"类型",
    'itemt_charsettit'=>"字符集",

    //item_filtertrav.php
    'itemft_tit'=>"条件遍历",
    'itemft_nofiltercheck'=>"请对KEY或VALUE进行限定",
    'itemft_filterkeyemp'=>"限定KEY的正则表达式不能为空",
    'itemft_filtervalueemp'=>"限定VALUE的正则表达式不能为空",
    'itemft_keyfilterfail'=>"限定KEY的正则表达式输入错误",
    'itemft_valuefilterfail'=>"限定VALUE的正则表达式输入错误",
    'itemft_noreturn'=>"未查到符合条件的记录",
    'itemft_conpcannotfilter'=>"连接池无法根据CRC32规则访问该记录，无法确定该记录是否满足VALUE限定条件，请单独遍历该台服务器",
    'itemft_keyfiltertit'=>"对 KEY 限定条件",
    'itemft_valuefiltertit'=>"对 VALUE 限定条件",
    'itemft_filter'=>"正则表达式",
    'itemft_perlonly'=>"仅支持 Perl兼容正则表达式",
    'itemft_demo'=>"正则表达式示例",
    'itemft_notforvalue'=>"对VALUE进行条件限定会遍历所有数据，消耗较大，对于数组/对象等结构先序列化后匹配，请考虑序列化过程产生的额外字符对结果的影响",
    'itemft_close'=>"关闭",
    'itemft_demo1'=>"包含abc",
    'itemft_demo2'=>"包含abc且不区分大小写",
    'itemft_demo3'=>"以abc开头",
    'itemft_demo4'=>"以abc结尾",
    'itemft_demo5'=>"以数字结尾",
    'itemft_demo6'=>"不包含字母a和b",

    //mem_flush.php
    'flush_tit'=>"全部失效",
    'flush_delnot'=>"确定使全部记录失效吗？",
    'flush_delok'=>"完成",
    'flush_not'=>"立即使所有已经存在的元素失效，请谨慎使用",
    'flush_but'=>"全部失效",
];