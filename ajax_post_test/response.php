<?php
/**
 * Php字符串连接--->>用"."
 * Php返回值--->>echo
 */
    $student = $_POST['student'];
    $response = "PHP开始<br>";
    $response .= $student["name"];
    $response .= $student["age"];
    $response .= $student["gender"];
    $response .= "<br>PHP结束";
    echo $response;