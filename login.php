<?php
header("Content-type:application/json;charset=utf-8");
require_once('function.php');
if (connect_mysql()->connect_error) {
    $data = array(
        'status' => 'error',
        'msg' => '数据库连接失败',
    );
    echo json_encode($data);
    exit();
}
$username = $_POST['username'];
$class = $_POST['class'];
if(isset($_POST['username'])==false||isset($_POST['class'])==false){
    $data = array(
        'status' => 'error',
        'msg' => '用户名或班级不能为空',
    );
}else{
    if (connect_mysql()->query("SELECT * FROM pinkunrending.logintable WHERE username='$username' AND class='$class'")->num_rows > 0) {
        $data = array(
            'status' => 'success',
            'msg' => '登录成功',
        );
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['class'] = $class;
    } else {
        $data = array(
            'status' => 'error',
            'msg' => '用户名或班级错误,请查看评定成员表',
        );
    }
}
echo json_encode($data);
?>