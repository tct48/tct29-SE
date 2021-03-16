<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button#b a {
            color: white !important;
            text-decoration: none;
        }

        button#b a:hover {
            background-color: #6c757d !important;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION["name"])) {
        $name = $_SESSION["name"];
    }
    ?>
    <!-- heading -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if (!isset($_GET["r"])) echo "active"; ?>" aria-current="page" href="?">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_GET["r"] == "about") echo "active"; ?>" aria-current="page" href="?r=about">ABOUT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($_GET["r"] == "product") echo "active"; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?r=product&type=all">สินค้าทั้งหมด</a></li>
                                <li><a class="dropdown-item" href="?r=product&type=snowmilk">Snowmilk</a></li>
                                <li><a class="dropdown-item" href="?r=product&type=overdose">Overdoses</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="?r=product&type=icecream">ไอศกรีมถาด</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_GET["r"] == "contact") echo "active"; ?>" aria-current="page" href="?r=contact">CONTACT</a>
                        </li>
                        <!-- ถ้ายังไม่ได้ล๊อกอินเข้าสู่ระบบ -->
                        <?php
                        if (!isset($_SESSION["id"])) {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle  <?php if ($_GET["r"] == "register") echo "active"; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    LOGIN
                                </a>
                                <div class="dropdown-menu p-2">
                                    <form class="form-horizontal" action="./models/login.php" method="post" accept-charset="UTF-8">
                                        <input class="form-control" type="text" name="username" placeholder="Username.."><br>
                                        <input class="form-control" type="password" name="password" placeholder="Password.."><br>
                                        <button class="btn btn-primary bg-primary w-100 mb-2" style="border:0px;" type="submit" name="submit">เข้าสู่ระบบ</button>
                                        <button id="b" class="btn btn-primary bg-secondary w-100" style="border:0px;" type="submit" name="submit">
                                            <a href="?r=register" id="register">สมัครสมาชิก</a>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        <?php
                        } else {
                        ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php if ($_GET["r"] == "login") echo "active"; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img style="max-width: 30px;height:30px;border-radius:100%;" src="./assets/images/overdose.png" alt="">
                                    <?php echo $name; ?>
                                </a>
                                <div class="dropdown-menu p-2">
                                    <form action="./models/logout.php" method="post" class="form-horizontal">
                                        <button class="btn btn-primary bg-secondary w-100" style="border:0px;" type="submit">
                                            ออกจากระบบ
                                        </button>
                                    </form>
                                </div>

                            </li>

                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</body>

</html>