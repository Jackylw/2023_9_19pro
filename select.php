<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>查询</title>
    <link href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/css/quick-website.css" id="stylesheet" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container d-flex flex-column animate__animated animate__fadeIn">
    <div class="row align-items-center justify-content-center min-vh-100">
        <div class="col-md-10 col-lg-10 col-xl-10 py-10 py-md-8">
            <div id="accordion-2" class="accordion accordion-spaced">
                <!-- 22301班 -->
                <div class="card">
                    <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button"
                         data-target="#collapse-2-1" aria-expanded="false" aria-controls="collapse-2-1">
                        <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>22301班评定成员</h6>
                    </div>
                    <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1" data-parent="#accordion-2">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">姓名</th>
                                <th scope="col">班级</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once 'function.php';
                            $userInfo_22301 = connect_mysql()->query("select * from pinkunrending.logintable where class='22301'")->fetch_all(MYSQLI_ASSOC);
                            for ($i = 0; $i < count($userInfo_22301); $i++) {
                                $temp = $i + 1;
                                echo "<tr>";
                                echo "<th scope='row'>" . "{$temp}" . "</th>";
                                echo "<td>" . "{$userInfo_22301[$i]['username']}" . "</td>";
                                echo "<td>" . "{$userInfo_22301[$i]['class']}" . "</td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- 22302班 -->
                <div class="card">
                    <div class="card-header py-4" id="heading-2-2" data-toggle="collapse" role="button"
                         data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                        <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>22302班评定成员</h6>
                    </div>
                    <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-2">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">姓名</th>
                                <th scope="col">班级</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once 'function.php';
                            $userInfo_22302 = connect_mysql()->query("select * from pinkunrending.logintable where class='22302'")->fetch_all(MYSQLI_ASSOC);
                            for ($i = 0; $i < count($userInfo_22302); $i++) {
                                $temp = $i + 1;
                                echo "<tr>";
                                echo "<th scope='row'>" . "{$temp}" . "</th>";
                                echo "<td>" . "{$userInfo_22302[$i]['username']}" . "</td>";
                                echo "<td>" . "{$userInfo_22302[$i]['class']}" . "</td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- 22303班 -->
                <div class="card">
                    <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button"
                         data-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                        <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>22303班评定成员</h6>
                    </div>
                    <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3" data-parent="#accordion-2">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">姓名</th>
                                <th scope="col">班级</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once 'function.php';
                            $userInfo_22303 = connect_mysql()->query("select * from pinkunrending.logintable where class='22303'")->fetch_all(MYSQLI_ASSOC);
                            for ($i = 0; $i < count($userInfo_22303); $i++) {
                                $temp = $i + 1;
                                echo "<tr>";
                                echo "<th scope='row'>" . "{$temp}" . "</th>";
                                echo "<td>" . "{$userInfo_22303[$i]['username']}" . "</td>";
                                echo "<td>" . "{$userInfo_22303[$i]['class']}" . "</td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- 22304班 -->
                <div class="card">
                    <div class="card-header py-4" id="heading-2-4" data-toggle="collapse" role="button"
                         data-target="#collapse-2-4" aria-expanded="false" aria-controls="collapse-2-4">
                        <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>22304班评定成员</h6>
                    </div>
                    <div id="collapse-2-4" class="collapse" aria-labelledby="heading-2-4" data-parent="#accordion-2">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">姓名</th>
                                <th scope="col">班级</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once 'function.php';
                            $userInfo_22304 = connect_mysql()->query("select * from pinkunrending.logintable where class='22304'")->fetch_all(MYSQLI_ASSOC);
                            for ($i = 0; $i < count($userInfo_22304); $i++) {
                                $temp = $i + 1;
                                echo "<tr>";
                                echo "<th scope='row'>" . "{$temp}" . "</th>";
                                echo "<td>" . "{$userInfo_22304[$i]['username']}" . "</td>";
                                echo "<td>" . "{$userInfo_22304[$i]['class']}" . "</td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- 22305班 -->
                <div class="card">
                    <div class="card-header py-4" id="heading-2-5" data-toggle="collapse" role="button"
                         data-target="#collapse-2-5" aria-expanded="false" aria-controls="collapse-2-5">
                        <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>22305班评定成员</h6>
                    </div>
                    <div id="collapse-2-5" class="collapse" aria-labelledby="heading-2-5" data-parent="#accordion-2">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">姓名</th>
                                <th scope="col">班级</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once 'function.php';
                            $userInfo_22305 = connect_mysql()->query("select * from pinkunrending.logintable where class='22305'")->fetch_all(MYSQLI_ASSOC);
                            for ($i = 0; $i < count($userInfo_22305); $i++) {
                                $temp = $i + 1;
                                echo "<tr>";
                                echo "<th scope='row'>" . "{$temp}" . "</th>";
                                echo "<td>" . "{$userInfo_22305[$i]['username']}" . "</td>";
                                echo "<td>" . "{$userInfo_22305[$i]['class']}" . "</td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/svg-injector/dist/svg-injector.min.js"></script>
<script src="assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="assets/js/quick-website.js"></script>
</body>
</html>