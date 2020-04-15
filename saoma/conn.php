<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('date.timezone','Asia/Shanghai');
$link=mysqli_connect("il4umt7m.2396lan.dnstoo.com:3306","jf99226x_f","gsf291847831","jf99226x") or die("连接服务器失败，请联系管理员Q1986083121");
mysqli_query($link,"set names utf8");

$web_result=mysqli_query($link,"select * from ma_main");
$web_info=mysqli_fetch_array($web_result);

?>
