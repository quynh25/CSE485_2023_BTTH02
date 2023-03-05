<?php
require_once('views/layouts/header_admin.php');
?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
            <form action="" method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                    <input type="text" class="form-control" name="ma_tloai" readonly value="<?=$category->getMaTheLoai() ?? '' ?>">
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                    <input type="text" class="form-control" name="ten_tloai" value="<?=$category->getTenTheLoai() ?? '' ?>">
                </div>
                
                <div class="form-group" style="color:red">
                    <?= $_GET['mess'] ?? ""?>
                </div>
                
                <div class="form-group float-end ">
                    <input type="submit" name = "btn" value="Lưu" class="btn btn-success">
                    <a href="?controller=category" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
require_once('views/layouts/footer.php');
?>