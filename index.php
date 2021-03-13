<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - Snowmilk Gelato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="./assets/css/style.css" rel="stylesheet" />
    <style>
        * {
            font-family: 'Kanit', sans-serif;
        }

        .banner {
            background: url("./assets/images/BG.jpg") no-repeat center center;
            background-size:cover;
            background-attachment: fixed;
        }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
</head>

<body>
        Hello
    <?php
    include('./layouts/heading.php');
    ?>
    <!-- image -->
    <div class="banner">
        &nbsp;
    </div>

    <?php
    $path = "./pages/home.php";
    if (isset($_GET["r"])) {
        $path = "./pages/" . $_GET["r"] . ".php";
    }
    include($path);

    include("./layouts/footer.php");
    ?>
</body>

</html>