// 获取弹窗
var modal = document.getElementById('myModal');
 
// 打开弹窗的按钮对象
var btn = document.getElementById("myBtn");
 
// 获取 <span> 元素，用于关闭弹窗
var span = document.querySelector('.close');
 
// 点击按钮打开弹窗
btn.onclick = function() {
    modal.style.display = "block";
    modal.classList.add('active');
    const form = document.getElementById("myForm");
    const content = form.elements.searchcontent.value;
    // document.getElementById("p1").innerHTML=content;
    
    var xhr1=new XMLHttpRequest();
    xhr1.open("POST","search.php",true);
    xhr1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr1.send("searchcontent=" + encodeURIComponent(content));

    xhr1.onload = function() {
        if (xhr1.status === 200) {
            // var httpRequest2 = new XMLHttpRequest();
            var data2 =xhr1.responseText.split(",").filter(Boolean);
            document.getElementById("p1").innerHTML = data2[0];
            document.getElementById("p2").innerHTML = data2[1];
            document.getElementById("p3").innerHTML = data2[2];
            document.getElementById("p4").innerHTML = data2[3];
        } else {
            document.getElementById("p1").innerHTML = "请求失败: " + xhr1.status;
        }
    };

  
    
}
 
// 点击 <span> (x), 关闭弹窗
span.onclick = function() {
    modal.style.display = "none";
}
 
// 在用户点击其他地方时，关闭弹窗
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

