<?php header("Content-Type:text/html;charset=utf-8"); ?>

<?php
include("connectdb.php");

$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'].'@'.$_POST['emadress'];

$sql = "SELECT * FROM user WHERE id = '{$id}'";
$res = mysqli_query($con, $sql);
if($res->num_rows >= 1){
    echo '이미 존재하는 아이디가 있습니다. 다른 아이디를 사용해 주세요.';
    exit;
}

if($name == '' | $id =='' | $pw == ''| $email == ''){
    echo '모든 정보를 입력해 주세요.';
    exit;
}

$sql2 = "INSERT INTO user VALUES('{$id}','{$pw}', '{$name}', '{$email}');";
mysqli_query($con, $sql2) or die(mysql_error($con));

?>

<script type="text/javascript">alert("회원 가입이 완료되었습니다!!");</script>
<script>location.href='index.php';</script>
