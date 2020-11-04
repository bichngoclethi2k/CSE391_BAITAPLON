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
    echo"da dang ky thanh cong";
}
else{
    header("location:dangky.php");
}

?>