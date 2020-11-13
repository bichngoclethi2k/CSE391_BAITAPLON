<?php
require_once('config.php');
 
if(!empty($_POST)){
    $id=$ho=$ten=$email=$chude=$noidung='';
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }
    if(isset($_POST['ho'])){
        $ho=$_POST['ho'];
    }

    if(isset($_POST['ten'])){
        $ten=$_POST['ten'];
    }

    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
    if(isset($_POST['chude'])){
        $chude=$_POST['chude'];
    }
    if(isset($_POST['noidung'])){
        $noidung=$_POST['noidung'];
    }
    
    $sql="INSERT INTO user(id,ho,ten,email,chude,noidung) 
    value('$id','$ho','$ten','$email','$chude','$noidung')";
    
    if (mysqli_query($conn, $sql)) {
        ?><script> alert('Thêm Dữ Liệu Thành Công');</script><?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    

} 

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
      <div class="container h-100 pt-3">
        <div class="row h-100 justify-content-center ">
            <form action="" method="post">
                <h2>THÊM MỚI</h2><br>
                <table>
                    <tr>
                        <td><label for=""><b>Id :</b></label></td>
                        <td><input type="number"  id="id" name="id"required></td>
                    </tr>
                    <tr>
                        <td><label for=""><b>Họ :</b></label></td>
                        <td><input type="text" id="ho" name="ho"required></td>
                    </tr>
                    <tr>
                        <td><label for=""><b>Tên :</b></label></td>
                        <td><input type="text" id="ten" name="ten"required></td>
                    </tr>
                    <tr>
                        <td><label for=""><b>Email :</b></label></td>
                        <td><input type="text"  id="email" name="email"required></td>
                    </tr>
                    <tr>
                        <td><label for=""><b>Chủ Đề :</b></label></td>
                        <td><input type="text" id="chude" name="chude" required ></td>
                    </tr>
                    <tr>
                        <td><label for=""><b>Nội Dung :</b></label></td>
                        <td><textarea name="noidung" id="noidung" rows="4" cols="25" required></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <button name="save" class="btn text-white" style="background: #839b97;">Save</button>
                        </td>
                        <td>
                            <a href="user.php"  class="btn text-white " style="background:#34626c">Back</a>
                        </td>
                    </tr>
                </table>
            
            </form>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>