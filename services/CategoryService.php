<?php
include("configs/DBConnection.php");
include("models/Category.php");
class CategoryService{

    public function getAll($sql){
        $database = new DBConnection;
        $conn = $database->getConnection();   //khởi tạo đối tượng PDO
        $stmt = $conn->query($sql);

        $categories = [];
        while($row = $stmt->fetch()){
            $categorie = new Category($row['ma_tloai'],$row['ten_tloai']);
            array_push($categories,$categorie);
        }
        $conn=null; //đóng kết nối
        return $categories;
    }

    public function getById(){
        
    }

    public function insert(){

    }

    public function update(){

    }

    public function delete(){

    }
}
?>