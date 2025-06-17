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
$b=$_POST["name"];
$c=$_POST["password"];
$d=$_POST["ports"];



$sql = "INSERT INTO users (ip,username,password,ports)
VALUES ('$a', '$b', '$c','$d')";
 
if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



echo file_put_contents("/var/www/html/hosts.txt","$a $d $b $c");

$out=exec("./script.sh");
echo "$out";

?>