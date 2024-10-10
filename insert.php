<?php
include_once("connect.php");
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$s=mysqli_query($conn,"insert into product (id,name,price) values ('$id','$name','$price')");
if($s){
	echo "เพิ่มได้กลับบ้าน";
}
else{
	echo "เพิ่มไม่ได้อยู่ต่อ";
}
?>