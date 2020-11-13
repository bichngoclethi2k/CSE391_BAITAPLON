<?php
require_once('config.php');
$sql= "SELECT * FROM dangnhap";
$result= mysqli_query($conn,$sql);
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
      <div class="container h-100 mt-3" >
        <div class="row h-100 justify-content-center "style="margin-top: 150px;">
          <form action="login_submit.php" method="post">
              <h2>ĐĂNG NHẬP</h2><br>
              <table>
                <tr>
                  <td><label for=""><b>Account :  </b></label></td>
                  <td><input type="text" name="name"></td>
                </tr>
                <tr>
                  <td><label for=""><b>Password :</b></label></td>
                  <td><input type="password" name="pass" id=""></td>
                </tr>
                <tr>
                  <td><button type="submit" name="submit" class="btn btn-secondary">Login</button></td>
                  <td><input type="reset" value="Reset" class="btn btn-outline-secondary"></td>
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

