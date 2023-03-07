
<?php
    require_once('views/layouts/header_admin.php');
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                        <input type="text" class="form-control" name="tieude" required >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                        <input type="text" class="form-control" name="tenbhat" required>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <select name="matloai" id="">
                        <?php
                        foreach($result_tloai as $value){
                        ?>
                            <option value="<?php echo $value['ma_tloai'];?>"><?php echo $value['ten_tloai'];?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                        <input type="text" class="form-control" name="tomtat" required >
                        <!-- <div type="text"id="tomtat"name="tomtat"class="form-control"></div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#tomtat' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script> -->
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Nội dung</span>
                        <input type="text" class="form-control" name="noidung"  >
                        <!-- <div id="noidung"name="noidung" class="form-control"></div>
                         <script>
                            ClassicEditor
                                .create( document.querySelector( '#noidung' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script> -->
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                        <select name="matgia" id="">
                        <?php
                        foreach($result_tgia as $value){
                        ?>
                            <option value="<?php echo $value['ma_tgia'];?>"><?php echo $value['ten_tgia'];?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Ngày viết</span>
                        <input type="date" class="form-control" name="ngayviet" required>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="name">Hình ảnh</span>
                        <input type="file" class="form-control" name="hinhanh"  >
                    </div>

                    <div class="form-group  float-end ">
                         <!-- <button name = "sbm" class="btn btn-success">Thêm</button> -->
                        <input href="index.php?controller=article&action=list_article" type="submit" name = "add_article" value="Thêm" class="btn btn-success">
                        <a href="index.php?controller=article&action=list_article" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
                <?php
                    if(isset($thanhcong)&& in_array('add_success', $thanhcong)){
                        echo "<p style='color:green; text-align:center;'>Thêm mới thành công.</p>";
                    }
                ?>
            </div>
        </div>
    </main>

    <?php
        require_once('views/layouts/footer.php');
    ?>
    <!-- <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>
</html>