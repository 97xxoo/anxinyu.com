<?php
$servername = "localhost";
$username = "shapt2_com"; //用户名
$password = "yzxdbfFyRaHszDXN"; //密码
$dbname = "shapt2_com"; //对应的数据库
 
// 创建连接
$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("连接失败: " . $con->connect_error);
}
