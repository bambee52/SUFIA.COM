<?php header("Content-Type:text/html;charset=utf-8"); ?>

<?php
session_start();
include("connectdb.php");

$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'].'@'.$_POST['emadress'];

$sql ="UPDATE user SET pw='{$pw}', name='{$name}', email='{$email}' WHERE id='{$_SESSION['id']}'";
$res = mysqli_query($con, $sql);

?>

<script type="text/javascript">
    alert("회원 정보 수정이 완료되었습니다.");
</script>
<script>
    location.href = 'index.php';
</script>

