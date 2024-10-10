<?php
include_once("connect.php");
$id_user=$_REQUEST['id_user'];
$picc=$_POST['picc'];
$name_user=$_POST['name_user'];
$username=$_POST['username'];
$password=$_POST['password'];
$type_u=$_POST['type_u'];
$proin=implode(",",$_POST['proin']);
$tel=$_POST['tel'];
$address=$_POST['address'];
$pic=$_FILES['pic']['name'];
if($_FILES['pic']['name']!=""){
$name_file =  $_FILES['pic']['name'];
$tmp_name =  $_FILES['pic']['tmp_name'];
$location_img ="pic/";
move_uploaded_file($tmp_name,$location_img.$name_file);
}
else{
$name_file=$picc;
}
$s=mysqli_query($conn,"update member set name_user='$name_user',username='$username',password='$password',type_u='$type_u',pro_interest='$proin',pic='$name_file',tel='$tel',address='$address' where id_user='$id_user'");
if($s){
	echo "แก้ไขได้กลับบ้าน";
	header("refresh:2; url=show_user.php");
 	exit(0);
}
else{
	echo "เพิ่มไม่ได้อยู่ต่อ";
}
?>