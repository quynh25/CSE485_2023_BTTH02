
    <?php
        require_once('views/layouts/header_admin.php');
    ?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">        
            <div class="col-sm">
                <a href="index.php?controller=article&action=add" class="btn btn-success">Thêm mới</a>
                <!-- <form action="" method="post" > -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Tên bài hát</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Tóm tắt</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Tác giả</th>
                            <th scope="col">Ngày viết</th>
                            <th scope="col">Hình ảnh</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                            $i = 1;
                            foreach($data as $value){

                         ?>
                              <tr>
                                   <th scope="row"><?php echo $i++; ?></th>
                                   <td ><?php echo $value['tieude']; ?></td>
                                   <td><?php echo $value['ten_bhat']; ?></td>
                                   <td><?php echo $value['ten_tloai']; ?></td>
                                   <td><?php echo $value['tomtat']; ?></td>
                                   <td><?php echo $value['noidung']; ?></td>
                                   <td><?php echo $value['ten_tgia']; ?></td>
                                   <td><?php echo $value['ngayviet']; ?></td>
                                   <td><img src="<?php echo $value['hinhanh'];?>" class="card-img-top" alt="..."></td>
                                   <td>
                                        <a href="index.php?controller=article&action=edit&id=<?php echo $value['ma_bviet']?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                   </td>
                                   <td>
                                        <a  href="index.php?controller=article&action=delete&id=<?php echo $value['ma_bviet']?>"><i class="fa-solid fa-trash"></i></a>
                                   </td>
                              </tr>
                         <?php
                            }
                         ?>
                    </tbody>
                </table>
                <!-- </form>                 -->
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
    <!-- <script>
        function Del(){
            return confirm("Bạn có chắc chắn muốn xóa bài viết ?");
        }
    </script> -->
</body>
</html>