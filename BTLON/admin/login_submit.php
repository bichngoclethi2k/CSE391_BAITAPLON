<?php
require_once('config.php');

if (isset($_POST["submit"]) && $_POST['name']!=''&& $_POST['pass'] !=''){
 $name= $_POST['name'];
 $pass=$_POST['pass'];
 $pass= md5($pass);
 $sql="SELECT * FROM dangnhap where name='$name' AND pass='$pass'";
 $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo "ban da dang nhap thanh cong";
        header("location:form.php");
    }
    else{
        echo" ban nhap sai ";
    }
}
else{
    header("location:index.php");
}
?>