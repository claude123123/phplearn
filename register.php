<?php 
    session_start();
    define('IN_TG',true);
    define('SCRIPT','register');
    require dirname(__FILE__).'/includes/common.inc.php';
    if(@$_GET['action'] == 'register') {
        //为了防止恶意注册，跨站攻击
    //     echo $_POST['yzm'];
    //     echo $_SESSION['code'];
    //     if($_POST['yzm']==$_SESSION['code']){
    //         $_username = $_POST['username'];
    //         echo $_username;
    //     }
    //     else
    //         exit('验证码不正确');
    // }
    //创建一个数组，用来存放提交过来的合法数据
    $_clean = array();
    $_clean['username']=$_POST['username'];
    $_clean['password']=$_POST['password'];
    print_r($_clean);
    }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8" />
     <title>注册页面</title>
     <?php 
        require ROOT_PATH.'includes/title.inc.php';
      ?>
      <script src="js/face.js "></script>
 </head>
 <body>
     <?php  
        require ROOT_PATH.'includes/header.inc.php';
     ?>
     <div id="register">
         <h2>会员注册</h2>
         <form method="post" action="register.php?action=register" name="register" >
             <dl>
                 <dt>请认真填写以下内容</dt>
                 <dd>用户名：<input type="text" name="username" class="text">(*必填，至少两位)</dd>
                 <dd>密码：<input type="password" name="password" class="text" />(*必填，至少6位)</dd>
                 <dd>确认密码：<input type="password" name="notpassword" class="text" />(*必填，同上)</dd>
                 <dd>密码提示：<input type="text" name="passt" class="text" />(*必填，至少2位)</dd>
                 <dd>密码回答：<input type="text" name="passd" class="text" />(*必填，至少两位)</dd>
                 <dd>性别：<input type="radio" name="sex" value="男"  checked="checked" />男<input type="radio" name="sex" value="女" />女</dd>
                 <dd class="face"><img src="face/m01.gif" height="80" width="80" alt="头像选择" id="faceimg" /></dd>
                 <dd>电子邮件：<input type="text" name="email" class="text" /></dd>
                 <dd>QQ：<input type="text" name="qq" class="text" /></dd>
                 <dd>主页地址：<input type="text" name="url" class="text" value="http://" /></dd>
                 <dd>验证码：<input type="text" name="yzm" class="text yzm" /><img src="code.php" id='code' alt="" /></dd>
                 <dd><input type="submit" class="submit" value="注册" /></dd>
             </dl>
         </form>
     </div>

     <?php  
        require ROOT_PATH.'includes/footer.inc.php';
     ?>
 </body>
 </html>