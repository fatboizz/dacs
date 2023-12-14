<?php
    session_start();

    // Xóa session
    session_unset();
    session_destroy();
    
    // Chuyển hướng người dùng đến trang chủ
    header('location: indexuser.php');
?>