<?PHP
   
    $name = $_POST['name'];//post获得用户名表单值

    $passowrd = $_POST['password'];//post获得用户密码单值

    if ($name && $passowrd){//如果用户名和密码都不为空
            echo '我是PHP，你好！';
            echo'\\n';
            echo $name;
            echo'\\n';
            echo $passowrd;
            //header("refresh:0;url=welcome.html");//如果成功跳转至welcome.html页面
            exit;
             }else{
                echo "用户名或密码错误";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                    </script>

                ";//如果错误使用js 1秒后跳转到登录页面重试;
             }
?>