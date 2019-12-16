<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php

session_start();
include("connectdb.php");

$id = $_POST['id'];
$pw = $_POST['pw'];

$query = "select * from user where id = '$id' and pw = '$pw'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($id==$row['id'] && $pw==$row['pw']){ // id와 pw가 맞다면 login
    $_SESSION['id'] = $row['id'];

    echo("<a href = 'index.php?id=$id'>");
    echo "<script>location.href = 'index.php';</script>";
}else{
    echo"<script>window.alert('잘못된 아이디 또는 비밀번호입니다.');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
    echo "<script>location.href='index.php';</script>";
}

?>
