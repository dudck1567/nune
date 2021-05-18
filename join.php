<!DOCTYPE html>
<html lang="ko">
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
    <title>회원가입 :: 누네안과병원</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/nune144.ico">
    <link rel="apple-touch-icon" href="./images/nune144.png">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
 
</head>
<body>
    <div id="wrap">
        <?php include 'header.php'; ?>
        <section class="joinPage">
            <div class="joinContent" class="joinContent">
                <h2>회원가입</h2>
                <form name=member_form action="member_insert.php" method="post">
                    <p>
                        <label for="id">아이디</label>
                        <input type="text" id="id" name="id">
                        <a id="idchk" href="#none" onclick="check_id()">중복확인</a>
                    </p>

                    <p><label for="pw">비밀번호</label><input type="password" id="pw" name="pw"></p>
                    <p><label for="pwok">비밀번호 확인</label><input type="password" id="pwok" name="pwok"></p>
                    <p><label for="irum">이름</label><input type="text" id="irum" name="irum"></p>
                    <p><label for="tel">전화번호</label><input type="text" id="tel" name="tel"></p>
                    <p><button type="button" onclick="chk_input()">가입</button><button type="reset" onclick="chk_reset()">취소</button></p>
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
        function check_id(){
            window.open('member_check_id.php?id='+document.member_form.id.value,'','top=100,left=100,width=200, height=200, scrollbars=no, resizable=yes') // document.폼의 네임.폼의 네임에서 네임 아이디를 가진 아이디.밸류값 // 창파일, 창제목, 창 뜨는 위치
            document.querySelector('#idchk').classList.add('on')
        } 

        function chk_input(){
            if(!document.querySelector('#idchk').classList.contains('on')){
                alert('아이디 중복체크를 해주세요.')
                return false;
            }
            document.member_form.submit();
        }
        function chk_reset(){ // 취소 누르면 전체 텍스트창 비워주기
            document.member_form.id.value ="";
            document.member_form.pw.value ="";
            document.member_form.pwok.value ="";
            document.member_form.irum.value ="";
            document.member_form.tel.value ="";
            document.member_form.id.focus();
            return false;
        }
    </script>
</body>
</html>