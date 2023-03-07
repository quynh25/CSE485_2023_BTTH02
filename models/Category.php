<?php

class Dtbase{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="btth02_cse485";

    private $conn = NULL;
    private $result = NULL;
    public function connect(){
        $this->conn= new mysqli($this->host, $this->username, $this->password, $this->database);
        if(!$this->conn){
            echo "Ket noi that bai";
            exit();
        }
        else{
            mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;
    }
    // thuc thi cau lech truy van
    public function execute($sql){
        $this->result = $this->conn->query($sql);
        return $this->result;
    }

    // phuong thuc lay du lieu
    public function getData(){
        if($this->result){
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }
    // phuong thuc lay toan bo dulieu
    public function getAllData($table){
        $sql = "SELECT * FROM $table ";
        $this->execute($sql);
        if($this->num_rows()== 0){
            $data =0;
        }else{
            while($datas = $this->getData()){
                $data[] = $datas;
            }
        }
        return $data;
    }
    public function num_rows(){
        if($this->result){
            $num = mysqli_num_rows($this->result);
        }
        else{
            $num = 0;
        }
        return $num;
    }

    //Phương thức đếm số bản ghi

    //Phương thức thêm dữ liệu

    public function insertTL( $tentloai) {
        $sql = "INSERT INTO theloai(ma_tloai, ten_tloai)VALUES(NULL,'$tentloai')";
        return $this->execute( $sql );
    }

    //Phương thức sửa dữ liệu

    public function updateTL( $matloai, $tentloai) {
        $sql = "UPDATE theloai SET ten_tloai='$tentloai'WHERE ma_tloai='$matloai'";
        return $this->execute( $sql );
    }

    //Phương thức xóa dữ liệu

    public function deleteTL( $matloai ) {
        $sql = "DELETE FROM theloai WHERE ma_tloai='$matloai'";
        return $this->execute( $sql );
    }

}
?>