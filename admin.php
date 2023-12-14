<?php
     session_start();
     ob_start();
     if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        .checked {
      background-image: url("check.svg");
      background-position: center;
      background-repeat: no-repeat;
    }
    </style>
</head>
<body>
<?php
    $conn = new mysqli('localhost', 'root', '', 'dacs');

    // Kiểm tra kết nối
    if (!$conn) {
      die('Kết nối thất bại: ' . mysqli_connect_error());
    } else {
      echo '<br>Kết nối thành công<br>';
    }
    
    // Truy vấn dữ liệu
    $sql = 'SELECT * FROM users';
    $result = mysqli_query($conn, $sql);


   
?>

    
<img src="images/logo-29.png" alt="" style="height: 100px; display: flex; justify-content: center">
    <a href="logout.php">Thoát tài khoản</a>

    <h1>Thông tin khách hàng</h1>

<table>

<input type="text" id="searchInput" placeholder="Tìm kiếm">
    <button onclick="searchProduct()">Tìm kiếm</button>
    <thead>
        <tr>
            <th>Tên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Cần tư vấn</th>
            
        </tr>
    </thead>
    <?php
                
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr> 

            <td><?php 
                echo $row['name1'] ;
             ?></td>

            <td><?php 
                echo $row['sdt'] ;
             ?></td>

<td><?php 
                echo $row['email'] ;
             ?></td>

<td><?php 
                echo $row['car'] ;
             ?></td>
           

           
            
            


<?php
                } 
            ?>



<script>
        function searchProduct() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementsByTagName("table")[0];
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
    </script>
</body>



</html>

<?php
     }else{
        header('location: 123.html');
     }
?>