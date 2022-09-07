<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style="text-align: center;">MY WEBBOARD</h1>
    <hr>
    <div align="center">
    <?php 
     $id = $_POST["ID"]; 
     $pass = $_POST["Password"];
     if($id == "admin" && $pass == "ad1234")
        echo "ยินดีต้อนรับคุณ ADMIN";
     else if($id == "member" && $pass == "mem1234")
        echo "ยินดีต้อนรับคุณ MEMBER";
     else
        echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    ?>
     <br>
    <a href="index2.php">กลับไปยังหน้าหลัก</a></p>
    </div>
</body>
</html>