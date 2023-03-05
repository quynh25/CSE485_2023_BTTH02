<?php
require_once('views/layouts/header_admin.php');
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới tác giả</h3>
                <form action="" method="POST">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                        <input type="text" class="form-control" name="txtName" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Ảnh tác giả</span>
                        <input type="text" class="form-control" name="txtLink" >
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" class="btn btn-success" name="insert" value="Thêm">
                        <a href="author.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                    
                </form>
                <?php
                if(isset($thanhcong)&&in_array('addd_success',$thanhcong)){
                    echo "<p style='color: green; text-align: center'>Thêm mới thành công.</p>";
                }
                ?>
            </div>
        </div>
    </main>
    <?php
require_once('views/layouts/footer.php');
?>