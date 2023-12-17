<?php
   session_start();
  
   if (isset($_SESSION['user'])) {
     // Lấy thông tin người dùng từ biến phiên
     $user = $_SESSION['user'];
   
     // Hiển thị thông tin người dùng
     //echo "<div class='menu'>Tên người dùng: $user</div>";
   } else {
     // Người dùng chưa đăng nhập
     //echo "<div class='menu'><a style='font-family: monospace;' href='login.php'>Đăng Nhập</a></div>";
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/924cd6ccfb.js" crossorigin="anonymous"></script>
</head>
<body>
   
   <div style="height: 120px;">
    <div class="logo1">
    <p><img class="logo" src="images/logo-29.png" alt=""></p>
    <H4>MECXIDEC</H4>
    </div>


    <div class="menu" >
        <a style="font-family: monospace;" href="">Sản Phẩm</a>
    </div>

    <div class="menu" >
        <a style="font-family: monospace;" href="muaxe.php">Mua Xe</a>
    </div>

    <?php
if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
  echo "<div class='menu' style='font-family: monospace; color: rgb(0, 9, 91); text-decoration: none;'>Xin Chào $user</div>";

     echo '<a href="logout.php">
  <span style="font-family: monospace;">Đăng Xuất</span>
  </a>';
} else {
  ?>
  <div class="menu">
    <a style="font-family: monospace;" href="login.php">Đăng Nhập</a>
  </div>
  <?php
} 
?>


    
   </div>

   
    <div class="slide">
        <h1 style="font-family: monospace;">Các dòng xe chúng tôi phân phối</h1>

    
    </div>

    <div class="container">
        <img id="showxe" src="images/vehicle-range-section-3-small.avif" alt="Avatar" class="image">
        <div class="overlay">
            <img id="showxe1" src="images/vehicle-range-section-3-small.avif" alt="Avatar" class="image">
          <div class="text">Territory<br><br>
            <a id="in4" href="territory.html">Tìm hiểu thêm
              <i id="icon"  class="fa-solid fa-right-to-bracket"></i>
            </a></div>
        </div>
    </div>

    <div class="container">
        <img id="showxe" src="images/raptor-card-mobile.avif" alt="Avatar" class="image">
        <div class="overlay">
            <img id="showxe1" src="images/raptor-card-mobile.avif" alt="Avatar" class="image">
          <div class="text">Raptor<br><br>
            <a id="in4" href="raptorin4.html">Tìm hiểu thêm
              <i id="icon"  class="fa-solid fa-right-to-bracket"></i>
            </a></div>
        </div>
    </div>

    <div class="container">
        <img id="showxe" src="images/ranger-card-mobile.avif" alt="Avatar" class="image">
        <div class="overlay">
            <img id="showxe1" src="images/ranger-card-mobile.avif" alt="Avatar" class="image">
          <div class="text">Ranger<br><br>
            <a id="in4" href="ranger.html">Tìm hiểu thêm
              <i id="icon"  class="fa-solid fa-right-to-bracket"></i>
            </a></div>
        </div>
    </div>

    <div class="container">
        <img id="showxe" src="images/everest-card-mobile.avif" alt="Avatar" class="image">
        <div class="overlay">
        <img id="showxe1" src="images/everest-card-mobile.avif" alt="Avatar" class="image">
          <div class="text">Everest<br><br>
            <a id="in4" href="everest.html">Tìm hiểu thêm
              <i id="icon"  class="fa-solid fa-right-to-bracket"></i>
            </a></div>
        </div>
    </div>

    <div class="container">
        <img id="showxe" src="images/vehicle-range-section-6-small.webp" alt="Avatar" class="image">
        <div class="overlay">
            <img id="showxe1" src="images/vehicle-range-section-6-small.webp" alt="Avatar" class="image">
          <div class="text">Transit <br><br>
            <a id="in4" href="transit.html">Tìm hiểu thêm
              <i id="icon"  class="fa-solid fa-right-to-bracket"></i>
             </a>
            
          </div>
        </div>
    </div>

      
    <div class="choose">
        <h2>Lựa chọn chiếc xe dành cho bạn</h2>

        <table >
          
          <tr>
            <input type="text" id="searchTerm" placeholder="Nhập từ khóa tìm kiếm">
            <button onclick="searchByH3()">Tìm kiếm</button>
             
          </tr>
        </table>

    </div>
   

  <div class="container1" >
      <div  class="sanpham">
        <a style="text-decoration: none;" href="">
        <div><img src="images/ranger.avif" alt="">
          <h3 style="color:rgb(0, 9, 91); text-align: center;">Ranger Thế Hệ Mới</h3>
          <p style="text-align: center; color: black;">Ranger XL 2.0L 4X4 MT</p>
          <p style="text-align: center; color: black;">Giá từ 669,000,000</p>
        </a>
    </div></div>
    
      <div class="sanpham">
        <a style="text-decoration: none;" href="">
        <div style=""><img src="images/territorythm.avif" alt="">
          <h3 style="color:rgb(0, 9, 91); text-align: center;">Territory Thế Hệ Mới</h3>
          <p style="text-align: center; color: black;">Territory Titanium X 1.5L AT</p>
          <p style="text-align: center; color: black;">Giá từ 954,000,000</p>
        </a>
      </div></div>


  <div class="sanpham">
    <a style="text-decoration: none;" href="">
    <div style=""><img src="images/everest.avif" alt="">
      <h3 style="color:rgb(0, 9, 91); text-align: center;">Everest Thế Hệ Mới</h3>
      <p style="text-align: center; color: black;">Everest Titanium 2.0L AT 4x4</p>
      <p style="text-align: center; color: black;">Giá từ 1,468,000,000</p>
    </a>
  </div></div>

<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/territorythm.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Territory Thế Hệ Mới</h3>
    <p style="text-align: center; color: black;">Territory Trend 1.5L AT</p>
    <p style="text-align: center; color: black;">Giá từ 822,000,000</p>
  </a>
</div></div>

<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/everest.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Everest Thế Hệ Mới</h3>
    <p style="text-align: center; color: black;">Everest Wildtrak 2.0L AT 4x4</p>
    <p style="text-align: center; color: black;">Giá từ 1,499,000,000</p>
  </a>

 
</div></div>

<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/ranger.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Ranger</h3>
    <p style="text-align: center; color: black;">Ranger XLS 2.0L 4X2 AT</p>
    <p style="text-align: center; color: black;">Giá từ 707,000,000</p>
  </a>

 
</div></div>


<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/explorer-new.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Explorer</h3>
    <p style="text-align: center; color: black;">Limited 2.3 Ecoboost AT 4WD</p>
    <p style="text-align: center; color: black;">Giá từ 2,439,000,000</p>
  </a>

 
</div></div>


<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/ranger.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Ranger</h3>
    <p style="text-align: center; color: black;">Ranger Raptor 2.0L 4WD AT</p>
    <p style="text-align: center; color: black;">Giá từ 1,299,000,000</p>
  </a>

 
</div></div>

<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/ranger.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Ranger</h3>
    <p style="text-align: center; color: black;">Ranger Sport 2.0L AT 4X4</p>
    <p style="text-align: center; color: black;">Giá từ 864,000,000</p>
  </a>

 
</div></div>

<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/ranger.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Ranger</h3>
    <p style="text-align: center; color: black;">Ranger Wildtrak 2.0L AT 4X4</p>
    <p style="text-align: center; color: black;">Giá từ 979,000,000</p>
  </a>

 
</div></div>


<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/ranger.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Ranger</h3>
    <p style="text-align: center; color: black;">Ranger XLS 2.0L 4X2 MT</p>
    <p style="text-align: center; color: black;">Giá từ 665,000,000</p>
  </a>

 
</div></div>

<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/territorythm.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Territory</h3>
    <p style="text-align: center; color: black;">Territory Titanium 1.5L AT</p>
    <p style="text-align: center; color: black;">Giá từ 909,000,000</p>
  </a>

 
</div></div>


<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/ranger.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Ranger</h3>
    <p style="text-align: center; color: black;">Ranger XLT 2.0L 4X4 AT</p>
    <p style="text-align: center; color: black;">Giá từ 830,000,000</p>
  </a>

 
</div></div>

<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/transit-new.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Transit</h3>
    <p style="text-align: center; color: black;">Transit Tiêu chuẩn</p>
    <p style="text-align: center; color: black;">Giá từ 849,000,000</p>
  </a>

 
</div></div>


<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/everest.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Everest</h3>
    <p style="text-align: center; color: black;">Everest Sport 2.0L AT 4x2</p>
    <p style="text-align: center; color: black;">Giá từ 1,178,000,000</p>
  </a>

 
</div></div>


<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/everest.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Everest</h3>
    <p style="text-align: center; color: black;">Everest Ambiente 2.0L AT 4x2</p>
    <p style="text-align: center; color: black;">Giá từ 1,099,000,000</p>
  </a>

 
</div></div>


<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/ranger.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Ranger</h3>
    <p style="text-align: center; color: black;">Ranger XLS 2.0L 4X4 AT</p>
    <p style="text-align: center; color: black;">Giá từ 776,000,000</p>
  </a>

 
</div></div>


<div class="sanpham">
  <a style="text-decoration: none;" href="">
  <div style="">
    <img src="images/everest.avif" alt="">
    <h3 style="color:rgb(0, 9, 91); text-align: center;">Everest</h3>
    <p style="text-align: center; color: black;">Everest Titanium 2.0L AT 4x2</p>
    <p style="text-align: center; color: black;">Giá từ 1,299,000,000</p>
  </a>

 
</div></div>




    


          <!-- <img src="images/transit-new.avif" alt="">
          <img src="images/explorer-new.avif" alt="">
          <img src="images/territorythm.avif" alt="">
          <img src="images/titaniumthm.avif" alt=""> -->

  
  </div>



  <div class="under">
    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
    <a href=""><i class="fa-brands fa-youtube"></i></a>
    <a href=""><i class="fa-brands fa-instagram"></i></a>
    <a href=""><i class="fa-brands fa-tiktok"></i></a>
</div>

  
  <script>
   function searchByH3() {
  // Lấy giá trị từ ô input
  var searchTerm = document.getElementById("searchTerm").value;
  // Chuyển giá trị thành chữ thường để so sánh
  searchTerm = searchTerm.toLowerCase();

  // Lấy tất cả các thẻ H3
  var h3s = document.getElementsByTagName("h3");

  // Lặp qua từng thẻ H3 và kiểm tra xem nội dung có chứa searchTerm hay không
  for (var i = 0; i < h3s.length; i++) {
    var h3Text = h3s[i].textContent.toLowerCase();
    if (h3Text.indexOf(searchTerm) > -1) {
      // Tìm thấy thẻ H3 chứa searchTerm, hiển thị thẻ này
      h3s[i].parentElement.style.display = "block";
    } else {
      // Không tìm thấy thẻ H3 chứa searchTerm, ẩn thẻ div chứa thẻ này
      h3s[i].parentElement.style.display = "none";
    }
  }

  // Lặp qua tất cả các thẻ div có class sanpham
  var divs = document.querySelectorAll(".sanpham");

  // Tạo một thẻ div mới để chứa các thẻ div cần xếp lại
  var container = document.createElement("div");

  // Lặp qua tất cả các thẻ div cần xếp lại
  for (var i = 0; i < divs.length; i++) {
    // Thêm thẻ div vào thẻ container
    container.appendChild(divs[i]);
    // Thay đổi màu nền của thẻ div
    divs[i].style.display = "flex";
    divs[i].style.gridTemplateColumns = "repeat(5, 1fr)";
    divs[i].style.gridGap = "20px";
    divs[i].style.flexWrap = "wrap";
  }

  // Thêm thẻ container vào phần thân của trang
  document.body.appendChild(container);
}
    </script>
    

 

   
</body>
</html>