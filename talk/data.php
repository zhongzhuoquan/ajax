<?php



//随时获取最新的聊天消息  

$link =@mysql_connect('localhost','root','123456');

mysql_select_db('ajax',$link);

mysql_query('set names utf8');
//获取聊天消息
//每次都请求新的聊天内容
//本次请求的记录结果id需要大于上次已经传的id
$maxID=$_GET['maxID'];
$sql = "select * from message where id>'$maxID'";

$qry = mysql_query($sql);

$info = array();

while($rst = mysql_fetch_assoc($qry)){

    $info[] = $rst;

}

//把数据组织为二维数组  

//把最新的聊天信息通过json格式提供出来  

echo json_encode($info);