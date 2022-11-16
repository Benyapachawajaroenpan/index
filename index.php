<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นกก้นเหลือง</title>
    <link rel="icon" href="image/martin2.png" type="image/gif">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css-------------------------------------------------->
    <link rel="stylesheet" href="min.css">

</head>

<body>
    <!-- header section starts  -->
    <?php 
 $pdo = new PDO("mysql:host=localhost;dbname=bookproject2; charset=utf8", "root", "");
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
?>

    <header class="header">
        <a href="http://localhost/projectbook/index.php">
            <img alt="หน้าหลัก" class="logo" src="image/martin2.png"></a>

        <nav class="navbar">
            <a href="http://localhost/projectbook/index.php">หน้าหลัก</a>
            <a href="http://localhost/projectbook/index.php#features">คุณอาจชอบ</a>
            <a href="http://localhost/projectbook/lovecom.php">เลิฟคอมเมดี้</a>
            <a href="http://localhost/projectbook/fantasy.php">แฟนตาซี</a>
            <a href="http://localhost/projectbook/detective.php">สายลับ-สืบสวน</a>
            <a href="http://localhost/projectbook/action.php">แอคชั่น-ผจญภัย</a>
        </nav>


        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <a href="login1/login.php">
                <div class="fas fa-user" id="login-btn"></div>
            </a>
        </div>

        <form action="navsearch.php" class="search-form" method="GET">
            <input type="search" id="search-box" name="keyword" placeholder="search..">
            <button for="search-box" class="fas fa-search"></button>
        </form>

        <div class="shopping-cart">
            <div class="box">
                
            </div>
            
            <div class="total"> total : </div>
            <a href="#" class="btn">checkout</a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->
    <section class="home" id="home">

        <!-- <div class="content"> -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="image/banner1.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="image/banner2.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="image/banner3.png" style="width:100%">
            </div>
        </div>
        <!-- </div> -->
    </section>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>


    <!-- features section starts  -->
<?php
 $stmt = $pdo->prepare("SELECT * FROM หนังสือ ORDER BY bname ASC;");
 $stmt->execute();
?>

    <section class="features" id="features">

        <h1 class="heading">คุณอาจชอบ</h1>
        <div class="box-container">

            <?php while ($row = $stmt->fetch()) :?>
            <div class="box">
                <img src="book/<?=$row["isbn"]?>.jpg" width="100" alt="">
                <h3><?=$row ["bname"]?></h3>
                <p><?=$row ["author"]?></p>
                <a href="detail.php?isbn=<?=$row["isbn"]?>" class="btn">read more</a>
            </div><?php endwhile; ?>

    </section>

    <!-- features ends -->


    <!-- footer starts  -->
    <section class="footer">

        <div class="box-container">
            <p>ติดต่อเรา<br>
                <a href="https://www.gmail.com/">birdyellow@gmail.com </a> <br>


                <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                <a href="https://twitter.com/" class="fa fa-twitter"></a>
                <a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram"></a>
            </p>
        </div>

    </section>
    <!-- footer ends -->


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>
</html>