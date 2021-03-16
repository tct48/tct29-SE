<?php
    session_start();
    session_destroy();
    // unset($_SESSION["id"]);
    // unset($_SESSION["name"]);
    // echo $_SESSION["name"];
    echo "<script type='text/javascript'>alert('ขอบคุณที่ใช้บริการ');</script>";
    header('Location:../');
?>