<?php session_start();
if(isset($_SESSION['id'])){
    header("location:index2.php");
    die();
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Verify</title>
</head>
<body>
    <h1 style="text-align: center;">MY WEBBOARD</h1>
    <hr>
    <div align="center">
    <?php 
     $id = $_POST["ID"]; 
     $pass = $_POST["Password"];
     if($id == "admin" && $pass == "ad1234"){
        echo "ยินดีต้อนรับคุณ ADMIN";
        $_SESSION ['username']='admin';
        $_SESSION ['role']='a';
        $_SESSION ['id']=session_id();
     }
     else if($id == "member" && $pass == "mem1234"){
        echo "ยินดีต้อนรับคุณ MEMBER";
        $_SESSION ['username']='member';
        $_SESSION ['role']='m';
        $_SESSION ['id']=session_id();
    }
     else{
        echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    }
    ?>
    <br>
    <a href="index2.php">กลับไปยังหน้าหลัก</a></p>
    </div>
</body>
</html>