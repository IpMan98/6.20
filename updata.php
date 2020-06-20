<?php
header("Content-Type:text/html;charset=utf-8");
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$like = $_REQUEST['like'];
$sex = $_REQUEST['sex'];
 
$link = mysqli_connect('localhost','root','rootroot','user'); 
if (!$link){
    die("连接失败：".mysqli_connect_error());
};
$sql = "update name set name='$name',like='$like',sex='$sex' where id='$id'";
$result = mysqli_query($link, $sql);
echo $result;
?>