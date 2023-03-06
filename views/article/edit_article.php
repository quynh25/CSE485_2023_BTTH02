<?php
require_once('views/layouts/header_admin.php');
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <?php
                foreach($data as $value){
            ?>
          <?php
            //    $id = $_GET["id"];
            //    // Bước 01: Kết nối tới DB Server
            //    $conn = mysqli_connect('localhost','root','','btth01_cse485');
            //    if(!$conn){
            //         die('Kết nối tới Server lỗi');
            //    }
               // Bước 02: Thực hiện truy vấn
               $sql_tloai = "select * from theloai";
               $result_tloai = $conn->query($sql_tloai);

               $sql_tgia = "select * from tacgia";
               $result_tgia = $conn->query($sql_tgia);

            //    $sql_update =" select * from baiviet where ma_bviet = $id";
            //    $query_update = $conn->query($sql_update);
            //    $row_update =$query_update->fetch_assoc();
            //   if(isset($_POST['sbm'])){
            //    $tieude= $_POST['tieude'];
            //    $tenbhat= $_POST['tenbhat'];
            //    $matloai= $_POST['matloai'];
            //    $tomtat= $_POST['tomtat'];
            //    $noidung= $_POST['noidung'];
            //    $matgia= $_POST['matgia'];
            //    $ngayviet= $_POST['ngay'];

            //    if($_FILES['anh']['name'] == ''){
            //         $image = $row_update['tieude'];
            //    }else{
            //         $image = $row_update['tieude'];
            //    }
            //    $hinhanh = $_FILES['anh']['name'];
            // //    $hinhanh_tmp = $_FILES['anh']['tmp_name'];

            //    $sql = "update `baiviet` set (tieude = '$tieude',tenbhat= '$tenbhat', matloai='$matloai', tomtat='$tomtat', noidung='$noidung',matgia='$matgia',ngay='$ngayviet',anh='$hinhanh'";

            //    $query = mysqli_query($conn,$sql);
            // //    move_uploaded_file($hinhanh_tmp,'./images/songs/'.$hinhanh);
            //    header('Location: article.php');
            //   }
              
          ?>   

            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa bài viết</h3>
                <form action="add_article.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                        <input type="text" class="form-control" name="tieude" required value="<?php echo $row_update['tieude']; ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                        <input type="text" class="form-control" name="tenbhat" required value="<?php echo $row_update['ten_bhat'];?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <select name="matloai" id=""value="<?php echo $row_update['ten_tloai'];?>">
                              <?php
                                   while( $row_tloai = $result_tloai->fetch_assoc()){?>
                                        <option value="<?php echo $row_tloai['ma_tloai']?>"><?php echo $row_tloai['ten_tloai']?></option>
                                   <?php
                                   }
                                   ?>
                             
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                        <input type="text" class="form-control" name="tomtat" required value="<?php echo $row_update['tomtat'];?>">
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
                        <input type="text" class="form-control" name="noidung"  value="<?php echo $row_update['noidung'];?>">
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
                        <select name="matgia" id=""value="<?php echo $row_update['ten_tgia'];?>">
                              <?php
                                   while( $row_tgia = $result_tgia->fetch_assoc()){?>
                                        <option value="<?php echo $row_tgia['ma_tgia']?>"><?php echo $row_tgia['ten_tgia']?></option>
                                   <?php
                                   }
                                   ?>
                             
                       
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Ngày viết</span>
                        <input type="date" class="form-control" name="ngay" required value="<?php echo $row_update['ngayviet'];?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="name">Hình ảnh</span>
                        <input type="file" class="form-control" name="anh"  >
                    </div>

                    <div class="form-group  float-end ">
                         <!-- <button name = "sbm" class="btn btn-success">Thêm</button> -->
                        <input type="submit" name = "sbm" value="Sửa" class="btn btn-success">
                        <a href="index.php?controller=article&action=list_article" class="btn btn-warning ">Quay lại</a>
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