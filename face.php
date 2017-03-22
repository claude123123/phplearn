<?php 
    define('IN_TG',true);
    define('SCRIPT', 'face');
    require dirname(__FILE__).'/includes/common.inc.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8" />
     <title>多用户留言系统--头像选择</title>
      <?php require ROOT_PATH.'includes/title.inc.php'; ?>
 </head>
 <body>
    <div id="face">
        <h3>选择头像</h3>
        <dl>
            <?php foreach(range(1,9) as $num){ ?>
            <dd><img src="face/m0<?php echo $num?>.gif" alt="头像 <?php echo $num?>" /></dd>
            <?php } ?>
        </dl>
        <dl>
            <?php foreach(range(10,64) as $num){ ?>
            <dd><img src="face/m<?php echo $num?>.gif" alt="头像 <?php echo $num?>" /></dd>
            <?php } ?>
        </dl>
    </div>

     
 </body>
 </html>