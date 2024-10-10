<?php
include_once("connect.php");
$name_user=$_POST['name_user'];
$username=$_POST['username'];
$password=$_POST['password'];
$type_u=$_POST['type_u'];
$proin=implode(",",$_POST['proin']);
$tel=$_POST['tel'];
$address=$_POST['address'];
$name_file =  $_FILES['pic']['name'];
$tmp_name =  $_FILES['pic']['tmp_name'];
$location_img ="pic/";
move_uploaded_file($tmp_name,$location_img.$name_file);
$s=mysqli_query($conn,"insert into member (name_user,username,password,type_u,pro_interest,pic,tel,address) values ('$name_user','$username','$password','$type_u','$proin','$name_file','$tel','$address')");
if($s){
	echo "เพิ่มได้กลับบ้าน";
	header("refresh:2; url=show_user.php");
 	exit(0);
}
else{
	echo "เพิ่มไม่ได้อยู่ต่อ";
}
?>