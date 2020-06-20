<?php
header("Content-Type:text/html;charset=utf-8");
 
$link = mysqli_connect('localhost','root','rootroot','user'); 
if (!$link){
    die("连接失败：".mysqli_connect_error());
};
$sql = "select * from name ";
$result = mysqli_query($link, $sql);
$res = mysqli_fetch_all($result);
$rows = json_encode($res);
echo $rows;
?>