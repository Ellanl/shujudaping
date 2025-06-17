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

$a=$_POST['searchcontent'];

$result = $conn->query("SELECT * FROM users WHERE ip = '$a'");
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "ip: " . $row["ip"]. ",";
        echo "status: " . $row["computerstatus"]. ",";
        echo "ports: " . $row["ports"]. ",";
        echo "username: " . $row["username"]. "<br>";
    }
} else {
    echo "0 结果";
}


?>
