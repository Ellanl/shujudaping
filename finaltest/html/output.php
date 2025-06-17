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

    
    $a=file("test.txt");
    $arrlength=count($a);
    for($x=0;$x<$arrlength;$x++)
    {
       if(strpos("$a[$x]","SUCCESS")){
        $token = strtok($a[$x], " ");
        $conn->query("UPDATE users SET computerstatus = '在线' WHERE ip = '$token';");
       }else{
        $token = strtok($a[$x], " ");
        $conn->query("UPDATE users SET computerstatus = '离线' WHERE ip = '$token';");
       }
    }
    
?>
