<?php session_start();
if(isset($_SESSION['id'])){
    header("location:index2.php");
    die();
}?>
<?php 
     $id = $_POST["ID"]; 
     $pass = $_POST["Password"];
     if($id == "admin" && $pass == "ad1234"){
        $_SESSION ['username']='admin';
        $_SESSION ['role']='a';
        $_SESSION ['id']=session_id();
        header("location:index2.php");
        die();
     }
     else if($id == "member" && $pass == "mem1234"){
        $_SESSION ['username']='member';
        $_SESSION ['role']='m';
        $_SESSION ['id']=session_id();
        header("location:index2.php");
        die();
    }
     else{
       $_SESSION['error'] = 'error';
       header("location:login.php");
       die();
    }
    ?>
