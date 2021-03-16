<?php
    include("./connect.php");
    if(isset($_POST)){
        // echo $_POST["email"];

        $name = $_POST["fname"] . " " . $_POST["lname"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $status = 1;

        // หา email นี้ในระบบ
        $sql = "SELECT * FROM users WHERE email='$email'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
        // มี email นี้แล้วในฐานข้อมูล
        if($row==1){
            echo "<script type='text/javascript'>alert('มี Username นี้ในระบบแล้ว');</script>";
            ?>
                <script>
                    window.location.href = "../?r=register";
                </script>
            <?php
        }else{
            $sql="INSERT INTO users (email, password, Name, DOB, Gender, Status, created_at) VALUES ('$email','$password','$name','$dob','$gender','$status',NOW())";
            $query = mysqli_query($conn,$sql);
            if($query){
                echo "<script type='text/javascript'>alert('สมัครสมาชิกสำเร็จ');</script>";
            }else{
                echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง');</script>";
            }
            ?>
                <script>
                    window.location.href = "../?r=register";
                </script>
            <?php
            echo "BBB";
        }
    }
?>