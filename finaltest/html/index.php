<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="mainmodule.css">
    <link rel="stylesheet" href="search1.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <img src="" alt="">
        <ul>
            <li><a href="#">首页</a></li>
            <li><a href="add.html">添加</a></li>
            <li><a href="edit.html">修改</a></li>
        </ul>
        <div class="search-container">
            <form id="myForm">
                <input type="text" placeholder="搜索" class="saerchinput" id="search" name="searchcontent">
                <button type="button"><img src="./images/搜索 (3).png" alt="" id="myBtn"></button>
            </form>
        </div>
        <div id="myModal" class="modal">
             
                <!-- 弹窗内容 -->
                <div class="modal-content">
                    <img src="./images/主机.png" alt="" >
                    <div class="contpara">
                        <p id="p1" class="p1">弹窗中的文本...</p>
                        <p id="p2" class="p2" >弹窗中的文本...</p>
                        <p id="p3" class="p3">弹窗中的文本...</p>
                        <p id="p4" class="p4">弹窗中的文本...</p>
                    </div>
                    <span class="close">&times;</span>
                </div>
                
        </div>
                
        <img src="./images/头像.png" class="user-pic" id="user-pic" alt="头像">
        <div id="myDropdown" class="dropdown-content">
            <div class="menu">
                <div class="user-info">
                    <img src="./images/头像.png" alt="">
                    <h3>张楚岚</h3>
                </div>
                <hr>
                <div class="menu-link" id="menu-link">
                    <a href="#"><img src="./images/用户 (2).png" >
                        <p>我的</p>
                        <span>></span>
                    </a>
                    <a href="#"><img src="./images/用户 (2).png" >
                        <p>我的</p>
                        <span>></span>
                    </a>
                    <a href="#"><img src="./images/用户 (2).png" >
                        <p>我的</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <div style="display: flex;flex: 1;overflow: auto;" class="main">
        <div class="main1">
            <div style="flex: 5;" class="left">
                <div class="container" id="con">
                    
                </div>
                
            </div>
            <div style="flex: 3;display: flex;" class="right">           
                <div class="first">
                    <img src="./images/监控-主机监控（高亮）.png" alt="">
                    <div class="rightcont">
                        <h1>总主机数</h1>
                        <p id="r1">0</p>
                    </div>
                </div>
                <div class="first">
                    <img src="./images/监控-主机-正常主机.png" alt="">
                    <div class="rightcont">
                        <h1>在线主机数</h1>
                        <p id="r2">0</p>
                    </div>
                </div>
                <div class="first">
                    <img src="./images/监控-主机-异常主机.png" alt="">
                    <div class="rightcont">
                        <h1>离线主机数</h1>
                        <p id="r3">0</p>
                    </div>
                </div>           
            </div>
        </div>
    </div>
    <script src="./admin.js">
        
    </script>
    <script src="./main.js"></script>
    <script src="./search1.js"></script>
    <script src="./right.js"></script>
    
</body>
<?php include "output.php"?>
</html>
