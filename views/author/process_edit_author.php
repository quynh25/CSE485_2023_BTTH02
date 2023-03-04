<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "btth02_cse485";
    $conn = new mysqli($servername, $username, $password,$database);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["btnSave"])){
        $matgia = $_POST["txtId"];
        $tentgia = $_POST["txtName"];
    }

    $sql = "UPDATE tacgia SET ten_tgia = '$tentgia' WHERE ma_tgia = '$matgia'";
    if (mysqli_query($conn, $sql)){
        // echo "Connected successfully";
        header('location: ../admin/author.php');
    }
    else {
        $result = "Cập nhật chưa thành công" .mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>