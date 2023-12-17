<?php
    session_start();
    ob_start();
    include "condb.php";
    include "user.php";
    
    if (isset($_POST['dangnhap'])) {

        // Lấy thông tin đăng nhập từ form
        $user = $_POST['user'];
        $pass = $_POST['pass'];
      
        // Kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "dacs");
        $sql = "SELECT * FROM account WHERE user='".$user."' AND pass='".$pass."'";
        $result = mysqli_query($conn, $sql);
      
        // Nếu thông tin đăng nhập chính xác
        if (mysqli_num_rows($result) > 0) {
      
          // Lấy vai trò của người dùng
          $row = mysqli_fetch_assoc($result);
          $role = $row['role'];
      
          // Gán vai trò cho người dùng
          $_SESSION['role'] = $role;
      
          // Chuyển hướng người dùng đến trang tương ứng với vai trò của họ
          if ($role == 1) {
            header("location: admin.php");
          } else if ($role == 0) {
            $_SESSION['user']=$user;
            header("location: index.php");
          } else {
            header("location: user.php");
          }
      
        } else {
      
          // Thông báo lỗi
          $txt_erro= "Tên người dùng hoặc mật khẩu không chính xác!";
      
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="height: 120px;">
    <div class="logo1">
    <p><img class="logo" src="images/logo-29.png" alt=""></p>
    <H4>MECXIDEC</H4>
    </div>


    <div class="menu" >
        <a style="font-family: monospace;" href="index.php">Sản Phẩm</a>
    </div>

    <div class="menu" >
        <a style="font-family: monospace;" href="muaxe.php">Mua Xe</a>
    </div>
      
    <div class="menu">
      <a style="font-family: monospace;" href="login.php">Đăng Nhập</a>
    </div>
    
</div>

<div class="body1" style="display: flex;
    align-items: center;
    justify-content: center;
    height: 60vh;
    margin: 0;">
<div class="login-container" style=" background-color: #fff;padding: 20px;border-radius: 8px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 style=" text-align: center;color: #333;">Login</h2>
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="display: flex;
                                                                               flex-direction: column;">
            <label for="username" style="margin-bottom: 8px;color: #555;">Username:</label>
            <input type="text" id="username" name="user" required style=" padding: 10px;margin-bottom: 16px;border: 1px solid #ddd;border-radius: 4px;">

            <label for="password" style="margin-bottom: 8px;color: #555;">Password:</label>
            <input type="password" id="password" name="pass" required style=" padding: 10px;margin-bottom: 16px;border: 1px solid #ddd;border-radius: 4px;">

            <input class="button" type="submit" name="dangnhap" value="Đăng Nhập" style=" background-color: #007bff;color: #fff;padding: 10px;border: none;border-radius: 4px;cursor: pointer;">
            <br>
            <?php 
                if(isset($txt_erro)&&($txt_erro!="")){
                    echo "<font color='red'>".$txt_erro."</font>";
                }
            ?>
        </form>
        <p style="text-align: center">Chưa có Tài Khoản? <a href="dangki.php" >Đăng kí ngay!</a></p>
</div>
</div>
</body>
</html>