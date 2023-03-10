<?php
require_once('views/layouts/header_admin.php');
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
            <?php
                foreach($data as $value){
            ?>
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin tác giả</h3>
                <form action="" method="POST">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã tác giả</span>
                        <input type="text" class="form-control" name="txtId" readonly value="<?php echo $value['ma_tgia']?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                        <input type="text" class="form-control" name="txtName" value = "<?php echo $value['ten_tgia']?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Ảnh tác giả</span>
                        <input type="text" class="form-control" name="txtLink" value = "">
                    </div>
                    <div class="form-group  float-end ">
                        <input type="submit" name="update" value="Lưu lại" class="btn btn-success">
                        <a href="index.php?controller=author&action=home" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
            <?php
                }
                if(isset($thanhcong)&&in_array('update_success',$thanhcong)){
                    echo "<p style='color: green; text-align: center'>Cập nhật thành công.</p>";
                }
            ?>
        </div>
    </main>
    <?php
require_once('views/layouts/footer.php');
?>