<?php
header("content-type:text/html; charset=utf-8");//中文字符无乱码

$t="abcdefghigklmnopqrstuvwxyz";                //声明变量$t的值
$b = mb_strimwidth("$t", 0, 10, "...");         //取变量 $t 的值,从0位起始取前10位 剩余...代替

for ($a=0;$a<50000;$a++){                       //循环5万次
//    echo "现在值是".$b."循环".$a.'<br>';
}


$e="123456789";                                 //声明变量$e的值
if(strlen($e)>5){                               //如果$e字符串长度大于5
    $f=substr($e,0,5)."...";                    //取字变量$e的值,从0位起始取前5位剩余用...代替
}
for ($h=0;$h<50000;$h++){                      //循环5万次
    echo "现在值是".$f."循环".$h.'<br>';
}