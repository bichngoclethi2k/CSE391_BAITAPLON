<?php
require_once('config.php');

if (isset($_POST["submit"]) && $_POST['name']!=''&& $_POST['pass'] !=''){
 $name= $_POST['name'];
 $pass=$_POST['pass'];
 $pass= md5($pass);
 $sql="SELECT * FROM dangnhap where name='$name' AND pass='$pass'";
 $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        
        echo "<script>alert('Bạn Đã Đăng Nhập Thành Công!');alert('Xin Chào Admin!'); window.location='form.php'</script>";
    }
    else{
        echo "<script>alert('Bạn nhập sai password or name!'); window.location='index.php'</script>";
    }
}
else{
    echo "<script>alert('Bạn Chưa Nhập!'); window.location='index.php'</script>";
    
}
?>