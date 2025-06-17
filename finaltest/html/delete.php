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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    echo $title;
    $filteredTitle = htmlspecialchars(trim($title), ENT_QUOTES, 'UTF-8');
    $conn->query("DELETE FROM users WHERE ip = '$filteredTitle'");

    
    
}



?>