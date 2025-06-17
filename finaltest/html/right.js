document.addEventListener('DOMContentLoaded', function() {
    var httpRequest3 = new XMLHttpRequest();
    httpRequest3.open('GET', 'right.php', true); // 补全请求地址
    httpRequest3.send();
    httpRequest3.onreadystatechange  = function() {
        if (this.readyState === 4 && this.status === 200) {
            var data3 = httpRequest3.responseText.split(",").filter(Boolean);
            document.getElementById("r1").innerHTML = data3[0];
            document.getElementById("r2").innerHTML = data3[1];
            document.getElementById("r3").innerHTML = data3[2];
        }
    }
})