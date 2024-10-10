<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>ตารางเพิ่มข้อมูล</p>
<form action="insert.php" method="post" name="form1" id="form1">
  <table width="302" height="162" border="1">
    <tbody>
      <tr>
        <td width="124">รหัสสินค้า</td>
        <td width="181"><input type="text" name="id" id="id"></td>
      </tr>
      <tr>
        <td>ชื่อ-สกุล</td>
        <td><input type="text" name="name" id="name"></td>
      </tr>
      <tr>
        <td>ราคา</td>
        <td><input type="text" name="price" id="price"></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="OK"></td>
        <td><input type="reset" name="reset" id="reset" value="cancle"></td>
      </tr>
    </tbody>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>