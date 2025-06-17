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

$a=$_POST["ip"];
$b=$_POST["editsection"];
$c=$_POST["new"];

$sql="UPDATE users SET $b = '$c' WHERE ip = '$a'";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>