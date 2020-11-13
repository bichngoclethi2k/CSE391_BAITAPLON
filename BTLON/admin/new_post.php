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
      font-family:'Times New Roman', Times, serif;
    }
  </style> 
</head>
  <body>
   
	<div class="container pt-3" style="width:100%; max-width:900px;margin-top: 30px; ">
		<div class="panel panel-default" >
				<div class="panel" style="background: #d9e4dd;text-align: center; padding: 30px; "><h1><b> Tạo Bài Viết </b></h1></div>
				<div class="panel-body" >
					<form action="" method="post">
						
							<div class="form-group" >
								<label><h3> <b> ID Bài Viết </b></h3> </label>
								<input type="text" name="id" class="form-control" required />
              </div>
              
							<div class="form-group">
								<label> <h3><b> Chủ Đề Bài Viết</b></h3></label>
								<input type="text" name="chude" class="form-control" required />
							</div>
					    
							<div class="form-group">
    							<label for=""><h3><b>Nội Dung Bài Viết</b></h3> </label>
    							<textarea class="form-control" id="" rows="7" name="noidung"required></textarea>
              </div>
                
							<div class="form-group">
							    <label for="exampleFormControlFile1"><h3><b>Hình Ảnh</b></h3> </label>
							    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="hinhanh" style="font-size: 15px">
              </div>

              <div class="form-group">
								<label><h3><b> Tác Giả</b></h3></label>
								<input type="text" name="tacgia"s class="form-control" required />
              </div>
              
		          <div class="form-group" >
                <input type="submit" name="new_post" id="register" value=" Tạo Bài Viết" class="btn text-white" style="font-size: 20px; background: #34626c;" />
                <input type="reset" value="Reset" class="btn text-white" style="font-size: 20px; background: #34626c;">
                <a href="post.php"  class="btn text-dark " style="font-size: 20px;background:#cfd3ce">Back</a>
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
	
