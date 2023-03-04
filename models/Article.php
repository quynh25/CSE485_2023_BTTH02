<?php

class Article {
    private $conn = null;
    private $result = null;
    private $hostname = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $dbname = 'btth02_cse485';

    public function connect() {
        $this->conn = new mysqli( $this->hostname, $this->username, $this->pass, $this->dbname );
        if ( !$this->conn ) {
            echo 'Kết nối thất bại';
            exit();
        } else {
            mysqli_set_charset( $this->conn, 'utf8' );
        }
        return $this->conn;

    }
    // Thực thi câu lệnh truy vấn

    public function execute( $sql ) {
        $this->result = $this->conn->query( $sql );
        return $this->result;
    }

    //phương thức lấy dữ liệu

    public function getData() {
        if ( $this->result ) {
            $data = mysqli_fetch_array( $this->result );
        } else {
            $data = 0;
        }
        return data;
    }

    //phương thức lấy toàn bộ dữ liệu

    public function getAllData() {
        if ( !$this->result ) {
            $data = 0;
        } else {
            while( $data = $this->getData() ) {
                $data[] = $datas;
            }
        }
        return $data;
    }
    //Phương thức thêm dữ liệu

    public function InsertData( $tieude, $ten_bhat, $ma_tloai, $tomtat, $noidung, $ma_tgia, $ngayviet, $hinhanh ) {
        $sql = "INSERT INTO baiviet(ma_bviet,tieude,ten_bhat,ma_tloai,tomtat,noidung,ma_tgia,ngayviet,hinhanh)
                values(null,'$tieude','$ten_bhat','$ma_tloai','$tomtat','$noidung','$ma_tgia','$ngayviet','$hinhanh')";
        return $this->execute( $sql );
    }
    // Sửa dữ liệu

    public function UpdateData( $ma_bviet, $tieude, $ten_bhat, $ma_tloai, $tomtat, $noidung, $ma_tgia, $ngayviet, $hinhanh ) {
        $sql = "UPDATE baiviet set 
            ma_bviet = 'ma_bviet',tieude = '$tieude',ten_bhat = '$ten_bhat',ma_tloai = '$ma_tloai,tomtat = '$tomtat',noidung = '$noidung',
            ma_tgia = '$ma_tgia',ngayviet = '$ngayviet',hinhanh = '$hinhanh' where ma_bviet = '$ma_bviet'";
        return this->execute( $sql );
    }
    // Xóa dữ liệu

    public function Delete( $ma_bviet ) {
        $sql = "delete from baiviet where ma_bviet = '$ma_bviet'";
        return $this->execute( $sql );

    }
}




?>