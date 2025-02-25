<?php
header("Content-type:text/html;charset=utf-8");
require_once('function.php');
session_start();
if (isset($_SESSION['username']) == false || isset($_SESSION['class']) == false) {
    echo "<script>alert('请先登录');window.location.href='login.html'</script>";
}
$username = $_SESSION['username'];
$class = $_SESSION['class'];
if (connect_mysql()->query("SELECT * FROM pinkunrending.logintable WHERE username='$username' AND class='$class'")->num_rows == 0) {
    echo "<script>alert('登录信息有误，请重新登录');window.location.href='login.html'</script>";
}
?>
<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>打分表</title>
    <link href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/css/quick-website.css" id="stylesheet" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand">
            <h3>当前用户:网络工程<?php echo $class . '班 ' . $username ?></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="docs-example">
            <div class="btn-group">
                <div class="btn btn-sm">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3"
                                   onclick="loginOut()" style="color: whitesmoke">
                                    登出
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</nav>

<div class="animate__animated animate__fadeIn"
     style="display: flex;justify-content: center;align-items: center;margin-top: 5%">

    <div class="card shadow-lg border-0" style="width:65%">
        <div class="card-body px-5 py-5 text-center text-md-left">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h5 class="mb-2">评定对象</h5>
                    <select class="custom-select" id="applicant_selected">
                        <?php
                        $applicants_info = connect_mysql()->query("SELECT * FROM pinkunrending.applicants order by user_class asc ")->fetch_all(MYSQLI_ASSOC);
                        $temp1 = 0;
                        foreach ($applicants_info as $applicant_info) {
                            $temp1++;
                            echo '<option value="' . $applicant_info['id'] . '">' . $temp1 . '-' . $applicant_info['user_name'] . $applicant_info['user_class'] . '</option>';
                        }
                        ?>
                    </select>
                    <br><br>
                    <h5 class="mb-2">评分项目<span>（A，10分；B，8分；C，6分；D，4分）</span></h5>
                    <p>家庭贫困程度</p>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question1A" name="customRadioInline1" class="custom-control-input"
                               value="A">
                        <label class="custom-control-label" for="question1A">A</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question1B" name="customRadioInline1" class="custom-control-input"
                               value="B">
                        <label class="custom-control-label" for="question1B">B</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question1C" name="customRadioInline1" class="custom-control-input"
                               value="C">
                        <label class="custom-control-label" for="question1C">C</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question1D" name="customRadioInline1" class="custom-control-input"
                               value="D">
                        <label class="custom-control-label" for="question1D">D</label>
                    </div>
                    <p>勤俭节约情况</p>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question2A" name="customRadioInline2" class="custom-control-input"
                               value="A">
                        <label class="custom-control-label" for="question2A">A</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question2B" name="customRadioInline2" class="custom-control-input"
                               value="B">
                        <label class="custom-control-label" for="question2B">B</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question2C" name="customRadioInline2" class="custom-control-input"
                               value="C">
                        <label class="custom-control-label" for="question2C">C</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question2D" name="customRadioInline2" class="custom-control-input"
                               value="D">
                        <label class="custom-control-label" for="question2D">D</label>
                    </div>
                    <p>学习态度</p>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question3A" name="customRadioInline3" class="custom-control-input"
                               value="A">
                        <label class="custom-control-label" for="question3A">A</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question3B" name="customRadioInline3" class="custom-control-input"
                               value="B">
                        <label class="custom-control-label" for="question3B">B</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question3C" name="customRadioInline3" class="custom-control-input"
                               value="C">
                        <label class="custom-control-label" for="question3C">C</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question3D" name="customRadioInline3" class="custom-control-input"
                               value="D">
                        <label class="custom-control-label" for="question3D">D</label>
                    </div>
                    <p>思想品德表现</p>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question4A" name="customRadioInline4" class="custom-control-input"
                               value="A">
                        <label class="custom-control-label" for="question4A">A</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question4B" name="customRadioInline4" class="custom-control-input"
                               value="B">
                        <label class="custom-control-label" for="question4B">B</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question4C" name="customRadioInline4" class="custom-control-input"
                               value="C">
                        <label class="custom-control-label" for="question4C">C</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="question4D" name="customRadioInline4" class="custom-control-input"
                               value="D">
                        <label class="custom-control-label" for="question4D">D</label>
                    </div>
                </div>
                <div style="margin: 0 auto">
                    <button type="button" class="btn btn-primary" onclick="submitsto()">
                        提交
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="accordion-2" class="accordion accordion-spaced" style="width: 65%;margin: 0 auto;">
    <div class="card">
        <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button" data-target="#collapse-2-1"
             aria-expanded="false" aria-controls="collapse-2-1">
            <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>您的填写情况一览表(刷新页面更新)</h6>

        </div>
        <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1" data-parent="#accordion-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">申请人</th>
                        <th scope="col">申请人班级</th>
                        <th scope="col">评分1</th>
                        <th scope="col">评分2</th>
                        <th scope="col">评分3</th>
                        <th scope="col">评分4</th>
                    </tr>
                    </thead>
                    <tbody id="table_data">
                    <?php
                    require_once 'function.php';
                    $scoring_info = connect_mysql()->query("select * from pinkunrending.scoringtable where user_judge='$username' and user_judge_class='$class'")->fetch_all(MYSQLI_ASSOC);
                    for ($i = 0; $i < count($scoring_info); $i++) {
                        $temp = $i + 1;
                        echo "<tr>";
                        echo "<th scope='row'>" . "{$temp}" . "</th>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question1']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question2']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question3']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question4']}" . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/svg-injector/dist/svg-injector.min.js"></script>
<script src="assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="assets/js/quick-website.js"></script>
<script>
    feather.replace({
        'width': '1em',
        'height': '1em'
    })

    function loginOut() {
        window.location.href = 'loginout.php';
    }

    function submitsto() {
        var applicant_id = document.getElementById('applicant_selected').value;
        var question1 = $('input[name="customRadioInline1"]:checked').val();
        var question2 = $('input[name="customRadioInline2"]:checked').val();
        var question3 = $('input[name="customRadioInline3"]:checked').val();
        var question4 = $('input[name="customRadioInline4"]:checked').val();
        if (question1 == undefined || question2 == undefined || question3 == undefined || question4 == undefined) {
            alert('请完成所有题目');
            return false;
        }
        console.log(applicant_id);
        console.log(question1, question2, question3, question4);
        $.ajax({
            url: 'scoringsql.php',
            type: 'post',
            data: {
                applicant_id: applicant_id,
                question1: question1,
                question2: question2,
                question3: question3,
                question4: question4
            },
            success: function (data) {
                if (data.status === 'success') {
                    alert(data.msg);
                } else if (data.status === 'error') {
                    alert(data.msg);
                } else {
                    alert('未知错误');
                }
            },
        })
    }
</script>
</div>
</body>
</html>