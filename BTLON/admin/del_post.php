<?php
include_once('config.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM baiviet WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
header('location: post.php');
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>