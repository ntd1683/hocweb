<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Of NTD</title>
    <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body{
            background-image: url(./asset/img/IMG_9693.png);
            background-size: cover;
            background-repeat: no-repeat;
            backdrop-filter: blur(5px);
            font-family: 'Courier New', Courier, monospace;
            color: white;
        }

        #main{
            position: relative;
            
        }
        /* post */
        #post{
            background : gray;
            width: 15%;
            height: 30px;
            position: fixed;
            right: 10px;
            border-radius: 15px;
            line-height: 34px;
            z-index: 1;
            color: white;
            text-align: center;
        }
        #post a{
            text-decoration: none;
            color: white;
        }
        #post:hover {
            background-color: #009688;
        }

        /* contain */
        #contain{
            width: 100%;
            min-height: auto;
        }
        /* nav */
        #nav{
            background-image: url(./asset/img_logo/background.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            width: 30%;
            position: fixed;
            z-index: 1;
            opacity: 80%;
        }

        #avatar{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 8px solid white;
            margin-bottom: 30px;
        }

        #nav-header{
            text-align: center;
            margin-bottom: 20px;
        }
        
        #nav-body{
            text-align: center;
        }
        
        #nav-body .a-social{
            margin-left: 25%;
            display: flex;
            justify-content: center;
            margin-top: 8px;
            margin-bottom: 8px;
            border: 2px solid white;
            padding: 8px;
            width: 50%;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
        }

        #nav-body .a-social:hover{
            margin-left: 20%;
            padding: 12px;
            font-size: 18px;
            width: 60%;
        }

        #nav-img{
            width: 100%;
        }

        #nav-img img{
            width: 32%;
        }

        /* content */
        #content{
            padding: 15px;
            width: 100%;
            background-color: black;
            opacity: 80%;
            color: white;
            float: right;
            text-decoration: none;
        }

        .model{
            margin-left: 33%;
        }

        #content >.model{
            text-align: center;
        }

        #content >.model h1{
            color: white;
        }
        a{
            text-decoration-color: white;
        }
        #content>.model img{
            height: 350px;
        }
    </style>
</head>
<body>
    <div id="main">
        <div id="post">
            <a target="_blank" href="./form.php">
                    Thêm Bài Viết
            </a>
        </div>
        <div id="contain">
            <div id="nav">
                <div id="contain-nav">  
                    <div id="nav-header">
                        <br><br><br>
                        <a target="_blank" href="https://fb.com/ntd1683">
                            <img src="./asset/img_logo/avt.jpg" alt="NTD" id="avatar">
                        </a>
                        <h1>Nguyễn Tấn Dũng</h1>
                        <p>
                            Chụp ảnh giao lưu miễn phí
                        </p>
                    </div>
                    <div id="nav-body">
                        <div class="social">
                            <a target="_blank" href="https://facebook.com/ntd1683" class="a-social">FACEBOOK</a> <br>
                            <a target="_blank" href="https://www.flickr.com/photos/193454804@N04/" class="a-social">FLICKR</a> <br>
                            <a target="_blank" href="https://tiktok.com/@ntd2027" class="a-social">TIKTOK</a> <br>
                            <a target="_blank" href="https://www.youtube.com/channel/UC-fnCNF-wOxfFpPfQ2rPwyw" class="a-social">YOUTUBE</a> <br>
                            <a target="_blank" href="https://www.instagram.com/ntd1683/" class="a-social">INSTA</a> <br>
                        </div>      
                    </div>
                </div>
            </div>
            <div id="content">
                <?php 
                    $connect = mysqli_connect('localhost','root','','j2school');
                    mysqli_set_charset($connect,'utf8');
                    
                    $sql="select * from info_model";
                    $result = mysqli_query($connect,$sql);
                ?>
                
                <?php foreach ($result as $each_post) {?>
                <div class="model">
                    <a target="_blank" href="./show.php?model=<?php echo $each_post['code'] ?>">
                    <h1><?php echo $each_post['name'] ?></h1>
                    <img src="<?php echo $each_post['link_picture']?>" alt="Ảnh Model">
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php mysqli_close($connect)?>
</body>
</html>