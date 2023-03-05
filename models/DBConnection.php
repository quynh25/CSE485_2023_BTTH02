<?php

class DB {
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'btth02_cse485';

    private $conn = NULL;
    private $result = NULL;

    public function connect() {
        $this->conn = new mysqli( $this->hostname, $this->username, $this->password, $this->dbname );
        if ( !$this->conn ) {
            echo 'Kết nối thất bại';
            exit();
        } else {
            mysqli_set_charset( $this->conn, 'utf8' );
        }
        return $this->conn;
    }

    //Thực thi câu lệnh truy vấn

    public function execute($sql) {
        $this->result = $this->conn->query( $sql );
        return $this->result;
    }

    //Phương thức lấy dữ liệu

    public function getData() {
        if ( $this->result ) {
            $data = mysqli_fetch_array( $this->result );
        } else {
            $data = 0;
        }
        return $data;
    }

    //Phương thức lấy toàn bộ dữ liệu

        public function getAllData($table) {
            $sql = "SELECT * FROM $table ";
            $this->execute($sql);

            if ( !$this->result ) {
                $data = 0;
            } else {
                while( $datas = $this->getData() ) {
                    $data[] = $datas;

                }
            }
            return $data;
        }

    //Phương thức đếm số bản ghi

    //Phương thức thêm dữ liệu

    public function insertData($tentgia, $hinhtgia ) {
        $sql = "INSERT INTO tacgia(ma_tgia, ten_tgia, hinh_tgia)VALUES(NULL,'$tentgia','$hinhtgia')";
        return $this->execute( $sql );
    }

    //Phương thức sửa dữ liệu

    public function updateData( $matgia, $tentgia, $hinhtgia ) {
        $sql = "UPDATE tacgia SET ten_tgia='$tentgia', hinh_tgia='$hinhtgia' WHERE ma_tgia='$matgia'";
        return $this->execute( $sql );
    }

    //Phương thức xóa dữ liệu

    public function deleteData( $matgia ) {
        $sql = "DELETE FROM tacgia WHERE ma_tgia='$matgia'";
        return $this->execute( $sql );
    }

}
?>