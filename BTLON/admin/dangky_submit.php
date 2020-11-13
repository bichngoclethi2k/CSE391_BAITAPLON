<?php
require_once("config.php");
if(isset($_POST['submit']) && $_POST['name'] !='' && $_POST['pass'] != '' && $_POST['repass'] != ''){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];
    if ($pass != $repass){
        header("location:dangky.php");
    }
    $sql="SELECT * from dangnhap where name='$name'";
    $old= mysqli_query($conn,$sql);
    $pass= md5($pass);
    if(mysqli_num_rows($old)>0){
        header("location:dangky.php");
    }
    $sql="INSERT INTO dangnhap (name, pass) value('$name','$pass')";
    mysqli_query($conn,$sql);
    echo "<script>alert('Bạn Đã Đăng Ký Thành Công!'); window.location='index.php'</script>";
}
else{
    echo "<script>alert('Bạn Nhập Sai'); window.location='dangky.php'</script>";
    
}

?>