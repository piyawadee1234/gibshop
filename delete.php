<?php
include_once("connect.php");
$id_user=$_GET['id_user'];
$sql="delete from member where id_user='$id_user'";
$a=mysqli_query($conn,$sql);
header("refresh:2; url=show_user.php");
exit(0);
?>