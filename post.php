้<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <style type="text/css">
        table th{text-align : left;background-color: #6CD2FE;}
    </style>
</head>
<body>
    <h1 style="text-align: center;">MY WEBBOARD</h1>
    <hr>
    <div align = center>
    ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?><br>
    <?php 
    $oe = $_GET["id"]; 
    if($oe % 2 ==0) 
        echo "เป็นกระทู้หมายเลขคู่";
    else
        echo "เป็นกระทู้หมายเลขคี่";    
    ?>
    <br>
    <br>
    <table style = "border:2px solid black; width:40%"align ="center">
           <tr><th colspan="2" >แสดงความคิดเห็น</th></tr>
           <td><textarea name="comment"  cols="80" rows="10" align ="center"></textarea></td></tr> 
           <tr><td colspan="2" align ="center"><input type="submit" value="ส่งข้อความ"></td></tr>        
    </table>
    <p style="text-align: center;"><a href="index2.php">กลับไปหน้าหลัก</a></p>
    </div>
</body>
</html>