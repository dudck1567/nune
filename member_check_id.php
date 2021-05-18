<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 중복체크</title>
</head>
<body>
    <h3>아이디 중복체크</h3>
    <p>
        <?php 
            $id = $_GET["id"];

            if(!$id){
                echo "아이디를 입력해주세요.";
            } else{
                $con = mysqli_connect("localhost","dudck1567","aodnrndrma12!","dudck1567");
                $sql = "select * from mobmember where id='$id'";
                $result = mysqli_query($con, $sql);
                $num_record = mysqli_num_rows($result);
                
                if ($num_record){
                    echo "{$id}는 중복된 아이디입니다.<br>다른 아이디를 사용해주세요.";
                } else{
                    echo "{$id}는 사용 가능한 아이디입니다.";
                }
    
                mysqli_close($con);
            }
           
        ?>
    </p>

    <div id="close">
        <a href="#none" onclick="window.close()">닫기</a> <!-- onclick="javascript:window/self.close()"도 가능 -->
    </div>
</body>
</html>