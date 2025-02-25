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
//applicant_id-申请人applicant表id
$applicant_id = $_POST['applicant_id'];
$applicant_info = connect_mysql()->query("SELECT * FROM pinkunrending.applicants WHERE id='$applicant_id'")->fetch_all(MYSQLI_ASSOC);
$applicant_name = $applicant_info[0]['user_name'];
$applicant_class = $applicant_info[0]['user_class'];
//question1-家庭贫困程度
//question2-勤俭节约情况
//question3-学习态度
//question4-思想品德表现
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];

// 定义字母与分数的映射关系
$scoreMapping = [
    'A' => 10,
    'B' => 8,
    'C' => 6,
    'D' => 4,
];

// 初始化总分
$totalScore = 0;

// 计算每个问题的分数并累加到总分
$totalScore += isset($scoreMapping[$question1]) ? $scoreMapping[$question1] : 0;
$totalScore += isset($scoreMapping[$question2]) ? $scoreMapping[$question2] : 0;
$totalScore += isset($scoreMapping[$question3]) ? $scoreMapping[$question3] : 0;
$totalScore += isset($scoreMapping[$question4]) ? $scoreMapping[$question4] : 0;

//session-评定人
session_start();
$judge = $_SESSION['username'];
$judge_class = $_SESSION['class'];
if (isset($_POST['question1']) == false || isset($_POST['question2']) == false || isset($_POST['question3']) == false || isset($_POST['question4']) == false) {
    $data = array(
        'status' => 'error',
        'msg' => '请完成所有评分',
    );
} else {
    //检测是否已经评分
    $sql = connect_mysql()->query("UPDATE pinkunrending.scoringtable set question1 = '$question1',question2 = '$question2',question3 = '$question3',question4 = '$question4',total='$totalScore' WHERE user_poor_class='$applicant_class' AND user_poor='$applicant_name' AND user_judge='$judge' AND user_judge_class='$judge_class'");
    if ($sql > 0) {
        $data = array(
            'status' => 'success',
            'msg' => '评分成功: ' . ' 评定人: ' . $judge . '-' . $judge_class . ' 对 ' . '申请人' . $applicant_name . '-' . $applicant_class . '评分是: ' . $question1 . '-' . $question2 . '-' . $question3 . '-' . '总分' . $totalScore . $question4 . '-影响了' . $sql . '行',
        );
    } else {
        $data = array(
            'status' => 'error',
            'msg' => '评分失败，影响了' . $sql . '行',
        );
    }
}
echo json_encode($data);
?>