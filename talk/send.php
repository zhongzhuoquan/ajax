<?php
$link =@mysql_connect('localhost','root','123456');
mysql_select_db('ajax',$link);
mysql_query('set names utf8');
//介绍表单信息并存储
//t_r($_POST['msg']);
$msg=$_POST['msg'];
$color=$_POST['color'];
$biaoqing=$_POST['biaoqing'];
$receiver=$_POST['receiver'];
$now=  date('Y-m-d h:i:s', time());
$sql="insert into message(msg,sender,receiver,color,biaoqing,add_time) values ('".$msg."','admin','".$receiver."','".$color."','".$biaoqing."','".$now."') ";
if(mysql_query($sql)){
    echo"成功";
}else{
    echo"失败";
}