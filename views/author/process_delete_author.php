<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "btth02_cse485";
    $conn = new mysqli($servername, $username, $password,$database);
    
    $id = $_GET['id'];

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM tacgia WHERE ma_tgia = '$id'";
    if (mysqli_query($conn, $sql)){
        echo "Connected successfully";
    }
    else {
        echo "Connected not successfully";
        // $result = "Xóa không thành công" .mysqli_error($conn);
    }
    mysqli_close($conn);
    
    header('location: ../admin/author.php');
?>