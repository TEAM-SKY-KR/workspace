<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <?php
    include_once "../front/base/b_header.php"
    ?>

<!--    메뉴 배경 색상-->
    <style>
        .navbar {
            background-color: #4174B9;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
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
                <li class="nav-item py-2 px-2"><a class="nav-link py-3 rounded text-light" href="index.php">
                        <i class="fas fa-home"></i>
                        <span>메인</span>
                    </a>
                </li>
                <li class="nav-item py-2 px-2">
                    <a class="nav-link py-3 text-light" href="tourlist.html">
                        <i class="fas fa-map-marked-alt"></i>
                        <span>관광지</span>
                    </a>
                </li>
                <li class="nav-item py-2 px-2">
                    <a class="nav-link py-3 text-light" href="#">
                        <i class="fas fa-stamp"></i>
                        <span>스탬프 적립</span>
                    </a>
                </li>
                <li class="nav-item py-2 px-2"><a class="nav-link py-3 text-light" href="#">
                        <i class="fas fa-store"></i>
                        <span>주변 식당</span>
                    </a>
                </li>
                <li class="nav-item py-2 px-2">
                    <a class="nav-link py-3 text-light" href="login.html">
                        <i class="fas fa-user-check"></i>
                        <span>로그인</span>
                    </a>
                </li>
                <li class="nav-item py-2 px-2"><a class="nav-link py-3 text-light" href="#">
                        <i class="fas fa-search px-1"></i>
                        <span>검색</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>