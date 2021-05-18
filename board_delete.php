<?php

$page = $_GET["page"];
$num = $_GET["num"];
$file_path = $_GET["file_path"];

$con = mysqli_connect("localhost", "dudck1567", "aodnrndrma12!", "dudck1567");
$sql = "delete from mobboard where num='$num'";
mysqli_query($con, $sql);
mysqli_close($con);

if ($file_path) {
    unlink($file_path);
}


echo "
    <script>
        location.href = 'board_list.php?page=$page';
    </script>
";



?>