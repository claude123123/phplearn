<?php 
    if(!defined('IN_TG')){
        exit('access denied');
    }
    
    function _check_username($_string){
        // 去掉两边空格
        $_string= trim($_string);
        // 长度小于两位或者大于20位
        if(mb_strlen($_string,'utf-8')<2||mb_strlen($_string,'utf-8')>20){
            exit('长度不符');
        }
        // 限制敏感字符
        $_char_pattern = '/[\'\"\ \  ]/';
        if(preg_match($_char_pattern,$_string)){
            exit('用户名含敏感字符');
        }
        // 限制敏感用户名
        $_mg[0]='罗冬';
        $_mg[1]='宋佳黛';

        if(in_array($_string, $_mg)){
            echo '敏感用户名不得注册';
        }

        return mysql_real_escape_string($_string);
    }


 ?>