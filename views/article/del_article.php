<?php
    require_once('views/layouts/header_admin.php');
?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Xoá bài viết</h3>
            <form action="" method="post"
                style="width: 50%; background: #3d456a2e; border: 1px solid; border-radius: 10px; margin: 60px auto; padding: 30px;">
                </h3>
                <div>
                    <h4 style="text-align:center;">Bạn có chắc chắn muốn xóa Bài viết này?</h4>
                    <div class="form-group format-button" style="display: flex; justify-content: center; align-items: center;">
                        <div>
                            <input class="btn btn-danger" type="submit" name="delete" value="Xóa" >
                            <a href="index.php?controller=article&action=list_article" class="btn btn-warning" >Quay lại</a>
                        </div>
                    </div>
                </div>
            </form>
            <?php
                if(isset($thanhcong)&&in_array('del_success',$thanhcong)){
                    echo "<p style='color: green; text-align: center'>Xóa thành công.</p>";
                }
            ?>
        </div>
    </div>
</main>

<?php
require_once('views/layouts/footer.php');
?>