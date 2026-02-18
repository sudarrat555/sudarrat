<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914041 สุดารัตน์ สานะสี (เก๋)</title>

<style>
/* 💖 สไตล์สำหรับฟอร์มสีชมพูน่ารัก 💖 */

/* กำหนดพื้นฐานของ Body ด้วย Gradient ชมพูอ่อน */
body {
    font-family: 'Arial', sans-serif;
    /* ไล่สีชมพูอ่อนจากบนลงล่าง */
    background: linear-gradient(to bottom, #FFF0F5, #FFC0CB);
    color: #444; /* สีข้อความเข้มขึ้นเล็กน้อย */
    margin: 0;
    padding: 20px;
    min-height: 100vh; /* เต็มจอ */
}

/* จัดรูปแบบหัวข้อหลัก */
h1 {
    color: #E91E63; /* Deep Pink */
    text-align: center;
    padding: 15px;
    background-color: rgba(255, 255, 255, 0.8); /* พื้นหลังขาวโปร่งแสง */
    border-radius: 10px;
    margin-bottom: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* จัดรูปแบบฟอร์มหลัก */
form {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 20px; /* มุมโค้งมนน่ารัก */
    box-shadow: 0 8px 15px rgba(233, 30, 99, 0.2); /* เงาสีชมพู */
    max-width: 550px;
    margin: 0 auto;
    border: 3px solid #F8BBD0; /* กรอบสีชมพูอ่อน */
}

/* จัดรูปแบบ Label และการจัดวาง Input */
label {
    display: block;
    font-weight: bold;
    color: #C2185B; /* สีชมพูเข้ม */
    margin-top: 15px;
    margin-bottom: 5px;
}

/* จัดรูปแบบ Input ทั่วไป */
input[type="text"],
input[type="number"],
input[type="date"],
select,
textarea {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #F48FB1; /* กรอบสีชมพูพาสเทล */
    border-radius: 8px;
    box-sizing: border-box;
    transition: border-color 0.3s;
}

/* เน้น Input เมื่อโฟกัส */
input:focus, textarea:focus, select:focus {
    border-color: #E91E63; /* สีชมพูเข้มเมื่อใช้งาน */
    box-shadow: 0 0 5px rgba(233, 30, 99, 0.5);
    outline: none;
}

/* จัดรูปแบบปุ่ม */
button {
    background-color: #FF6699; /* Hot Pink */
    color: white;
    padding: 12px 20px;
    margin: 5px 8px 5px 0;
    border: none;
    border-radius: 25px; /* ปุ่มกลมน่ารัก */
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
    box-shadow: 0 4px #E91E63; /* เพิ่มเงาด้านล่าง */
}

/* เปลี่ยนสีปุ่มเมื่อชี้เมาส์ */
button:hover {
    background-color: #E91E63; /* Deep Pink */
    box-shadow: 0 2px #C2185B;
    transform: translateY(2px); /* เอฟเฟกต์กดปุ่ม */
}

/* จัดรูปแบบเฉพาะปุ่ม "ยกเลิก" */
button[type="reset"] {
    background-color: #F8BBD0; /* ชมพูอ่อน */
    color: #444;
    box-shadow: 0 4px #F06292;
}
button[type="reset"]:hover {
    background-color: #F48FB1;
    box-shadow: 0 2px #E91E63;
}

/* จัดรูปแบบส่วนผลลัพธ์ PHP */
.result-box {
    margin-top: 40px;
    padding: 25px;
    border: 2px dashed #E91E63; /* กรอบเส้นประสีชมพู */
    background: linear-gradient(to right, #FFFDE7, #FFFAEE); /* พื้นหลังอ่อนๆ */
    border-radius: 15px;
    max-width: 550px;
    margin-left: auto;
    margin-right: auto;
    color: #880E4F; /* สีข้อความเข้ม */
}

.result-box h3 {
    color: #C2185B;
    margin-top: 0;
    text-align: center;
    font-size: 1.5em;
    border-bottom: 2px solid #F8BBD0;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

/* จัดรูปแบบแสดงสีที่ชอบใน PHP */
.color-display {
    display: inline-block;
    height: 25px;
    width: 250px;
    border: 2px solid #C2185B;
    vertical-align: middle;
    margin-left: 10px;
    border-radius: 5px;
    line-height: 25px; 
    padding: 0 5px;
    color: #fff;
    text-shadow: 1px 1px 2px #000;
    font-weight: bold;
}

/* ปรับ HR */
hr {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), #FFC0CB, rgba(0, 0, 0, 0));
    margin: 30px auto;
    width: 550px;
}
</style>
</head>

<body>
<h1>💖 ฟอร์มลงทะเบียนนักเรียนน่ารัก 💖</h1>

<form method="post" action="">
    <label for="fullname">ชื่อ-นามสกุล <span style="color:#E91E63;">*</span></label>
    <input type="text" name="fullname" id="fullname" autofocus required>

    <label for="phone">เบอร์โทร <span style="color:#E91E63;">*</span></label>
    <input type="text" name="phone" id="phone" required>

    <label for="height">ส่วนสูง (100-200 ซม.) <span style="color:#E91E63;">*</span></label>
    <input type="number" name="height" id="height" min="100" max="200" required> ซม.

    <label for="address">ที่อยู่</label>
    <textarea name="address" id="address" cols="40" rows="4"></textarea>

    <label for="birthday">วันเดือนปีเกิด</label>
    <input type="date" name="birthday" id="birthday">

    <label for="color">สีที่ชอบ</label>
    <input type="color" name="color" id="color" value="#FF6699"><br> <label for="major">สาขาวิชา</label>
    <select name="major" id="major">
        <option value="การบัญชี">การบัญชี</option>
        <option value="การตลาด">การตลาด</option>
        <option value="การจัดการ">การจัดการ</option>
        <option value="การคอมพิวเตอร์ธุรกิจ">การคอมพิวเตอร์ธุรกิจ</option>
    </select>
    <br><br>

    <button type="submit" name="Submit">สมัครสมาชิก</button>
    <button type="reset">ยกเลิก</button>
    <button type="button" onClick="window.location='https://www.msu.ac.th'">GO to MSU</button>
    <button type="button" onDblClick="alert('อยากอีสมัทฉะ');">Hello</button>
    <button type="button" onClick="window.print();">พิมพ์</button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$height = $_POST['height'];
	$address = $_POST['address'];
	$birthday = $_POST['birthday'];
	$color = $_POST['color'];
	$major = $_POST['major'];

    // แสดงผลลัพธ์ในกล่องสีชมพูสวยงาม
    echo "<div class='result-box'>";
    echo "<h3>✨ ข้อมูลของ: ".$fullname." ✨</h3>";
	echo "ชื่อ-สกุล: <strong>".$fullname."</strong><br>";
	echo "เบอร์โทร: <strong>".$phone."</strong><br>";
	echo "ส่วนสูง: <strong>".$height." ซม.</strong><br>";
	echo "ที่อยู่: <strong>".nl2br($address)."</strong><br>"; 
	echo "วันเดือนปีเกิด: <strong>".$birthday."</strong><br>";
	
    // แสดงผลสีที่ชอบด้วยบล็อกสี
	echo "สีที่ชอบ: ";
    echo "<span class='color-display' style='background-color:".$color.";'>".$color."</span><br>";

	echo "สาขาวิชา: <strong>".$major."</strong><br>";
    echo "</div>";
}
?>
</body>
</html>