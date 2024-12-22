<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css&quot; rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js&quot; integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1>เช็คเลขคู่หรือคี่</h1>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ค่าเริ่มต้น</label>
                    <input name="ตัวเลขแรก" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Ex. 2"> <!--  [ input name="ตัวเลขแรก" ] ส่วนที่จะรับข้อมูลแล้ว จะส่งไปคำนวณหลัง submit-->
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ค่าสิ้นสุด</label>
                    <input name="ตัวเลขสุดท้าย" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Ex. 4"> 
                </div>
               
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            <?php
            if (isset($_POST['ตัวเลขแรก']) && isset($_POST['ตัวเลขสุดท้าย'])) { //ส่วนเช็คว่า ค่าเริ่มตต้น กับ ค่าสุดท้ายมีรึยัง พร้อมกับเช็คว่า ค่าเริ่ม ต้อง น้อยกว่า ค่าท้าย เสมอ
                if ($_POST['ตัวเลขแรก'] < $_POST['ตัวเลขสุดท้าย']) {
                    $number = (int) $_POST['ตัวเลขแรก'];
                $number2 = (int) $_POST['ตัวเลขสุดท้าย'];
                echo "<h2>เลขคู่หรือคี่ $number - $number2</h2>";
                echo "<table class='table table-bordered'>";
                for ($i = $number; $i <= $number2; $i++) {// LOOP
                    if ($i % 2 == 0) {
                        $ans = "เลขคู่";
                    } else {
                        $ans = "เลขคี่";
                    }
                    echo "<tr><td>$i</td><td>$ans</td></tr>";
                    
                }
                echo "</table>";
                }else{
                    echo "<div class='alert alert-danger'>กรุณากรอกเลขเริ่มต้นให้น้อยกว่าค่าสิ้นสุด</div>";
                }                                                                        
            }          
            elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo "<div class='alert alert-danger'>กรุณากรอกใหม่อีกครั้ง</div>";
            }
            ?>
        </div>
    </body>
</html>