<?php 
function condb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=dacs", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        // Xử lý lỗi nếu có
        echo "Kết nối không thành công: " . $e->getMessage();
    }
    return $conn;
} 
?>