<?php
require_once('views/layouts/header_admin.php');
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <?php
                foreach($data as $value){

                }
            ?>

            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa bài viết</h3>
                <form action="index.php?controller=article&action=list" method="post" enctype="multipart/form-data">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                        <?php
                        foreach($data as $value){?>
                            <input type="text" class="form-control" name="tieude" required value="<?php echo $value['tieude']; ?>">
                        <?php
                        }
                        ?>
                        
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                        <?php
                        foreach($data as $value){?>
                            <input type="text" class="form-control" name="tenbhat" required value="<?php echo $value['ten_bhat'];?>">
                        <?php
                        }
                        ?>
                        
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <select name="matloai" id="" value="<?php echo $value['ten_tloai'];?>">
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
                        <?php
                        foreach($data as $value){?>
                             <input type="text" class="form-control" name="tomtat" required value="<?php echo $value['tomtat'];?>">
                        <?php
                        }
                        ?>
                       
                        <!-- <div type="text"id="tomtat"name="tomtat"class="form-control"></div> -->
                        <!-- <script>
                            ClassicEditor
                                .create( document.querySelector( '#tomtat' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script> -->
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Nội dung</span>
                        <?php
                        foreach($data as $value){?>
                            <input type="text" class="form-control" name="noidung"  value="<?php echo $value['noidung'];?>">
                        <?php
                        }
                        ?>
                        
                        <!-- <div id="noidung"name="noidung" class="form-control"></div> -->
                        <!-- <script>
                            ClassicEditor
                                .create( document.querySelector( '#noidung' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script> -->
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                        <select name="matgia" id=""value="<?php echo $value['ten_tgia'];?>">
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
                        <?php
                        foreach($data as $value){?>
                            <input type="date" class="form-control" name="ngayviet" required value="<?php echo $value['ngayviet'];?>">
                        <?php
                        }
                        ?>
                        
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="name">Hình ảnh</span>
                        <?php
                        foreach($data as $value){?>
                            <input type="file" class="form-control" name="hinhanh"  value="<?php echo $value['hinhanh'];?>">
                        <?php
                        }
                        ?>
                        
                    </div>

                    <div class="form-group  float-end ">
                         <!-- <button name = "sbm" class="btn btn-success">Thêm</button> -->
                        <input type="submit" name = "sbm" value="Sửa" class="btn btn-success"  >
                        <a href="index.php?controller=article&action=list" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
            <?php
                
                if(isset($thanhcong)&&in_array('update_success',$thanhcong)){
                    echo "<p style='color: green; text-align: center'>Cập nhật thành công.</p>";
                }
            ?>
        </div>
    </main>

<?php
require_once('views/layouts/footer.php');
?>