<?php
require('config.php');
$id=$_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM user where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    html,body{
      font-family:'Times New Roman', Times, serif;
    }
  </style> 
  </head>
  <body>
  <div class="container h-100 " style="margin-top: 60px;">
    <div class="row h-100 justify-content-center ">
        <form action="" method="post">
          <h3>Sửa Dữ Liệu</h3> <br>
          <table>
            <tr>
              <td><label for=""><b> Id</b></label></td>
              <td><input type="number"  id="id" name="id"value="<?php echo $row['id'] ; ?>"></td>
            </tr>
            <tr>
              <td><label for=""><b>Ho</b></label></td>
              <td><input type="text" id="ho" name="ho"value="<?php echo $row['ho'] ; ?>"></td>
            </tr>
            <tr>
              <td><label for=""><b>Ten</b></label></td>
              <td><input type="text" id="ten" name="ten"value="<?php echo $row['ten'] ; ?>"></td>
            </tr>
            <tr>
              <td><label for=""><b>Email</b></label></td>
              <td><input type="text"  id="email" name="email"value="<?php echo $row['email'] ; ?>"></td>
            </tr>
            <tr>
              <td><label for=""><b>Chude</b></label></td>
              <td><input type="text" id="chude" name="chude" value="<?php echo $row['chude'] ; ?>"></td>
            </tr>
            <tr>
              <td><label for=""><b>Noidung</b></label></td>
              <td><input type="text" id="noidung" name="noidung" value="<?php echo $row['noidung'] ; ?>"></td>
            </tr>
            <tr>
              <td><button name='update'class="btn text-white" style="background: #839b97;">Save</button></td>
              <td><a href="user.php"  class="btn text-white " style="background:#34626c">Back </a></td>
            </tr>
            <?php
                if (isset($_POST['update'])){
                $id=$_GET['id'];
                $ho=$_POST['ho'];
                $ten=$_POST['ten'];
                $email=$_POST['email'];
                $chude=$_POST['chude'];
                $noidung=$_POST['noidung'];
                $conn = new mysqli("localhost", "root", "", "baitaplon");
                
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "UPDATE user SET ho='$ho',ten='$ten', email='$email', chude='$chude', noidung='$noidung' WHERE id='$id'";
                
                if ($conn->query($sql) === TRUE) {
                 ?> <script> alert('Đã Cập Nhật Thành Công'); </script><?php
                } else {
                echo "Error updating record: " . $conn->error;
                }
                
                $conn->close();
                }
                ?>
           <!--  <button>quaylai</button> -->
        </form>
        
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>