<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon - Diamond and Pearl</title>
    <link rel="icon shortcut" href="./img/favicon.png">
    <!-- Bootstrap官方網站 https://getbootstrap.com/ -->
    <!-- TODO: 連結Bootstrap.min.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- 連結fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- 使用style.css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- Ctrl + / -->
    <!-- b4-元件名-default b4-navbar-default -->
    <!-- 導覽列  -->
    <?php
// 建立MySQL的資料庫連接 
$link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            '1234',  // 密碼 
            'test');  // 預設使用的資料庫名稱 
if ( !$link ) {
   echo "MySQL資料庫連接錯誤!<br/>";
   exit();
}
else {
   echo "MySQL資料庫test連接成功!<br/>";
}
mysqli_close($link);  // 關閉資料庫連接
$lin = 2;
?>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    
    <?php if($lin == 1){?>
        <a class="navbar-brand" href="#">1Pokemon 鑽石珍珠</a>

    <?php }else{ ?>

        <a class="navbar-brand" href="#">2Pokemon 鑽石珍珠</a>
    <?php } ?>

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#section1">神獸介紹</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">御三家介紹</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://game.portal-pokemon.com/bdsp/tc/" target="_blank">了解更多</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- 導覽列 end  -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img\H.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img\E.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img\G.jpg" alt="Third slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- section1 -->
    <section id="section1" class="">
        <h1 class="section-title text-center text-secondary mb-5">神獸介紹</h1>
        <div class="container">
            <!-- TODO: 透過 row與col的網格排版 -->
            <!-- row -->
            <div class="row">
                <!-- column -->
                <div class="col-md-4 col-sm-6 col-6">
                    <img src="./img/A.png" class="w-100">
                    <h3>帝牙盧卡</h3>
                    <p>帝牙盧卡有著控制時間的能力，被稱作時間之神。牠可以扭曲時間以讓時間加快或減慢甚至停止。</p>
                </div>
                <!-- column end -->
                <!-- column -->
                <div class="col-md-4 col-sm-6">
                    <img src="./img/C.png" class="w-100">
                    <h3>騎拉帝納</h3>
                    <p>棲息在據說位於這個世界的背面，一般常識無法通用的毀壞的世界裡。</p>
                </div>
                <!-- column end -->
                <!-- column -->
                <div class="col-md-4 col-sm-6 col-6">
                    <img src="./img/B.png" class="w-100">
                    <h3>帕路奇亞</h3>
                    <p>據說住在互相平行的空間之間的狹縫。帕路奇亞具有扭曲空間並創造平行空間的能力。</p>
                </div>
                <!-- column end -->

            </div>
        </div>
    </section>
    <!-- section1 end -->
    <!-- section2 -->
    <section id="section2" class="">
        <h1 class="section-title text-center text-secondary mb-5">御三家介紹</h1>
        <div class="container">
            <!-- TODO: 透過 row與col的網格排版 -->
            <!-- row -->
            <div class="row">
                <!-- column -->
                <div class="col-md-4 col-sm-6 col-6">
                    <img src="./img/D.png" class="w-100">
                    <h3>波加曼</h3>
                    <p>非常討厭被別人照顧。因為不肯聽訓練家的指示，要和牠變得親密是很困難的。</p>
                </div>
                <!-- column end -->
                <!-- column -->
                <div class="col-md-4 col-sm-6">
                    <img src="./img/E.png" class="w-100">
                    <h3>小火焰猴</h3>
                    <p>屁股上的火焰是以肚子裡產生的瓦斯為燃料。即使被雨淋到也不會熄滅。</p>
                </div>
                <!-- column end -->
                <!-- column -->
                <div class="col-md-4 col-sm-6 col-6">
                    <img src="./img/F.png" class="w-100">
                    <h3>草苗龜</h3>
                    <p>沐浴著陽光，用全身進行光合作用。甲殼是泥土變硬後形成的。</p>
                </div>
                <!-- column end -->

            </div>
        </div>
    </section>
    <!-- section2 end -->

    <!-- 引用 jquery.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <!-- 連結網頁主程式 -->
    <script src="./js/main.js"></script>
</body>

</html>