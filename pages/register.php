<!-- สมัครสมาชิก -->
<br>
<h1 class="text-center text-dark" style="font-weight: bold;">สมัครสมาชิก</h1>
<div class="container px-5 mb-5" style="font-weight: bold;">
    <form action="./models/register.php" method="POST">

        <div class="form-group">
            <label for="Email">อีเมล:</label>
            <input type="email" class="form-control" id="email" placeholder="อีเมล" name="email">
        </div>

        <div class="form-group">
            <label for="Password">รหัสผ่าน:</label>
            <input type="password" class="form-control" id="password" placeholder="รหัสผ่าน" name="password">
        </div>

        <div class="form-group">
            <label for="aPassword">ยืนยันรหัสผ่าน:</label>
            <input type="password" class="form-control" id="apassword" placeholder="ยืนยันรหัสผ่าน" name="password">
        </div>

        <div class="form-group">
            <label for="Name">ชื่อ-นามสกุล:</label>
            <input type="text" class="form-control" placeholder="ชื่อ" name="fname">
            <input type="text" class="form-control" placeholder="นามสกุล" name="lname">
        </div>


        <div class="form-group">
            <label for="DOB">วันเกิด:</label>
            <input type="date" class="form-control" id="dob" placeholder="" name="dob">
        </div>

        <label for="gender">เพศ :</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
            ชาย
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="female" checked>
            หญิง
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="etc" checked>
            อื่น ๆ
            </label>
        </div>


        <div class="form-group ">
            <label for="tel" class="col-2 col-form-label">เบอร์โทรศัพท์:</label>
            
                <input class="form-control" type="tel" placeholder="เบอร์โทรศัพท์" name="tel">
            
        </div>

        <br>
        <div class="text-center">
            <button type="submit" class="btn mx-5" style="background-color: #D72D28; color: #EBE3D0; border:1px solid #D72D28;">ยืนยัน</button>
            <button class="btn mx-5" style="color: #D72D28;border:1px solid #D72D28;">ยกเลิก</button>
        </div>
    </form>

</div>