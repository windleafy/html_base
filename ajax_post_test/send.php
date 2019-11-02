<html lang="ZH">
<head>
    <title>json</title>
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.js"></script>
</head>
<body>
    <p>点击按钮发送</p>
    <input type="button" onclick="sendJson()" value="点击">
    <p id = "my_string">冷荣富22男</p>
    <div>
        <p id = "my_result">结论</p>
    </div>
</body>

<script>
    function sendJson() {
        const stu={
            name:"冷荣富",
            age:"22",
            gender:"男"
        };
        $.ajax({
            type : "POST",//提交方式
            url : "./response.php",//路径,www根目录下
            data : {
                "student" : stu
            },//数据，这里使用的是Json格式进行传输
            success : function(result) {//返回数据根据结果进行相应的处理
                //alert(result);
                document.getElementById('my_result').innerHTML = result
            }
        });
    }
</script>
</html>