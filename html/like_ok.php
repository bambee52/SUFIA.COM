<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
 session_start();
    include("connectdb.php");

    $title = $_POST['title'];
    $img = $_POST['img'];
    $id = $_SESSION['id'];

    $sql = "insert into user_like values('$id', '$title', '$img')";
    $res = mysqli_query($con, $sql);
    //$row = mysqli_fetch_array($res);
?>

<script type="text/javascript">alert("찜한 식물에 저장되었습니다.");</script>
<script>location.href='total_plants.php';</script>
