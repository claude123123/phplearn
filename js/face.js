/* 
* @Author: anchen
* @Date:   2017-03-22 12:06:08
* @Last Modified by:   anchen
* @Last Modified time: 2017-03-22 15:29:33
*/

window.onload=function(){
    var faceimg = document.getElementById('faceimg');
    var code = document.getElementById('code');
    faceimg.onclick = function (){
        window.open('face.php','face','width=400,height=400,top=0,left=0,scrollbars=1');
    }
    code.onclick = function(){
        this.src = 'code.php?tm='+Math.random();
    }
}