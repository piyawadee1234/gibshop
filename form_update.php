<!doctype html>
<?php
include_once("connect.php");
$id_user=$_GET['id_user'];
$s=mysqli_query($conn,"select * from member where id_user='$id_user'");
$a=mysqli_fetch_array($s);
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<p>สมัครสมาชิก</p>
<form action="edit.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
  <table width="317" border="1">
    <tbody>
      <tr>
        <td width="88">ชื่อ-สกุล</td>
        <td width="213"><input type="text" name="name_user" id="name_user" value="<?=$a['name_user']?>"></td>
      </tr>
      <tr>
        <td>username</td>
        <td><input type="text" name="username" id="username" value="<?=$a['username']?>"></td>
      </tr>
      <tr>
        <td>password</td>
        <td><input type="password" name="password" id="password" value="<?=$a['password']?>"></td>
      </tr>
      <tr>
        <td>ประเภทสมาชิก</td>
        <td>
          <p>
            <input name="type_u" type="radio" <?php if ($a['type_u']==1){echo "checked";}?> value="1">
            ทั่วไป
          </p>
          <p>
            <input type="radio" name="type_u" <?=($a['type_u']==2)?"checked":""?>  value="2">
            VIP
          </p>
          <p>
            <input type="radio" name="type_u" id="radio" <?=($a['type_u']==3)?"checked":""?>  value="3">
            <label for="type_u">Premium</label>
        </p></td>
      </tr>
      <tr>
        <td>สินค้าที่สนใจ</td>
		<td>
			  <p>
			  <?php
			$w=explode(",",$a['pro_interest']);		
			?>
			  <input name="proin[]" type="checkbox" id="proin[]" value="อาหารสำเร็จรูป" <?php 
					 foreach($w as $z){
					 if($z=="อาหารสำเร็จรูป"){
					 echo "checked";}}?>>
			  <label for="proin[]">อาหารสำเร็จรูป</label>
		  </p>
			  <p>
			    <input name="proin[]" type="checkbox" id="proin[]" value="เครื่องดื่ม" <?php 
					 foreach($w as $z){
					 if($z=="เครื่องดื่ม"){
					 echo "checked";}}?>>
			    เครื่องดื่ม<br>
  <input name="proin[]" type="checkbox" id="proin[]" value="ผลิตภัณฑ์ดูแลเส้นผม" <?php 
					 foreach($w as $z){
					 if($z=="ผลิตภัณฑ์ดูแลเส้นผม"){
					 echo "checked";}}?>>
			    ผลิตภัณฑ์ดูแลเส้นผม<br>
  <input name="proin[]" type="checkbox" id="proin[]" value="ผลิตภัณฑ์บำรุงผิว" <?php 
					 foreach($w as $z){
					 if($z=="ผลิตภัณฑ์บำรุงผิว"){
					 echo "checked";}}?>>
			    ผลิตภัณฑ์บำรุงผิว<br>
  <input name="proin[]" type="checkbox" id="proin[]" value="ผลิตภัณฑ์ดูแลบ้าน" <?php 
					 foreach($w as $z){
					 if($z=="ผลิตภัณฑ์ดูแลบ้าน"){
					 echo "checked";}}?>>
			    ผลิตภัณฑ์ดูแลบ้าน </p>		  </p>
		</td>
      </tr>
	  <tr>
	  	<td>รูปภาพ</td>
		<td><img src="pic/<?php echo $a['pic'];?>" alt="" width="50" height="50" id="preview">
		<input type="file" name="pic" id="pic"></td>
	  </tr>
      <tr>
        <td>เบอร์โทร</td>
        <td><input name="tel" type="text" id="tel" placeholder="08XXXXXXXX" maxlength="10" value="<?=$a['tel']?>"></td>
      </tr>
      <tr>
        <td>ที่อยู่</td>
        <td><textarea name="address" id="address"><?=$a['address']?></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" id="submit" value="เพิ่ม"></td>
        <td><input type="reset" name="reset" id="reset" value="ยกเลิก"></td>
      </tr>
    </tbody>
  </table>
  <input name="id_user" type="hidden" id="id_user" value="<?=$_REQUEST['id_user']?>">
<input name="picc" type="hidden" id="picc" value="<?=$a['pic'];?>">
</form>
<script>
	let pic= document.querySelector("#pic");
	let preview= document.querySelector("#preview");
	pic.onchange = evt =>
	{
		const [file] = pic.files;
		if(file){
			preview.src= URL.createObjectURL(file);
		}
	}
</script>
</body>
</html>
