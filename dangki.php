<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin đăng ký xe</title>
    <style>
       body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f2f2f2; /* Màu nền của trang */
    font-family: monospace;
}

.container {
    text-align: center;
    background-color: #fff; /* Màu nền của container */
    padding: 20px;
    border-radius: 10px; /* Độ cong góc của container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Đổ bóng */
}

form {
    display: flex;
    flex-direction: column;
    max-width: 300px; /* Chiều rộng tối đa của form */
    margin: 0 auto;
}

label {
    margin-bottom: 5px;
    color: rgb(0, 9, 91);
}

input,
textarea {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc; /* Viền của input */
    border-radius: 5px; /* Độ cong góc của input */
}

button {
    background-color: rgb(0, 9, 91);
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px; /* Độ cong góc của button */
    cursor: pointer;
}

button:hover {
    background-color: rgb(0, 29, 91);
}
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy giá trị của các input
  $name = $_POST["name"];
  $email = $_POST["email"];
  $user = $_POST["user"];
  $pass = $_POST["pass"];

  // Kết nối cơ sở dữ liệu
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dacs";

  // Tạo kết nối
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Kiểm tra kết nối
  if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
  }

  // Kiểm tra dữ liệu
  if (empty($name) || empty($email) || empty($user) || empty($pass)) {
    // Thông báo lỗi
    echo "Vui lòng nhập đầy đủ thông tin";
  } else {
    // Tạo câu lệnh SQL
    $sql = "INSERT INTO `account`(`name`, `email`, `user`, `pass`) VALUES ('$name', '$email', '$user', '$pass')";

    // Thực thi câu lệnh SQL
    $conn->query($sql);

    // Kiểm tra kết quả
    $result = mysqli_affected_rows($conn);

    // Chuyển hướng đến trang 
    if ($result > 0) {
      header("Location: login.php");
    } else {
      // Hiển thị lỗi
      echo "<p style='color: red'>Có lỗi xảy ra. Vui lòng thử lại sau. (". mysqli_error($conn) .")</p>";
    }
  }

  // Đóng kết nối
  mysqli_close($conn);
}
  
  ?>

    <div class="container">
    <a href="index.php"><img src="images/logo-29.png" alt="" style="height: 100px;"></a>
    <h2 style="font-family: monospace; color: rgb(0, 9, 91);">Đăng kí tài khoản người dùng </h2>
    <h2 style="font-family: monospace; color: rgb(0, 9, 91);">Nhận nhiều ưu đãi!</h2>
    </div>
    
    <div class="container">
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name">Họ và tên:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="user">Tên đăng nhập:</label>
    <input type="text" id="user" name="user" required>

    <label for="pass">Mật khẩu:</label>
    <input type="password" id="pass" name="pass" required>

    <button type="submit">Gửi đăng ký</button>
  </form>
</div>
</body>
</html>