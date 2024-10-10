<?php
include_once("connect.php");
$s=mysqli_query($conn,"select * from product");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p> แสดงข้อมูลสินค้า</p>
<table width="200" border="1">
  <tbody>
    <tr>
      <td>&nbsp;รหัส</td>
      <td>&nbsp;ชื่อ</td>
      <td>&nbsp;ราคา</td>
    </tr>
	<?php
	  while($a=mysqli_fetch_array($s)){
	?>
    <tr>
      <td><?php echo $a['id'];?></td>
      <td><?php echo $a['name'];?></td>
      <td><?php echo $a['price'];?></td>
    </tr>
	<?php 
	  }
	?>
  </tbody>
</table>

<p>&nbsp;</p>
</body>
</html>
