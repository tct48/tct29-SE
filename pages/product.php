<?php

if (isset($_GET["type"])) {
    if ($_GET["type"] == "snowmilk") {
        $category = "Snowmilk";
    } else if ($_GET["type"] == "overdose") {
        $category = "Overdoses";
    } else if ($_GET["type"] == "all") {
        $category = "สินค้าทั้งหมด";
    } else if ($_GET["type"] == "icecream") {
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
            <?php
            $Type = $_GET["type"];
            $sql = "SELECT item.id, item.Name, item.ImageURL, Price FROM item, catagory WHERE item.Catagory_id = catagory.id ";
            if($Type!="all"){
                if($Type=="snowmilk")
                    $Type=1;
                else if($Type=="overdose")
                    $Type=2;
                else if($Type=="icecream")
                    $Type=3;
                
                $sql.="AND item.Catagory_id=$Type";
            }
            // echo $sql;
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            $c = 4;
            $r = $row / $c;

            if ($row == 0) {
                echo "<div class='col-md-12'><h3 class='h3'>ไม่พบรายการสินค้า</h3></div>";
            }else{
                echo "<div class='col-md-12'><h3 class='h3'>จำนวนสินค้า $row รายการ</h3></div>";
            }

            for ($i = 0; $i < $row; $i++) {
                $data=mysqli_fetch_array($query);
            ?>
                <div class="col-md-3">
                    <div class="card" style="border-radius:30px 30px 0px 0px;">
                        <img src="<?php echo $data["ImageURL"]; ?>" class="card-img-top" style="border-radius: 30px 30px 0px 0px;" alt="...">
                        <div class="card-body">
                            <h3 class="text-center" style="color:rgba(101,47,38);">
                                <?php
                                echo $data["Name"];
                                ?>
                            </h3>
                            <h1 class="text-center display-1" style="font-weight: bold;">
                                <?php echo $data["Price"]; ?>
                            </h1>
                            <p class="text-center" style="font-weight: bold;font-size:15pt;">
                                บาท
                            </p>

                            <button class="btn btn-primary bg-primary w-100" style="border:0px; border-radius:30px;">สั่งซื้อสินค้า</button>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>