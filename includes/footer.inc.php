<?php  
    if(!defined('IN_TG')){
        exit('Access deny');
    }
?>

<div id="footer">
        <p>本程序执行耗时为： <?php echo round((_runtime()-START_TIME),4)  ?>秒 </p>
        <p>版权所有 翻版必究</p>
        <p>本程序由<span>瓢城俱乐部</span>提供源代码可以任意修改或发布&copy yc60.com</p>
</div>