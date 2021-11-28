<?php
$name = empty($_POST['name']) ? 'Bạn chưa nhập tên ' : $_POST['name'];
$sex = empty($_POST['sex'])? 'Bạn chưa tích giới tính' : $_POST['sex'];
$email = empty($_POST['email'])? 'Bạn chưa nhập email' : $_POST['email'];
$password = empty($_POST['password']) ? 'Bạn chưa nhập mật khẩu' : $_POST['Password'];
$date_check = $_POST['date'];
if($date_check==''){
    $date='Bạn chưa nhập ngày sinh';
}
else{
    $date=date('d/m/Y',strtotime($date_check));
}
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./asset/themify-icons/themify-icons.css">
    <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-size: 16px;
    }

    html{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .clear{
        clear: both;
    }

    body{
        background-image: url(./asset/img/background.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    /* form */
    #main{
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center; 
    }
    #container{
        position: relative;
        background: #fff;
        width: 900px;
        max-width: calc( 100% - 32px);
        min-height: 200px;
        border-radius: 20px;
    }

    /* header */
    #header{
        border-radius: 20px 20px 0px 0px;
        background-color: #009688;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #fff;
    }

    .header-margin{
        margin-right: 20px;
    }
    
    /* body */
    #body-container{
        padding: 15px;
    }
    .body-text-header{
        display: block;
        margin-bottom: 8px;
    }

    .input-text{
        border: 1px solid #ccc;
        border-radius: 15px;
        width: 90%;
        padding: 10px;
        font-size: 15px;
        margin-bottom: 15px;
    }
    #input_password{
        position: relative;
    }
    #input_subject{
        border: 1px solid #ccc;
        border-radius: 15px;
        width: 90%;
        padding: 10px;
        font-size: 15px;
        margin-bottom: 10px;
    }
    .input-click{
        opacity: 0.5;
    }
    .input-click:hover{
        opacity: 1;
    }
    .visible-password{
        opacity: 0.8;
    }
    .visible-password:hover{
        position:absolute;
        margin-left: 10px;
        font-size: 30px;
        opacity: 1;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <div id="main">
        <div id="container">
            <div id="header">
                <i class="ti-pencil-alt header-margin"></i>
                Thông tin bạn đã đăng kí
            </div>
            <div id="body-container">
                <form>
                    <label for="input_name" class="body-text-header">Tên</label>
                    <input class="input-text input-click" type="text" id="input_name" value="<?php echo $name;?>" readonly>
                    <br>
                    <label for="input_sex" class="body-text-header">Giới Tính</label>
                    <input class="input-text input-click" type="text" id="input_sex" value="<?php echo $sex;?>" readonly>
                    <br>
                    <label for="input_email" class="body-text-header">Email</label>
                    <input class="input-text input-click" type="email" id="input_email" value="<?php echo $email;?>" readonly>
                    <br>
                    <span id="password">
                        <label for="input_password" class="body-text-header">Mật khẩu</label>
                        <input class="input-text input-click" type="password" id="input_password" value="<?php echo $password;?>" readonly>
                        <i class="ti-eye visible-password" onclick="visible_password()"></i>
                        <br>
                    </span>
                    <label class="body-text-header">Ngày sinh</label>
                    <input class="input-text input-click" type="text" id="input_date" value="<?php echo $date ;?>" readonly>
                    <br>
                    <label for="input_adress" class="body-text-header">Địa chỉ</label>
                    <input class="input-text input-click" type="text" id="input_adress" value="<?php echo $adress;?>" readonly>
                    <br>
                    <label for="input_subject" class="body-text-header">Sở thích</label>
                    <input class="input-text input-click" type="text" id="input_subject" value="<?php echo $subject ;?>" readonly>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <script>
    window.addEventListener('load', function() {
        alert("Bạn đã đăng kí thành công");
    });
    function visible_password(){
        document.getElementById('input_password').type='text';
    }
    </script>
</body>
</html>