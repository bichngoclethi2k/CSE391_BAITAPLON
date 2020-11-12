<?php
require('config.php');
$id=$_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM baiviet where id='$id'");
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
  </head>
  <body>
  <div class="text-center">
        <h3>Sửa Bài Viết</h3>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Id</label>
                <input type="number"  id="id" name="id"value="<?php echo $row['id'] ; ?>">
            </div>
              
			<div class="form-group">
                <label for="">Chủ Đề</label>
                <input type="text"  id="id" name="chude"value="<?php echo $row['chude'] ; ?>">
            </div>
					    
			<div class="form-group">
                <label for="">Nội Dung</label>
                <input type="text"  id="id" name="noidung"value="<?php echo $row['noidung'] ; ?>">
            </div>
                
			<div class="form-group">
				<label for="">Hình Ảnh</label>
				<input type="file"  id="" name="hinhanh"value="<?php echo $row['noidung'] ; ?>">
            </div>

            <div class="form-group">
                <label for="">Tác Giả</label>
                <input type="text"  id="id" name="tacgia"value="<?php echo $row['tacgia'] ; ?>">
            </div>

            <div class="form-group">
                <label for="">Thời Gian Đăng</label>
                <input type="datetime-local"  id="id" name="thoigiandang"value="<?php echo $row['thoigiandang'] ; ?>">
            </div>
            <button name='update'>Save</button>
            <a href="post.php"  class="btn btn-primary">Back</a>
            <?php
                if (isset($_POST['update'])){
                $id=$_GET['id'];
                $chude=$_POST['chude'];
                $noidung=$_POST['noidung'];
                $hinhanh=$_POST['hinhanh'];
                $tacgia=$_POST['tacgia'];
                $thoigiandang=$_POST['thoigiandang'];
                $conn = new mysqli("localhost", "root", "", "baitaplon");
                
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "UPDATE baiviet SET chude='$chude',noidung='$noidung', hinhanh='$hinhanh', tacgia='$tacgia', thoigiandang='$thoigiandang' WHERE id='$id'";
                
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