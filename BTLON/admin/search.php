<?php
 require_once('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Search</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    html,body{
      font-family:'Times New Roman', Times, serif;;
    }
  </style>
</head>
    <body>
        <nav class="navbar navbar-expand-sm " style="background:#34626c;">
        <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link text-white " style="font-size: 18px; margin:22px" href="form.php"> <b> Trang Chủ </b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" style="font-size: 18px;margin:22px"href="user.php"><b> User</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white"style="font-size: 18px;margin:22px" href="search.php"><b> Tìm Kiếm</b> </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white"style="font-size: 18px;margin:22px" href="post.php"><b> Bài Đăng</b> </a>
        </li>
        <li>
            <a href="index.php"><i class="fas fa-sign-in-alt " style="margin-top: 30px; margin-left:750px; color:aliceblue;font-size: 21px  " ></i></a>
        </li>
        
        </ul>

        </nav><br>
    <div class="container">
        <div class="text-center">
            <form action="search.php" method="get">
                 <input type="text" name="search" placeholder="Enter name" />
                <input type="submit" name="ok" value="Search" class="btn text-white " style="background: #839b97;" > 
            </form>
        </div>
        <?php
        
        if (isset($_GET['ok'])) 
        {
            
            $search = addslashes($_GET['search']);
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
               
                $query = "SELECT * from user WHERE ten like '%$search%'";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result);
                $num= mysqli_num_rows($result);
                if ($row > 0 && $search != "") 
                {  
                     echo " Ket qua tra ve voi tu khoa <b>$search</b>"; 
                   ?> 
                   <table  class="table table-striped ">
                        <tr>
                            <th>Id</th>
                            <th>Họ</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Chủ Đề</th>
                            <th>Nội Dung</th>
                            
                            
                        </tr>
                    <?php
                    while($row=mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['ho'];?></td>
                        <td><?php echo $row['ten'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['chude'];?></td>
                        <td><?php echo $row['noidung'];?></td>
                        
                    </tr>
                <?php
                    }
                
                 } 
                else {
                    echo "<script>alert('Không Tìm Thấy Kết Quả!'); window.location='search.php'</script>";
                }
            }
        }
        ?>   
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>