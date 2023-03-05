<?php
require_once('views/layouts/header_admin.php');
?>

    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
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
                    echo  "<pre>";
                    print_r($data);
                    ?>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>
                                        <img id="img-avt" src="" alt="" style="width:10%">
                                    </td>
                                    <td>
                                        <a href="index.php?controller=author&action=edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td>
                                        <a href="process_delete_author.php?id"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                    <?php
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php
require_once('views/layouts/footer.php');
?>