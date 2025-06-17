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
$sql = "SELECT  computerstatus FROM users";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
      
        echo  $row["computerstatus"]. ",";
        // $count++;
    }
} else {
    echo "0 结果";
}

// echo $count;

?>