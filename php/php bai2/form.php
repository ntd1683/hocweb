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
        margin-bottom: 12px;
    }

    .input-text{
        border: 1px solid #ccc;
        border-radius: 15px;
        width: 100%;
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
    </style>
</head>
<body>
    <div id="main">
        <div id="container">
            <div id="header">
                <i class="ti-pencil-alt header-margin"></i>
                ????ng k??
            </div>
            <div id="body-container">
                <form method="post" action="process.php">
                    <label for="input_name" class="body-text-header">T??n</label>
                    <input class="input-text" type="text" name="name" id="input_name">
                    <br>
                    <label for="input_sex" class="body-text-header">Gi???i T??nh</label>
                    <input type="radio" name="sex" value="Nam" id="input_sex">Nam
                    <input type="radio" name="sex" value="N???" id="input_sex" style="margin-bottom: 20px;">N???
                    <br>
                    <label for="input_email" class="body-text-header">Email</label>
                    <input class="input-text" type="email" name="email" id="input_email">
                    <br>
                    <label for="input_password" class="body-text-header">M???t kh???u</label>
                    <input class="input-text" type="password" name="password" id="input_password">
                    <br>
                    <label class="body-text-header">Ng??y sinh</label>
                    <input class="input-text" type="date" name="date" >
                    <br>
                    <label for="input_adress" class="body-text-header">?????a ch???</label>
                    <input class="input-text" type="text" name="adress" id="input_adress">
                    <br>
                    <label for="input_subject" class="body-text-header">S??? th??ch</label>
                    <select name="subject" id="input_subject">
                        <option value="subject1">Coi phim</option>
                        <option value="subject2">Ch???p ???nh</option>
                        <option value="subject3">Xem stream</option>
                    </select>
                    <br>
                    <button id="button-submit">????ng k??</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>