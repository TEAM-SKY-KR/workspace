<?php
session_start();
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
<!--    메뉴 배경 색상-->
<style>
    .navbar {
        background-color: #4174B9;
    }
</style>

<nav class="navbar navbar-expand-lg" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/w/user">
            <span class="fw-bolder text-light">위드 대구</span>
        </a>
        <button class="navbar-toggler fw-bolder text-white rounded" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto fs-5 fw-normal">  <!-- ms-auto: 오른쪽 정렬 / fs-5: 글씨 크기 -->
                <?php
                if (isset($_SESSION["username"]) == true) {
                    ?>
<!--                    <li class="nav-item py-2 px-2"><a class="nav-link py-3 rounded text-light"-->
<!--                                                      href="http://localhost/w/user">-->
<!--                            <i class="fas fa-home"></i>-->
<!--                            <span>메인</span>-->
<!--                        </a>-->
<!--                    </li>-->
                    <li class="nav-item py-2 px-2">
                        <a class="nav-link py-3 text-light" href="#">
                            <span>[<?= $_SESSION["username"] ?>]님</span>
                        </a>
                    </li>
<!--                    <input type="file" accept="image/*" capture="camera">-->
                    <li class="nav-item py-2 px-2">
                        <a class="nav-link py-3 text-light" href="http://localhost/w/user/tourlist/tourlist.php?page=1">
                            <i class="fas fa-map-marked-alt"></i>
                            <span>관광지</span>
                        </a>
                    </li>
                    <li class="nav-item py-2 px-2">
                        <a class="nav-link py-3 text-light" href="#"
                           onclick="window.open('http://localhost/w/user/stamp/stamp.php', 'z','width=500, height=500'); return false">
                            <i class="fas fa-stamp"></i>
                            <span>스탬프 적립</span>
                        </a>
                    </li>
                    <li class="nav-item py-2 px-2">
                        <a class="nav-link py-3 text-light" href="http://localhost/w/user/member/logout/user_logout.php">
                            <i class="fas fa-user-check"></i>
                            <span>로그아웃</span>
                        </a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item py-2 px-2">
                        <a class="nav-link py-3 text-light" href="http://localhost/w/user/member/login/user_login.php">
                            <i class="fas fa-user-check"></i>
                            <span>로그인</span>
                        </a>
                    </li>
                    <?php
                }
                ?>

                <!--                <li class="nav-item py-2 px-2"><a class="nav-link py-3 text-light" href="#">-->
                <!--                        <i class="fas fa-store"></i>-->
                <!--                        <span>주변 식당</span>-->
                <!--                    </a>-->
                <!--                </li>-->
            </ul>
        </div>
    </div>
</nav>
