<?php
    $user_id = $_GET['id'];
    require("includes/config.php");
    include("includes/functions.php");
    // B2: Khai bao truy van
    if(deleteUser($user_id)){
        header("Location:index.php");
        exit();
    }else{
        echo "Loi gi do ...";
    }
    // B3: Dong ket noi
    mysqli_close($conn);
?>