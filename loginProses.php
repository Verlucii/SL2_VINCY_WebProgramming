<?php
    session_start();
    include("config.php");
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $str_query = "select * from customer1 where Username = '$Username' and Password1 = '$Password'";  
    $query = mysqli_query($connection, $str_query);  
    $data = mysqli_fetch_array($query);
    // $id = base64_encode($data['Username']);
    if($data['Username']==$Username&&$data['Password1']==$Password){
        $_SESSION['usernameSession']=$data['Username'];
        header("location: home.php");
    }else{
        header("location: login.php");
    }
?>