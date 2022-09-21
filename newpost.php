<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
 if(isset($_SESSION['id'])){
?>
<body>
     ผู้ใช้ : <?php echo $_SESSION ['username'] ?>
    <table style="border-collapse:collapse">
    <tr><td>หมวดหมู่ :</td>
    <td><select name="หมวดหมู่">
            <option value="ทั้งหมด">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select></td></tr><br>
        <tr><td>หัวข้อ :</td><td><input type="text" name="topic" size="35"></td></tr>
        <tr><td>เนื้อหา :</td><td> <textarea name="comment"cols="50" rows="10"></textarea></td></tr>
        <tr><td colspan="2" align ="center"><input type="submit" value="บันทึกข้อความ"></td></tr>
        </table>
</body>
<?php 
 } else { 
    header("location:index2.php");
    die(); }
    ?>
</html>