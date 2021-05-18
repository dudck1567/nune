<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://dudck1567.dothome.co.kr">
    <meta property="og:image" content="./images/nunebiglogo.png">  
    <meta property="og:type" content="website">  
    <meta property="og:site_name" content="누네안과병원">  
    <meta property="og:locale" content="ko">  
    <meta property="og:title" content="누네안과병원">  
    <meta property="og:description" content="누네안과병원을 소개하는 글">  
    <title>의료진안내 :: 누네안과병원</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/nune144.ico">
    <link rel="apple-touch-icon" href="./images/nune144.png">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
 
</head>
<body>
    <div id="wrap">
        <?php include 'header.php'; ?>
        <section class="medicalListPage">
            <div class="medicalListContent">
                <h2 class="pageTitle">
                    <a href="#none" onclick="goprev()"> 
                       <img src="./images/img_prev.png" alt="이전페이지">
                    </a>의료진안내
                </h2>
                <ul class="partList">
                    <li><a href="part1.php">안과센터</a></li>
                    <li><a href="part2.php">녹내장센터</a></li>
                    <li><a href="#">백내장센터</a></li>
                    <li><a href="#">망막센터</a></li>
                    <li><a href="#">성형안과센터</a></li>
                    <li><a href="#">사시·소아안과센터(서울)</a></li>
                    <li><a href="#">드림센터(대구)</a></li>
                    <li><a href="#">각막센터</a></li>
                    <li><a href="#">시력교정센터</a></li>
                    <li><a href="#">콘텍트렌즈센터</a></li>
                </ul>
            </div>
        </section>
        <?php include 'footer.php'; ?>
    </div>

    <div id="onlyMobile">
        이 사이트는 768px 이하 화면에서만 보입니다.
    </div>
    <script src="./js/asan.js"></script>
    <script src="./js/part.js"></script>
 
</body>
</html>