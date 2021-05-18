<?php
    session_start();
    if(isset($_SESSION["userid"])){
        $userid = $_SESSION["userid"];
    } else{
        $userid = "";
    }
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    } else{
        $username = "";
    }
?>

<header id="header">
            <div class="inner">
                 <div id="lnb_menu" class="lnb_menu">
                      <i class="fas fa-bars"></i>
                 </div>
                 <div id="navWrap">
                     <nav id="lnb">
                         <div class="member">
                            <?php 
                                if( !$userid ){
                            ?>
                            
                            <div class="inBtn loginBtn"><a href="login.php">로그인</a></div>
                            <div class="inBtn joinBtn"><a href="join.php">회원가입</a></div>

                            <?php
                                } else{
                                    $logged = $username."(".$userid.") 님<br>환영합니다. <br>";
                            ?>
                           
                                 <div class="inBtn loginBtn"><a href="logout.php"><?=$logged?>로그아웃</a></div>
                                 <div class="inBtn joinBtn"><a href="join_modify.php">정보수정</a></div>
                                <?php
                                }
                            ?>

                         </div>
                         <ul class="menuBox">
                            <li><a href="map.php">병원안내</a></li>
                            <li><a href="medicalList.php" class="part1">전문센터</a></li>
                            <li><a href="board_list.php">고객만족</a></li>
                            <li><a href="#">상담/예약</a></li>
                        </ul>
            
                        <div id="lnb_close" class="lnb_close">
                            <i class="fas fa-times"></i>
                        </div>
                    </nav>
                </div>
                <h1 class="logo">
                    <a href="index.php"><img src="images/logo.jpg" alt="누네안과병원"></a>
                </h1>
                <div class="search">
                    <a href="#"><i class="fas fa-search"></i></a>
                </div>
           </div>
</header>
