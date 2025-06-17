<?php
$servername = "mysql-container";
$username = "root";
$password = "zcl221b";
$dbname = "hosts";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
// $count=0;
$sql = "SELECT COUNT(*) as total_rows FROM users";
$result = $conn->query($sql);
 
$row = $result->fetch_assoc();
$rowCount=0;
$rowCount=$row["total_rows"];
echo $rowCount. ",";

$sql1 = "SELECT COUNT(*) as total_rows FROM users WHERE computerstatus='在线'";
$result1 = $conn->query($sql1);
 
$row1 = $result1->fetch_assoc();
$rowCount1=0;
$rowCount1=$row1["total_rows"];
echo $rowCount1. ",";

$out=$rowCount-$rowCount1;
echo $out;

?>