<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>66010914041 สุดารัตน์ สานะสี (เก๋)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="color"],
        textarea,
        select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        button {
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        button[type="reset"] {
            background-color: #f44336;
            color: white;
        }

        button[type="button"] {
            background-color: #2196F3;
            color: white;
        }

        button:hover {
            opacity: 0.9;
        }

        .color-display {
            width: 100px;
            height: 30px;
            border-radius: 4px;
            margin-top: 5px;
        }

        .output-section {
            background-color: #f9f9f9;
            padding: 20px;
            margin-top: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .output-section h3 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>ฟอร์มรับข้อมูล - สุดารัตน์ สานะสี (เก๋) GPT </h1>

    <div class="form-container">
        <form method="post" action="">
            <label for="fullname">ชื่อ-นามสกุล</label>
            <input type="text" name="fullname" id="fullname" required autofocus placeholder="กรอกชื่อและนามสกุล">

            <label for="phone">เบอร์โทร</label>
            <input type="text" name="phone" id="phone" required placeholder="กรอกเบอร์โทร">

            <label for="height">ส่วนสูง</label>
            <input type="number" name="height" id="height" min="100" max="200" required placeholder="กรอกส่วนสูง (ซม.)">

            <label for="address">ที่อยู่</label>
            <textarea name="address" id="address" rows="4" placeholder="กรอกที่อยู่"></textarea>

            <label for="birthday">วันเดือนปีเกิด</label>
            <input type="date" name="birthday" id="birthday">

            <label for="color">สีที่ชอบ</label>
            <input type="color" name="color" id="color">

            <label for="major">สาขาวิชา</label>
            <select name="major" id="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การตลาด">การตลาด</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="การคอมพิวเตอร์ธุรกิจ">การคอมพิวเตอร์ธุรกิจ</option>
            </select>

            <div class="button-group">
                <button type="submit" name="Submit">สมัครสมาชิก</button>
                <button type="reset">ยกเลิก</button>
                <button type="button" onClick="window.location='https://www.msu.ac.th'">GO to MSU</button>
                <button type="button" onDblClick="alert('อยากอีสมัทฉะ');">Hello</button>
                <button type="button" onClick="window.print();">พิมพ์</button>
            </div>
        </form>
    </div>

    <div class="output-section">
        <?php
        if (isset($_POST['Submit'])) {
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $height = $_POST['height'];
            $address = $_POST['address'];
            $birthday = $_POST['birthday'];
            $color = $_POST['color'];
            $major = $_POST['major'];

            echo "<h3>ข้อมูลที่กรอก</h3>";
            echo "ชื่อ-สกุล: " . $fullname . "<br>";
            echo "เบอร์โทร: " . $phone . "<br>";
            echo "ส่วนสูง: " . $height . " ซม.<br>";
            echo "ที่อยู่: " . nl2br($address) . "<br>";
            echo "วันเดือนปีเกิด: " . $birthday . "<br>";
            echo "สีที่ชอบ: <div class='color-display' style='background-color:{$color};'></div><br>";
            echo "สาขาวิชา: " . $major . "<br>";
        }
        ?>
    </div>

</body>
</html>
