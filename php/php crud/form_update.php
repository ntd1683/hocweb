<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
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
        background-size: cover;
        background-repeat: no-repeat;
    }
    /* form */
    #main{
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
        margin-bottom: 6px;
    }

    .input-text{
        border: 1px solid #ccc;
        border-radius: 15px;
        width: 95%;
        padding: 10px;
        font-size: 15px;
        margin-bottom: 15px;
    }
    #input_subject{
        border: 1px solid #ccc;
        border-radius: 15px;
        width: 20%;
        padding: 10px;
        font-size: 15px;
        margin-bottom: 10px;
    }
    #button-submit{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #009688;
        border: 1px solid #ccc;
        border-radius: 20px;
        color: #fff;
        width: 30%;
        font-size: 16px;
        text-transform: uppercase;
        padding: 10px;
        cursor: pointer;
        margin-right: auto;
        margin-left: auto;
    }
    #button-submit:hover{
        opacity: 0.9;
    }
            /* error */
            .icon-size{
        font-size: 20px;
    }
    #span-error-email,
    #span-error-picture,
    #span-error-adress,
    #span-error-name{
        position: relative;
    }
    #error-email,
    #error-picture,
    #error-adress,
    #error-name{
        visibility: hidden;
        position: absolute;
        visibility: hidden;
        position: absolute;
        right: 25px;
        width: 203px;
        text-align: right;
        border: 2px solid #000;
        padding: 4px;
        background-color: #009688;
        color: black;
        top: 20px;
    }

    #error-email{
        right: 25px;
        top: 10px;
    }

    #span-error-email:hover .error-hidden,
    #span-error-picture:hover .error-hidden,
    #span-error-adress:hover .error-hidden,
    #span-error-name:hover .error-hidden{
        visibility: visible;
    }
    </style>
</head>
<body>
    <?php
        $code = $_GET['model'];

        require_once './asset/php/connect.php';

        $sql="select * from info_model where code = $code";
        $result = mysqli_query($connect,$sql);
        $info_model = mysqli_fetch_array($result);
        // sex
        $sex = $info_model['sex'];
        if ($sex=='Nam'){
            $sex_nam='checked';
            $sex_nu='';
        }
        else {
            $sex_nam='';
            $sex_nu='checked';
        }
        // option
        $subject = $info_model['subject'];
        if($subject=='Coi phim'){
            $subject1='selected';
            $subject2='';
            $subject3='';
        }
        else if($subject=='Chụp ảnh'){
            $subject1='';
            $subject2='selected';
            $subject3='';
        }
        else if($subject=='Xem stream'){
            $subject1='';
            $subject2='';
            $subject3='selected';
        }
    ?>
    <div id="main">
        <div id="container">
            <div id="header">
                <i class="ti-pencil-alt header-margin"></i>
                Đăng kí
            </div>
            <div id="body-container">
                <form method="post" action="process_update.php" onsubmit="return false">
                    <input type="hidden" name="code" value="<?php echo $info_model['code']?>">
                    <label for="input_name" class="body-text-header">Tên</label>
                    <input class="input-text" type="text" name="name" id="input_name" value="<?php echo $info_model['name']?>">
                    <span id="span-error-name">
                        <i id="icon-name" class="ti-info-alt icon-size"></i>
                        <div id="error-name" class="error-hidden">Lưu ý khi nhập :
                            <br> Tên không được để trống 
                            <br> và đúng ngữ pháp tiếng việt</div>
                    </span>
                    <br>
                    <label for="input_sex" class="body-text-header">Giới Tính</label>
                    <input type="radio" name="sex" value="Nam" id="input_sex" <?php echo $sex_nam?>>Nam
                    <input type="radio" name="sex" value="Nữ" id="input_sex" style="margin-bottom: 20px;" <?php echo $sex_nu?>>Nữ
                    <br>
                    <label for="input_email" class="body-text-header">Email</label>
                    <input class="input-text" type="email" name="email" id="input_email" value="<?php echo $info_model['email']?>">
                    <span id="span-error-email">
                        <i id="icon-email" class="ti-info-alt icon-size"></i>
                        <div id="error-email" class="error-hidden">Lưu ý khi nhập :
                            <br> Nhớ nhập mail hợp lệ</div>
                    </span>
                    <br>
                    <label for="input_picture" class="body-text-header">Nhập Link Ảnh</label>
                    <input class="input-text" type="text" name="picture" id="input_picture" value="<?php echo $info_model['link_picture']?>">
                    <span id="span-error-picture">
                        <i id="icon-picture" class="ti-info-alt icon-size"></i>
                        <div id="error-picture" class="error-hidden">Lưu ý khi nhập :
                            <br> Nhớ nhập link ảnh hợp lệ </div>
                    </span>
                    <br>
                    <label class="body-text-header">Ngày sinh</label>
                    <input class="input-text" type="date" name="date" value="<?php echo $info_model['date']?>">
                    <br>
                    <label for="input_adress" class="body-text-header">Địa chỉ</label>
                    <input class="input-text" type="text" name="adress" id="input_adress" value="<?php echo $info_model['adress'] ?>">
                    <span id="span-error-adress">
                        <i id="icon-adress" class="ti-info-alt icon-size"></i>
                        <div id="error-adress" class="error-hidden">Lưu ý khi nhập :
                            <br> Nhớ nhập địa chỉ đầy đủ hợp lệ</div>
                    </span>
                    <br>
                    <label for="input_subject" class="body-text-header">Sở thích</label>
                    <select name="subject" id="input_subject">
                        <option value="subject1" <?php echo $subject1?>>Coi phim</option>
                        <option value="subject2" <?php echo $subject2?>>Chụp ảnh</option>
                        <option value="subject3" <?php echo $subject3?>>Xem stream</option>
                    </select>
                    <br>
                    <button id="button-submit" onclick="return push_button_submit()">Sửa thông tin</button>
                </form>
            </div>
        </div>
    </div>
    <?php mysqli_close($connect)?>
    <script>
        document.getElementById('input_name').onkeydown = function (a){
            if (a.keyCode==13){
                push_button_submit();
            }
        };
        document.getElementById('input_email').onkeydown = function (b){
            if (b.keyCode==13){
                push_button_submit();
            }
        };
        document.getElementById('input_picture').onkeydown = function (c){
            if (c.keyCode==13){
                push_button_submit();
            }
        };
        document.getElementById('input_adress').onkeydown = function (d){
            if (d.keyCode==13){
                push_button_submit();
            }
        };
        function push_button_submit(){
            let check=0;
            let check_error=false;
            //name
            let input_name=document.getElementById('input_name').value;
            console.log('input_name');
            if(input_name.length===0){
                document.getElementById('error-name').innerHTML='*Bắt buộc - không được để trống';
                document.getElementById('span-error-name').style.color= "red";
                document.getElementById('error-name').style.borderColor= "red";
                document.getElementById('error-name').style.backgroundColor= "white";
                document.getElementById('error-name').style.color= "red";
                check_error=true;
            }
            else{
                let regex_name=/^[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+ [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+(?: [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)*$/;
                if(regex_name.test(input_name)==false){
                    document.getElementById('error-name').innerHTML='*Tên không hợp lệ với ngữ pháp tiếng việt';
                    document.getElementById('span-error-name').style.color= "red";
                    document.getElementById('error-name').style.borderColor= "red";
                    document.getElementById('error-name').style.backgroundColor= "white";
                    document.getElementById('error-name').style.color= "red";
                    check_error=true;
                }
                else{
                    document.getElementById('icon-name').classList.remove("ti-info-alt");
                    document.getElementById('icon-name').classList.add("ti-check");
                    document.getElementById('span-error-name').style.color= "green";
                    if(document.getElementById('error-name')){
                        document.getElementById('error-name').remove();
                        check ++;
                    }
                }
            }
            // email
            let input_email=document.getElementById('input_email').value;
            if(input_email.length===0){
                document.getElementById('error-email').innerHTML='*Bắt buộc - không được để trống';
                document.getElementById('span-error-email').style.color= "red";
                document.getElementById('error-email').style.borderColor= "red";
                document.getElementById('error-email').style.backgroundColor= "white";
                document.getElementById('error-email').style.color= "red";
                check_error=true;
            }
            else{
                let regex_email=/^[\w]{4,}(?:\_[\w])*\@\w{3,6}(?:\.\w{2,6})*$/;
                if(regex_email.test(input_email)==false){
                    document.getElementById('error-email').innerHTML='*Email không hợp lệ';
                    document.getElementById('span-error-email').style.color= "red";
                    document.getElementById('error-email').style.borderColor= "red";
                    document.getElementById('error-email').style.backgroundColor= "white";
                    document.getElementById('error-email').style.color= "red";
                    check_error=true;
                }
                else{
                    document.getElementById('icon-email').classList.remove("ti-info-alt");
                    document.getElementById('icon-email').classList.add("ti-check");
                    document.getElementById('span-error-email').style.color= "green";
                    if(document.getElementById('error-email')){
                        document.getElementById('error-email').remove();
                        check ++;
                    }
                }
            }
            // link-picture
            let input_picture=document.getElementById('input_picture').value;
            if(input_picture.length===0){
                document.getElementById('error-picture').innerHTML='*Link không được để trống';
                document.getElementById('span-error-picture').style.color= "red";
                document.getElementById('error-picture').style.borderColor= "red";
                document.getElementById('error-picture').style.backgroundColor= "white";
                document.getElementById('error-picture').style.color= "red";
                check_error=true;
            }
            else{
                let regex_picture=/^[a-zA-Z]+\:\/\/\w+.\w+(?:.\w+)*$/;
                if(regex_picture.test(input_picture)==false){
                    document.getElementById('error-picture').innerHTML='*Link không hợp lệ';
                    document.getElementById('span-error-picture').style.color= "red";
                    document.getElementById('error-picture').style.borderColor= "red";
                    document.getElementById('error-picture').style.backgroundColor= "white";
                    document.getElementById('error-picture').style.color= "red";
                    check_error=true;
                }
                else{
                    document.getElementById('icon-picture').classList.remove("ti-info-alt");
                    document.getElementById('icon-picture').classList.add("ti-check");
                    document.getElementById('span-error-picture').style.color= "green";
                    if(document.getElementById('error-picture')){
                        document.getElementById('error-picture').remove();
                        check ++;
                    }
                }
            }
            // adress
            let input_adress=document.getElementById('input_adress').value;
            if(input_adress.length===0){
                document.getElementById('error-adress').innerHTML='*Bắt buộc - không được để trống';
                document.getElementById('span-error-adress').style.color= "red";
                document.getElementById('error-adress').style.borderColor= "red";
                document.getElementById('error-adress').style.backgroundColor= "white";
                document.getElementById('error-adress').style.color= "red";
                check_error=true;
            }
            else{
                let regex_adress=/^(?:\d+|[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+|[A-Z]\d+)+(?: [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)*$/;
                if(regex_adress.test(input_adress)==false){
                    document.getElementById('error-adress').innerHTML='*Địa chỉ không hợp lệ';
                    document.getElementById('span-error-adress').style.color= "red";
                    document.getElementById('error-adress').style.borderColor= "red";
                    document.getElementById('error-adress').style.backgroundColor= "white";
                    document.getElementById('error-adress').style.color= "red";
                    check_error=true;
                }
                else{
                    document.getElementById('icon-adress').classList.remove("ti-info-alt");
                    document.getElementById('icon-adress').classList.add("ti-check");
                    document.getElementById('span-error-adress').style.color= "green";
                    if(document.getElementById('error-adress')){
                        document.getElementById('error-adress').remove();
                        check ++;
                    }
                }
            }

            if(check===4){
                document.getElementsByTagName("form")[0].setAttribute("onsubmit","return true");
            }

            if(check_error==true){
                return false;
            }
        }
    </script>
</body>
</html>