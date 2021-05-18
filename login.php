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
    <title>로그인 :: 누네안과병원</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/nune144.ico">
    <link rel="apple-touch-icon" href="./images/nune144.png">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
 
</head>
<body>
    <div id="wrap">
        <?php include 'header.php'; ?>
        <section class="loginPage">
            <div class="loginContent">
                <h2>로그인</h2>
                <form action="login_ok.php" method="post" name="login">
                <p>
                    <label for="id">아이디</label>
                    <input type="text" id="id" name="id">
                </p>
                <p>
                    <label for="pw">비밀번호</label>
                    <input type="password" id="pw" name="pw">
                </p>
                <p>
                    <button type="button" onclick="chk_input()">확인</button>
                </p>
                </form>
            </div>
        </section>
        <?php include 'footer.php'; ?>
    </div>

    <div id="onlyMobile">
        이 사이트는 768px 이하 화면에서만 보입니다.
    </div>
    <script src="./js/asan.js"></script>
    <script>
       function chk_input(){
           if(!document.login.id.value){
               alert("아이디를 입력하세요.");
               document.login.id.focus();
               return false;
           }
           if(!document.login.pw.value){
               alert("비밀번호를 입력하세요.");
               document.login.pw.focus();
               return false;
           }
           document.login.submit();
       }
    </script>
</body>
</html>