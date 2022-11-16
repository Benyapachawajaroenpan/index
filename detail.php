<?php 
$pdo = new PDO("mysql:host=localhost;dbname=bookproject2; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .nav-link {
        color: white;
    }

    .nav {
        background-color: rgb(214, 163, 180);
        justify-content: center;
    }

    article{
    display: flex;
    margin: 70px 50px;

}
div{
  margin: 20px 50px;
}

    </style>
</head>

<body>

</body>

</html>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <h3> <img src="1.png" width="100" alt="">นกก้นเหลือง </h3>

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>

<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="#">ดราม่า</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">แฟนตาซี</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">สืบสวน</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">โรแมนติก</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">สยองขวัญ</a>
    </li>
</ul>



<article class="detail">


    <?php
        $stmt = $pdo->prepare("SELECT * FROM `หนังสือ` WHERE isbn = ?");
        $stmt->bindParam(1, $_GET["isbn"]);
        $stmt->execute();
        $row = $stmt->fetch();
        ?>

    <img src="book/<?=$row["isbn"]?>.jpg" width="350" hight="250" alt="">
    <div>
      <h1><?=$row["bname"]?></h1>
    <h5>สำนักพิมพ์ : <?=$row["publisher"]?> </h5>
    <h5>ผู้เเต่ง: <?=$row["author"]?> </h5>
    <h5>ราคา : <?=$row["price"]?></h5>
    <h5>isbn : <?=$row["isbn"]?></h5>
    </div>
    
</article>

</body>

</html>