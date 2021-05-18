<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://tsalt.dothome.co.kr">
    <meta property="og:image" content="./images/snsicon.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="아산병원">
    <meta property="og:locale" content="ko">
    <meta property="og:title" content="아산병원">
    <meta property="og:description" content="서울아산병원을 소개하는 글">

    <title>로그인 :: 아산병원</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/favicon.ico">  <!-- 주소표시줄 : 파비콘(16*16) -->
    <link rel="apple-touch-icon" href="./images/asan.png">  <!-- 스마트폰 바탕화면 : 바로가기 아이콘(144*144)-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div id="wrap">

        <?php include 'header.php'; ?>

         <section class="mapPage">
            <div class="mapContent">
                <h2>찾아오시는 길</h2>
                <div class="map_all">
                    <ul class="map_title cf">
                        <li class="active"><a href="#none">서울 병원</a></li>
                        <li><a href="#none">대구 병원</a></li>
                    </ul>
                    <div class="map_list">
                        <ul class="seoul active"><li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.1476875364733!2d127.04818471564687!3d37.50443473543922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca41ad37d98b9%3A0x3daa5b3ac5b6156f!2z64iE64Sk7JWI6rO867OR7JuQ!5e0!3m2!1sko!2skr!4v1619092427024!5m2!1sko!2skr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></li></ul>
                    
                        <ul class="daegu"><li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.4050932688765!2d128.59960641561545!3d35.8635884275559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565e23b3c900119%3A0x4852889c4acdf8a0!2z64iE64Sk7JWI6rO867OR7JuQ!5e0!3m2!1sko!2skr!4v1619092539966!5m2!1sko!2skr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></li></ul>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>

    </div>


    <div id="onlyMobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="./js/asan.js"></script>
</body>
</html>