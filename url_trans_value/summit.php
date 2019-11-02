<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../js/jquery2.1.1.min.js"></script>
    <title></title>
</head>

<input type="button" id="1" name="modify" value="修改" />

<script type="text/javascript">
$("input").click(function () {
    //var fired_button = $(this).val();
    //alert(fired_button);
    //alert($(this).attr("id"));
    let u_id = $(this).attr("id");
    //alert(this.id);
    location.href = 'getParamFromUrl.php?new_id=' + u_id;
    //window.location.href="http://www.baidu.com";
})

</script>
