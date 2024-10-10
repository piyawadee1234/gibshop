<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>แบบฟอร์มข้อมูลพนักงาน
</p>
<form action="tt2.php" method="post" name="form1" id="form1">
  <p>
    <label for="name">ชื่อ-สกุล:</label>
    <input name="name" type="text" id="name">
  </p>
  <p>เพศ: 
    <input name="a" type="radio" id="radio" value="ชาย" checked="checked">
    ชาย 
    <input name="a" type="radio" id="radio2" value="หญิง">
    <label for="a">หญิง </label>
  </p>
  <p>
    <label for="b">ที่อยู่:</label>
    <textarea name="b" cols="30" rows="10" id="b"></textarea>
  </p>
  <p>
    <label for="c">ระดับการศึกษา:</label>
    <select name="c" id="c">
      <option value="ตรี">ตรี</option>
      <option value="โท">โท</option>
      <option value="เอก">เอก</option>
    </select>
  </p>
  <p>งานอดิเรก: 
    <input name="d[]" type="checkbox" id="d[]" value="อ่านหลังสือ">
    อ่านหนังสือ 
    <input name="d[]" type="checkbox" id="d[]" value="ฟังเพลง">
    <label for="d[]">ฟังเพลง 
      <input name="d[]" type="checkbox" id="d[]" value="ดูหนัง">
    ดูหนัง</label></p>
  <p>
    <label for="e">เบอร์โทร:</label>
    <input type="tel" name="e" id="e">
  </p>
  <p>
    <label for="f">Email:</label>
    <input type="email" name="f" id="f">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="เพิ่มข้อมูล">
    <input type="reset" name="reset" id="reset" value="ยกเลิก">
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>