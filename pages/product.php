<?php

if (isset($_GET["type"])) {
    if ($_GET["type"] == "snowmilk") {
        $category = "Snowmilk";
    }else if ($_GET["type"] == "overdose") {
        $category = "Overdoses";
    }else if ($_GET["type"] == "all") {
        $category = "สินค้าทั้งหมด";
    }else if ($_GET["type"] == "icecream") {
        $category = "ไอศกรีมถาด";
    }
}

$product = [
    "ช็อคโกแลต",
    "มะนาว",
    "สตอร์เบอรี่",
    "ชาเขียว",
];

?>
<div class="container py-4 my-4">
    <h3 class="h3 text-center display-4" style="font-weight: bold;">
        <?php
        echo $category;
        ?>
    </h3>
</div>

<div class="py-4 my-4 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border-radius:30px 30px 0px 0px;">
                    <img src="./assets/images/snowmilk-click.png" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                    <div class="card-body">
                        <h3 class="text-center" style="color:rgba(101,47,38);">
                            พรีเมียม
                            <?php
                                echo $product[rand(0,3)];
                            ?>
                        </h3>
                        <h1 class="text-center display-1" style="font-weight: bold;">
                            <?php echo rand(79, 179); ?>
                        </h1>
                        <p class="text-center" style="font-weight: bold;font-size:15pt;">
                            บาท
                        </p>

                        <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">เพิ่มลงตะกร้า</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>