<?php
$name = empty($_POST['name']) ? 'Bạn chưa nhập tên ' : $_POST['name'];
$sex = empty($_POST['sex'])? 'Bạn chưa tích giới tính' : $_POST['sex'];
$email = empty($_POST['email'])? 'Bạn chưa nhập email' : $_POST['email'];
$picture = empty($_POST['picture']) ? 'Bạn chưa nhập mật khẩu' : $_POST['picture'];
$date = $_POST['date'];
// if($date_check==''){
//     $date='';
// }
// else{
//     $date=date('d/m/Y',strtotime($date_check));
// }
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

$connect = mysqli_connect('localhost','root','','j2school');
mysqli_set_charset($connect,'utf8');

$sql="insert into info_model(name,sex,email,link_picture,date,adress,subject)
value('$name','$sex','$email','$picture','$date','$adress','$subject')";

mysqli_query($connect, $sql);

$error = mysqli_error($connect);
echo $error;

// close 

mysqli_close($connect);
?>