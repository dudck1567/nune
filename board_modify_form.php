<!DOCTYPE html>
<html lang="en">
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
    <title>누네안과병원</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/nune144.ico">
    <link rel="apple-touch-icon" href="./images/nune144.png">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
 
</head>
<body>
    
    <div id="wrap">

        <?php include 'header.php'; ?>

         <section class="boardPage">
            <div class="boardContent">
                <h2>자유게시판 > 글쓰기</h2>
                <?php 
                    $num = $_GET["num"];
                    $page = $_GET["page"];

                    $con = mysqli_connect("localhost", "dudck1567", "aodnrndrma12!", "dudck1567");
                    $sql = "select * from mobboard where num='$num'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    $subject = $row["subject"];
                    $content = $row["content"];
                    $file_name = $row["file_name"];
                ?>

                <form action="board_modify.php?num=<?=$num?>&page=<?=$page?>" name="board_form" method="post" enctype="multipart/form-data">
                <ul id="board_form">
                    <li>
                        <span>작성자 : </span>
                        <span>
                            <?=$username?>
                        </span>
                    </li>
                    <li>
                        <span><label for="irum">제목</label> : </span>
                        <span>
                            <input type="text" name="subject" id="irum" value="<?=$subject?>">
                        </span>
                    </li>
                    <li>
                        <span><label for="cont">내용</label> : </span>
                        <span>
                            <textarea name="content" id="cont"><?=$content?></textarea>
                        </span>
                    </li>
                    <li>
                        <span><label for="attach">첨부파일</label> : </span>
                        <span>
                            <?=$file_name?>
                        </span>
                    </li>
                </ul>
                <div class="buttons">
                    <button type="button" onclick="check_input()">수정</button>
                    <button type="button" onclick="location.href='board_list.php?page=<?=$page?>'">목록</button>
                </div>
                </form>
            </div>
        </section>

        <?php include 'footer.php'; ?>

    </div>


    <div id="onlyMobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="./js/asan.js"></script>
    <script>
        function check_input() {
            if ( !document.board_form.subject.value ) {
                alert("제목을 입력하세요!");
                document.board_form.subject.focus();
                return false;
            }
            if ( !document.board_form.content.value ) {
                alert("내용을 입력하세요!");
                document.board_form.content.focus();
                return false;
            }
            document.board_form.submit();
        }
    </script>
</body>
</html>