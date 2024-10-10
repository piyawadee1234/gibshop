<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>สมัครสมาชิก</p>
<form action="insertRegis.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
  <table width="317" border="1">
    <tbody>
      <tr>
        <td width="88">ชื่อ-สกุล</td>
        <td width="213"><input type="text" name="name_user" id="name_user"></td>
      </tr>
      <tr>
        <td>username</td>
        <td><input type="text" name="username" id="username"></td>
      </tr>
      <tr>
        <td>password</td>
        <td><input type="password" name="password" id="password"></td>
      </tr>
      <tr>
        <td>ประเภทสมาชิก</td>
        <td><p>
            <input type="radio" name="type_u" value="1">
            ทั่วไป
        </p>
          <p>
            <input type="radio" name="type_u" value="2">
            VIP
          </p>
          <p>
            <input type="radio" name="type_u" id="radio" value="3">
            <label for="type_u">Premium</label>
          </p></td>
      </tr>
      <tr>
        <td>สินค้าที่สนใจ</td>
        <td><input name="proin[]" type="checkbox" id="proin[]" value="อาหารสำเร็จรูป">
        <label for="proin[]">อาหารสำเร็จรูป<br>
          <input name="proin[]" type="checkbox" id="proin[]" value="เครื่องดื่ม">
          เครื่องดื่ม<br>
          <input name="proin[]" type="checkbox" id="proin[]" value="ผลิตภัณฑ์ดูแลเส้นผม">
          ผลิตภัณฑ์ดูแลเส้นผม<br>
          <input name="proin[]" type="checkbox" id="proin[]" value="ผลิตภัณฑ์บำรุงผิว">
        ผลิตภัณฑ์บำรุงผิว<br>
        <input name="proin[]" type="checkbox" id="proin[]" value="ผลิตภัณฑ์ดูแลบ้าน">
        ผลิตภัณฑ์ดูแลบ้าน</label></td>
      </tr>
	  <tr>
	  	<td>รูปภาพ</td>
		<td><input type="file" name="pic"></td>
	  </tr>
      <tr>
        <td>เบอร์โทร</td>
        <td><input name="tel" type="text" id="tel" placeholder="08XXXXXXXX" maxlength="10"></td>
      </tr>
      <tr>
        <td>ที่อยู่</td>
        <td><textarea name="address" id="address"></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="เพิ่ม"></td>
        <td><input type="reset" name="reset" id="reset" value="ยกเลิก"></td>
      </tr>
    </tbody>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
