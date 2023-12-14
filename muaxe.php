<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
    echo '<div style="font-size: 200%;text-align: center;">
    <h1 style="font-family: monospace; color: rgb(0, 9, 91);">Cảm ơn bạn đã quan tâm tới sản phẩm của chúng tôi!</h1>
    <h2 style="font-family: monospace; color: rgb(0, 9, 91);">Nếu muốn có bất kì thắc mắc về sản phẩm liên hệ ngay:0905676172</h2>
    <h2 style="font-family: monospace; color: rgb(0, 9, 91);">Để lại thông tin cho chúng tôi về sản phẩm bạn quan tâm <a href="formuser.php">Tại Đây</a> </h2>
    <img src="images/logo-29.png" alt="" style="height: 100px;">
  </div>';
} else {
  ?>
<div style="font-size: 500%;text-align: center;">
  <div style='font-family: monospace; color: rgb(0, 9, 91); text-decoration: none;'>Vui Lòng Đăng Nhập để sử dụng chức năng này</div>

<a href="login.php">
<span style="font-family: monospace;">Đăng Nhập</span>
</a>
</div>
  <?php
} 
?>
    
</body>
</html>