<?php
require_once('views/layouts/header_admin.php');
?>

    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">QUẢN LÝ TÁC GIẢ</h3>
                <a href="index.php?controller=author&action=add" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên tác giả</th>
                            <th scope="col">Ảnh tác giả</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($data as $value){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $value['ma_tgia'];?></th>
                            <td><?php echo $value['ten_tgia'];?></td>
                            <td>
                                <img id="img-avt" src="<?php echo $value['hinh_tgia'];?>" alt="" style="width:10%">
                            </td>
                            <td>
                                <a href="index.php?controller=author&action=edit&id=<?php echo $value['ma_tgia'];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="index.php?controller=author&action=del&id=<?php echo $value['ma_tgia'];?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php
require_once('views/layouts/footer.php');
?>