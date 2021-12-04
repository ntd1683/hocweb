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

        .delete-text-decoration{
            text-decoration: none;
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
            position: relative;
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

        .color-text-decoration-a{
            text-decoration-color: white;
        }

        #content>.model img{
            height: 300px;
        }

        .model .fix-model{
            display: flex;
            margin-top: -26px;
            font-size: 20px;
            width: fit-content;
            color: white;
            border: 2px solid white;
            padding: 3px;
            background-color: gray;
        }
        
        .model .delete-model{
            display: flex;
            margin-top: -34px;
            margin-bottom: 25px;
            margin-left: 6%;
            font-size: 20px;
            width: fit-content;
            color: white;
            border: 2px solid white;
            padding: 3px;
            background-color: gray;
        }

        .model .fix-model:hover,
        .model .delete-model:hover{
            background-color: #009688;
        }

        #input-search{
            margin-left: 35%;
            width: 50%;
            height: 35px;
            border-radius: 15px;
            font-size: 25px;
            text-align: center;
            color: #5e5959;
        }
        #content .footage-page{
            font-size: 20px;
            float: left;
            margin: 15px;
            border: 2px solid white;
            border-radius: 5px;
            background-color: gray;
            color: white;
        }
        #footage{
            position: absolute;
            left: 30%;
            bottom: 5px;
        }

        #content .footage-page:hover{
            background-color: #009688;
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
                    require_once './asset/php/connect.php';
                    
                    $search='';
                    $page=1;

                    if (isset($_GET['page'])){
                        $page=$_GET['page'];
                    }

                    $search='';
                    if (isset($_GET['search'])){
                        $search=$_GET['search'];
                    }

                    
                    // die($page);
                    $sql_total_model="select count(*) from info_model where name like '%$search%'";
                    $arr_total_model= mysqli_query($connect,$sql_total_model);
                    $sql_arr_total_model = mysqli_fetch_array($arr_total_model);
                    $total_model = $sql_arr_total_model['count(*)'];

                    $model_in_page = 2;
                    
                    $total_page=ceil($total_model / $model_in_page);
                    
                    $skip_model = ($page-1)*$model_in_page;
                    
                    $sql="select * from info_model 
                    where
                    name like '%$search%' limit  $model_in_page offset $skip_model";
                    $result = mysqli_query($connect,$sql);
                ?>
                <form >
                    <input type="search" name="search" id="input-search" value="<?php echo $search?>">
                </form>
                <?php foreach ($result as $each_post) {?>
                <div class="model">
                    <a target="_blank" href="./show.php?model=<?php echo $each_post['code'] ?>" class="color-text-decoration-a">
                    <h1><?php echo $each_post['name'] ?></h1> 
                    <a href="./form_update.php?model=<?php echo $each_post['code'] ?>" target="_blank" class="delete-text-decoration">
                        <div class="fix-model">Sửa</div>
                    </a>
                    <a href="./process_delete.php?model=<?php echo $each_post['code'] ?>" target="_blank" class="delete-text-decoration">
                        <div class="delete-model">Xoá</div>
                    </a>
                    <img src="<?php echo $each_post['link_picture']?>" alt="Ảnh Model">
                    </a>
                </div>
                <?php } ?>
                <div id="footage">
                    <?php for ($i=1;$i<=$total_page;$i++){?>
                        <a class="a-footage" href="?page=<?php echo $i ?>&search=<?php echo $search?>">
                            <div class="footage-page"><?php echo $i ?></div>
                        </a>
                    <?php }?> 
                </div>
            </div>
        </div>
    </div>
    <?php mysqli_close($connect)?>
</body>
</html>