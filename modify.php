<!-- create table mobmember(
    num int auto_increment not null,
    id varchar(20) not null,
    pass varchar(20) not null,
    irum varchar(20) not null,
    tel varchar(20),
    primary key(num)
) -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $irum = $_POST["irum"];
    $tel = $_POST["tel"];
    $num = $_GET["num"];


    $con = mysqli_connect('localhost', 'dudck1567', 'aodnrndrma12!', 'dudck1567');
    $sql ="update mobmember set id='$id', pass='$pw', irum='$irum', tel='$tel' where num='$num'";
    // 정보수정 update 테이블명 set 수정목록
    mysqli_query($con, $sql);
    mysqli_close($con);

    session_start();
    $_SESSION["userid"] = $id;
    $_SESSION["username"] = $irum;
   
    echo "<script> location.href = 'index.php' </script>";
?>
</body>
</html>
