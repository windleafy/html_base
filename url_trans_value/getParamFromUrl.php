<html xmlns="http://www.w3.org/1999/xhtml" lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>接收地址栏传参测试</title>
</head>
<body>
<input id="new_id" type="hidden">
<script>
    //获取地址栏传参
    const src = document.getElementById("new_id").value = location.href;
    //alert(src);
    const params = src.split('?')[1];
    //输出new_id=10001中的id
    if(params) {
         id_params = params.split('=');
    }
</script>
<P>输出src完整路径：<script>document.write(src);</script>
<P>输出params获取参数：<script>document.write(params);</script>
<P>输出key值：<script>document.write(id_params[0]);</script>
<P>输出value值：<script>document.write(id_params[1]);</script>


    <!--js变量传值给php-->
    <script>const my_param = 3;</script>
    <?php $b="<script>document.write(my_param.toString());</script>";
    echo "<br>";
    echo $b;
    ?>
</body>
</html>