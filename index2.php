<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">MY WEBBOARD</h1>
    <hr>
   
        หมวดหมู่ :
        <select name="หมวดหมู่">
            <option value="ทั้งหมด">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>
        <a href="login.html" style="float:right;">เข้าสู่ระบบ</a>
  
    <br>
    <ul>
        <?php 
        for($i = 1; $i<=10;$i++)
        echo "<li><a href=post.php?id="."$i".">กระทู้ที่ ".$i."</a></li>";
        ?>
   </ul>
</body>
</html>