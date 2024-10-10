<?php
$conn=mysqli_connect("localhost","root","","data4");
if($conn){
	echo("เชื่อมได้");
	mysqli_query($conn,"SET NAMES UTF8");
}
else{
	echo("ไม่ได้");
}
?>