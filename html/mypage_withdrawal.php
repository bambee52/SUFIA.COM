<?php header("Content-Type:text/html;charset=utf-8"); ?>

<?php
    session_start();
    include "connectdb.php";

    $sql = "DELETE FROM user WHERE id='".$_SESSION['id']."'";
    $res = mysqli_query($con, $sql);

    session_destroy();
?>

<script>
    alert('회원 탈퇴를 완료하였습니다.');
    location.replace("index.php");
</script>
