<?php
    session_start();
    include("./connect.php");

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM users WHERE email ='$username' AND password = '$password'";
    // echo $sql;
    $query =mysqli_query($conn,$sql);
    $row = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
    if($row==0){
        echo "<script type='text/javascript'>alert('Username or Password is not correct');</script>";
    }else{
        $_SESSION["id"]=$data["id"];
        $_SESSION["name"]=$data["Name"];
        echo "<script type='text/javascript'>alert('Welcome to my website');</script>";
        header('Location:../');
    }
    ?>
        <script>
            // window.location.href = "../?r=register";
        </script>
    <?php
?>