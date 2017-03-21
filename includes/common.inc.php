<?php 
    //防止恶意调用
    if(!defined('IN_TG')){
        exit('Access Defined');
    }
    //转换硬路径常量
    define('ROOT_PATH',substr(dirname(__FILE__),0,-8));
    //拒绝php低版本
    if(PHP_VERSION < '4.1.0'){
        exit('Version is too low!');
    }

    // 引入核心函数库
    require ROOT_PATH.'includes/global.func.php';

    // 执行耗时
    define('START_TIME',_runtime());
 ?>