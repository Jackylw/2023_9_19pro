<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/css/quick-website.css" id="stylesheet" rel="stylesheet">
</head>
<body>
<div id="accordion-2" class="accordion accordion-spaced" style="width: 65%;margin: 0 auto;margin-top: 5%">
    <div class="card">
        <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button" data-target="#collapse-2-1"
             aria-expanded="false" aria-controls="collapse-2-1">
            <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>网络工程22301班申请人评分总表</h6>
        </div>
        <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1" data-parent="#accordion-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">申请人</th>
                        <th scope="col">申请人班级</th>
                        <th scope="col">评定人</th>
                        <th scope="col">评定人班级</th>
                        <th scope="col">评分1</th>
                        <th scope="col">评分2</th>
                        <th scope="col">评分3</th>
                        <th scope="col">评分4</th>
                        <th scope="col">总分</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once 'function.php';
                    $scoring_info = connect_mysql()->query("select * from pinkunrending.scoringtable where user_poor_class='22301'")->fetch_all(MYSQLI_ASSOC);
                    for ($i = 0; $i < count($scoring_info); $i++) {
                        $temp = $i + 1;
                        echo "<tr>";
                        echo "<th scope='row'>" . "{$temp}" . "</th>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question1']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question2']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question3']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question4']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['total']}" . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header py-4" id="heading-2-2" data-toggle="collapse" role="button" data-target="#collapse-2-2"
             aria-expanded="false" aria-controls="collapse-2-2">
            <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>网络工程22302班申请人评分总表</h6>
        </div>
        <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">申请人</th>
                        <th scope="col">申请人班级</th>
                        <th scope="col">评定人</th>
                        <th scope="col">评定人班级</th>
                        <th scope="col">评分1</th>
                        <th scope="col">评分2</th>
                        <th scope="col">评分3</th>
                        <th scope="col">评分4</th>
                        <th scope="col">总分</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once 'function.php';
                    $scoring_info = connect_mysql()->query("select * from pinkunrending.scoringtable where user_poor_class='22302'")->fetch_all(MYSQLI_ASSOC);
                    for ($i = 0; $i < count($scoring_info); $i++) {
                        $temp = $i + 1;
                        echo "<tr>";
                        echo "<th scope='row'>" . "{$temp}" . "</th>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question1']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question2']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question3']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question4']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['total']}" . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button" data-target="#collapse-2-3"
             aria-expanded="false" aria-controls="collapse-2-3">
            <h6 class="mb-0"><i data-feather="folder" class="mr-3"></i>网络工程22303班申请人评分总表</h6>
        </div>
        <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3" data-parent="#accordion-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">申请人</th>
                        <th scope="col">申请人班级</th>
                        <th scope="col">评定人</th>
                        <th scope="col">评定人班级</th>
                        <th scope="col">评分1</th>
                        <th scope="col">评分2</th>
                        <th scope="col">评分3</th>
                        <th scope="col">评分4</th>
                        <th scope="col">总分</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once 'function.php';
                    $scoring_info = connect_mysql()->query("select * from pinkunrending.scoringtable where user_poor_class='22303'")->fetch_all(MYSQLI_ASSOC);
                    for ($i = 0; $i < count($scoring_info); $i++) {
                        $temp = $i + 1;
                        echo "<tr>";
                        echo "<th scope='row'>" . "{$temp}" . "</th>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question1']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question2']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question3']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question4']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['total']}" . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header py-4" id="heading-2-4" data-toggle="collapse" role="button" data-target="#collapse-2-4"
             aria-expanded="false" aria-controls="collapse-2-4">
            <h6 class="mb-0"><i data-feather="folder" class="mr-3"></i>网络工程22304班申请人评分总表</h6>
        </div>
        <div id="collapse-2-4" class="collapse" aria-labelledby="heading-2-4" data-parent="#accordion-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">申请人</th>
                        <th scope="col">申请人班级</th>
                        <th scope="col">评定人</th>
                        <th scope="col">评定人班级</th>
                        <th scope="col">评分1</th>
                        <th scope="col">评分2</th>
                        <th scope="col">评分3</th>
                        <th scope="col">评分4</th>
                        <th scope="col">总分</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once 'function.php';
                    $scoring_info = connect_mysql()->query("select * from pinkunrending.scoringtable where user_poor_class='22304'")->fetch_all(MYSQLI_ASSOC);
                    for ($i = 0; $i < count($scoring_info); $i++) {
                        $temp = $i + 1;
                        echo "<tr>";
                        echo "<th scope='row'>" . "{$temp}" . "</th>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question1']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question2']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question3']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question4']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['total']}" . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header py-4" id="heading-2-5" data-toggle="collapse" role="button" data-target="#collapse-2-5"
             aria-expanded="false" aria-controls="collapse-2-5">
            <h6 class="mb-0"><i data-feather="folder" class="mr-3"></i>网络工程22305班申请人评分总表</h6>
        </div>
        <div id="collapse-2-5" class="collapse" aria-labelledby="heading-2-5" data-parent="#accordion-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">申请人</th>
                        <th scope="col">申请人班级</th>
                        <th scope="col">评定人</th>
                        <th scope="col">评定人班级</th>
                        <th scope="col">评分1</th>
                        <th scope="col">评分2</th>
                        <th scope="col">评分3</th>
                        <th scope="col">评分4</th>
                        <th scope="col">总分</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    require_once 'function.php';
                    $scoring_info = connect_mysql()->query("select * from pinkunrending.scoringtable where user_poor_class='22305'")->fetch_all(MYSQLI_ASSOC);
                    for ($i = 0; $i < count($scoring_info); $i++) {
                        $temp = $i + 1;
                        echo "<tr>";
                        echo "<th scope='row'>" . "{$temp}" . "</th>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_poor_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['user_judge_class']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question1']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question2']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question3']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['question4']}" . "</td>";
                        echo "<td>" . "{$scoring_info[$i]['total']}" . "</td>";
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
</script>
</body>
</html>
<?php
?>