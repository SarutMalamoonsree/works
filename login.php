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
    <title>Login</title>
    <style type="text/css">
        table th{text-align : left;background-color: #6CD2FE;}
    </style>
</head>
<body>
    <h1 style="text-align: center;">MY WEBBOARD</h1>
    <hr>
    <form action="verify.php" method="post">
    <table style = "border: 2px solid black; width:40%"align ="center">
        <tr><th colspan="2">เข้าสู่ระบบ</th></tr>
        <tr><td>
            <tr><td>Login</td>    
            <td><input type="text" name="ID" size="35"><br></td></tr>
            <tr><td>Password</td> 
            <td><input type="password" name="Password" size="35"></td></tr>
            <tr><td colspan="2" align ="center" ><input type="submit" value="Login"></td></tr>
            </td></tr>
    </table>
</form>
    <p style="text-align: center;">ถ้ายังไม่ได้สมัครสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></p>
</body>
</html>