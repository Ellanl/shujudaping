

// main.js
document.addEventListener('DOMContentLoaded', function() {
    var httpRequest = new XMLHttpRequest();
    httpRequest.open('GET', 'began.php', true); // 补全请求地址
    httpRequest.send();
    var httpRequest1 = new XMLHttpRequest();
    httpRequest1.open('GET', 'online.php', true); // 补全请求地址
    httpRequest1.send();
    
  
    httpRequest.onreadystatechange  = function() {
      if (this.readyState === 4 && this.status === 200) {
        var con = document.getElementById("con");
        var data = httpRequest.responseText.split(",").filter(Boolean); // 过滤空值
        var data1 =httpRequest1.responseText.split(",").filter(Boolean);
        httpRequest1.open('GET', 'online.php', true); // 补全请求地址
        httpRequest1.send();
        var count=0;
        data.forEach(item => {
          var data1 =httpRequest1.responseText.split(",").filter(Boolean);
          var item1 = item.split(" ");
          if (item1[1] === "在线"){
            var card = document.createElement("div");
            card.className = "card";
            card.innerHTML = `
              <div class="content">
                <div class="imgBx">
                  <img src="./images/在线.png">
                </div>
                <div class="contentBx">
                  <h3>${item1[0]}</h3> <!-- 直接插入数据避免后续查询 -->
                  <br>
                  <p name="online-status">${item1[1]}</p> <!-- 改用class -->
                </div>
                <ul class="sci">
                  <li style="--img:1">
                    <a href="#" class="close-btn"> <!-- 添加关闭按钮类 -->
                      <img src="./images/关闭2.png" style="height:45px;width:auto;">
                    </a>
                  </li>
                </ul>
              </div>
            `;
            con.appendChild(card);
          }else{
            var card = document.createElement("div");
            card.className = "card";
            card.innerHTML = `
              <div class="content">
                <div class="imgBx">
                  <img src="./images/离线 (3).png">
                </div>
                <div class="contentBx" >
                  <h3>${item1[0]}</h3> <!-- 直接插入数据避免后续查询 -->
                  <br>
                  <p name="online-status">${item1[1]}</p> <!-- 改用class -->
                </div>
                <ul class="sci">
                  <li style="--img:1">
                    <a href="" class="close-btn"> <!-- 添加关闭按钮类 -->
                      <img src="./images/关闭2.png" style="height:45px;width:auto;">
                    </a>
                  </li>
                </ul>
              </div>
            `;
            con.appendChild(card);
          }
          
          
        });
      }
    };

   
    
  });

  document.getElementById('con').addEventListener('click', function(e) {
    if (e.target.closest('.close-btn')) {
      const card = e.target.closest('.card');
      
      // 获取卡片内的 h3 元素内容
      const h3Element = card.querySelector('h3');
      const title = h3Element ? h3Element.textContent : '';
  
      // 发送数据到服务器
      fetch('delete.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `title=${encodeURIComponent(title)}`
      })
      .then(response => {
        if (!response.ok) throw new Error('删除请求失败');
        return response.text();
      })
      .then(data => {
        console.log('删除成功:', data);
        card.remove();  // 服务器响应成功后再删除卡片
      })
      .catch(error => {
        console.error('删除失败:', error);
        // 可以添加错误处理，如显示错误提示
      });
    }
  });
 