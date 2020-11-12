<?php
require_once('config.php');
 
if(!empty($_POST)){
    $id=$chude=$noidung=$hinhanh=$tacgia=$thoigiandang='';
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }
    if(isset($_POST['chude'])){
        $chude=$_POST['chude'];
    }

    if(isset($_POST['noidung'])){
        $noidung=$_POST['noidung'];
    }

    if(isset($_POST['hinhanh'])){
        $hinhanh=$_POST['hinhanh'];
    }
    if(isset($_POST['tacgia'])){
        $tacgia=$_POST['tacgia'];
    }
    if(isset($_POST['thoigiandang'])){
        $thoigiandang=$_POST['thoigiandang'];
    }
    
    $sql="INSERT INTO baiviet(id,chude,noidung,hinhanh,tacgia,thoigiandang) 
    value('$id','$chude','$noidung','$hinhanh','$tacgia','$thoigiandang')";
    
    
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    html,body{
      font-family:'Times New Roman', Times, serif;;
    }
  </style> 
</head>
  <body>
    <nav class="navbar navbar-expand-sm bg-secondary ">
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
        <a class="nav-link text-white"style="font-size: 18px;margin:22px" href="new_post.php"><b> Đăng Bài</b> </a>
      </li>
      <li>
        <a href="index.php"><i class="fas fa-sign-in-alt fa-2x" style="margin-top: 40px; margin-left:800px; color:aliceblue; " ></i></a>
      </li>
      
    </ul>

    </nav> 
	<div class="container" style="width:100%; max-width:900px; ">
		<div class="panel panel-default">
				<div class="panel-heading"><h3><b> Tạo Bài Viết </b></h3></div>
				<div class="panel-body" >
					<form action="" method="post">
						
							<div class="form-group" >
								<label>ID Bài Viết</label>
								<input type="text" name="id" class="form-control" required />
              </div>
              
							<div class="form-group">
								<label>Chủ Đề Bài Viết</label>
								<input type="text" name="chude" class="form-control" required />
							</div>
					    
							<div class="form-group">
    							<label for="exampleFormControlTextarea1">Nội Dung Bài Viết</label>
    							<textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="noidung"></textarea>
              </div>
                
							<div class="form-group">
							    <label for="exampleFormControlFile1">Hình Ảnh</label>
							    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="hinhanh">
              </div>

              <div class="form-group">
								<label>Tác Giả</label>
								<input type="text" name="tacgia"s class="form-control" required />
              </div>
              
		          <div class="form-group" >
                <input type="submit" name="new_post" id="register" value="Tạo bài viết" class="btn btn-info" />
							</div>
                                            
					</form>
				</div>
			</div>
		</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
	
