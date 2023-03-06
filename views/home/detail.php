<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="my-logo">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/images/logo2.png" alt="" class="img-fluid">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?controller=home&action=trangchu">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=member&action=login">Đăng nhập</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mt-5">
            <?php
                foreach($data as $value){

            ?>
                <div class="row mb-5">
                    <div class="col-sm-4">
                    <img src="<?php echo $value['hinhanh'];?>" class="card-img-top" alt="...">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="card-title mb-2">
                            <a href="" class="text-decoration-none"><?php echo $value['tieude'];?></a>
                        </h5>
                        <p class="card-text"><span class=" fw-bold">Bài hát: </span><?php echo $value['ten_bhat'];?></p>
                        <p class="card-text"><span class=" fw-bold">Thể loại: </span><?php echo $value['ten_tloai'];?></p>
                        <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?php echo $value['tomtat'];?></p>
                        <p class="card-text"><span class=" fw-bold">Nội dung: </span><?php echo $value['noidung'];?></p>
                        <p class="card-text"><span class=" fw-bold">Tác giả: </span><?php echo $value['ten_tgia'];?> </p>

                    </div>          
                </div>
           <?php
                }
            ?> 
    </main>
    <?php
require_once('views/layouts/footer.php');
?>