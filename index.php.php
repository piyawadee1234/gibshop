<?php
include_once("connect.php");
if(isset($_POST['search']))
{
	$ss=$_POST['search'];
	$s=mysqli_query($conn,"select * from member INNER JOIN typeuser ON(type_u=idType) where id_user like '%$ss%'");
}
else{
$s=mysqli_query($conn,"select * from member INNER JOIN typeuser ON(type_u=idType)");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p> แสดงข้อมูลสมาชิก</p>
<form action="show_user_search.php" method="post" name="form1" id="form1">
  ค้นหาข้อมูลจาก id :
  <input type="text" name="search" id="search">
  <input type="submit" name="submit" id="submit" value="ค้นหา">
  <a href="show_user_search.php">ดูข้อมูลทั้งหมด</a>
</form>
<table width="986" height="97" border="1">
  <tbody>
    <tr>
      <td width="115">id</td>
      <td width="121">ชื่อสมาชิก</td>
	  <td width="89">ชื่อผู้ใช้</td>
	  <td width="104">รหัสผ่าน</td>
      <td width="158">ประเภทสมาชิก</td>
      <td width="210">สินค้าที่สนใจ</td>
      <td width="81">รูปภาพ</td>
	  <td width="92">เบอร์โทร</td>
	  <td width="61">ที่อยู่</td>
	  <td width="62">แก้ไข</td>
	  <td width="46">ลบ</td>
    </tr>
	<?php
	  while($a=mysqli_fetch_array($s)){
	  $pro_interest = $a['pro_interest'];
	  $sExplode = explode(',',$pro_interest);
	?>
    <tr>
      <td><?php echo $a['id_user'];?></td>
      <td><?php echo $a['name_user'];?></td>
	  <td><?php echo $a['username'];?></td>
	  <td><?php echo $a['password'];?></td>
      <td><?php echo $a['nameType'];?></td>
      <td><?php echo $a['pro_interest'];?> 
		</td>
      <td><img src="pic/<?php echo $a['pic'];?>" width="50" height="50"></td>
	  <td><?php echo $a['tel'];?></td>
	  <td><?php echo $a['address'];?></td>
	  <td><a href="form_update.php?id_user=<?=$a['id_user']?>"><img src="pic/edit-icon.png" width="51" height="44" alt=""/></a></td>
	  <td><a href="delete1.php?id_user=<?=$a['id_user']?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่/ไม่');"><img src="delete_4219.png" width="50" height="40" alt=""/></a></td>
    </tr>
	<?php 
	  }
	?>
  </tbody>
</table>

<p><a href="formRegis.php">เพิ่มข้อมูลสมาชิก</a></p>
</body>
</html>
