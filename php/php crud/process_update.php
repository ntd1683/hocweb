<?php
$code = $_POST['code'];
$name = empty($_POST['name']) ? 'Bạn chưa nhập tên ' : $_POST['name'];
$sex = empty($_POST['sex'])? 'Bạn chưa tích giới tính' : $_POST['sex'];
$email = empty($_POST['email'])? 'Bạn chưa nhập email' : $_POST['email'];
$picture = empty($_POST['picture']) ? 'Bạn chưa nhập mật khẩu' : $_POST['picture'];
$date = $_POST['date'];
$adress = empty($_POST['adress'])?'Bạn chưa nhập địa chỉ ' : $_POST['adress'];
$subject = $_POST['subject'];
if ($subject=='subject1'){
    $subject='Coi Phim';
}
else if($subject=='subject2'){
    $subject='Chụp ảnh';
}
else{
    $subject='Xem stream';
}

require_once './asset/php/connect.php';

$sql_update="update info_model set
name='$name',
sex='$sex',
email='$email',
link_picture='$picture',
date='$date',
adress='$adress',
subject='$subject'
where
code='$code'";

mysqli_query($connect, $sql_update);

$error = mysqli_error($connect);
echo $error;

// close 

mysqli_close($connect);
?>